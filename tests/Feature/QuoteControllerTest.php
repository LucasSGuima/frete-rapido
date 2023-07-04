<?php

namespace Tests\Feature;

use App\Models\Offer;
use App\Models\Quote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuoteControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_quote_with_data_inclusion_and_validation_and_with_success_status()
    {
        // Crie um cenário de teste fornecendo dados de entrada válidos
        $data = [
            "recipient" => [
                "address" => [
                    "zipcode" => "01311000"
                ]
            ],
            "volumes" => [
                [
                    "category" => 7,
                    "amount" => 1,
                    "unitary_weight" => 5,
                    "price" => 349,
                    "sku" => "abc-teste-123",
                    "height" => 0.2,
                    "width" => 0.2,
                    "length" => 0.2
                ],
                [
                    "category" => 7,
                    "amount" => 2,
                    "unitary_weight" => 4,
                    "price" => 556,
                    "sku" => "abc-teste-527",
                    "height" => 0.4,
                    "width" => 0.6,
                    "length" => 0.15
                ]
            ]
        ];


        // Faça a chamada HTTP para a rota da ação 'quote' com os dados de teste
        $response = $this->postJson('/api/quote/', $data);

        // Verifique se a resposta HTTP está correta
        $response->assertStatus(200);

        // Verifique se a estrutura da resposta JSON está correta
        $response->assertJsonStructure([
            'carrier' => [
                '*' => [
                    'carrier_name',
                    'service',
                    'final_price',
                    'deadline'
                ],
            ],
        ]);

        // Obtenha a resposta JSON como um array
        $responseData = $response->json();

        // Conte quantos 'carrier' estão presentes na resposta
        $carrierCount = count($responseData['carrier']);

        // Verifique se os dados foram salvos corretamente no banco de dados
        $this->assertDatabaseCount('quotes', 1);
        $this->assertDatabaseCount('offers', $carrierCount);

        // adicione outras verificações necessárias nos dados salvos no banco de dados
    }

    public function test_metrics_with_data_inclusion_and_validation_and_with_success_status()
    {
        $quote = Quote::create(
            [
                'request_id' => '111111111111',
                'registered_number_shipper' => '2222222222222',
                'registered_number_dispatcher' => '33333333333',
                'zipcode_origin' => (int) '01311000',
            ]
        );

        // Crie algumas ofertas de exemplo para serem usadas nos testes
        $offers = [
            [
                'quotes_id' => $quote['id'],
                'carrier_name' => 'Carrier 1',
                'carrier_reference' => 'carrier1',
                'service' => 'Service 1',
                'final_price' => 100,
                'deadline' => 2,
            ],
            [
                'quotes_id' => $quote['id'],
                'carrier_name' => 'Carrier 1',
                'carrier_reference' => 'carrier1',
                'service' => 'Service 2',
                'final_price' => 200,
                'deadline' => 3,
            ],
            [
                'quotes_id' => $quote['id'],
                'carrier_name' => 'Carrier 2',
                'carrier_reference' => 'carrier2',
                'service' => 'Service 1',
                'final_price' => 150,
                'deadline' => 2,
            ],
            [
                'quotes_id' => $quote['id'],
                'carrier_name' => 'Carrier 2',
                'carrier_reference' => 'carrier2',
                'service' => 'Service 2',
                'final_price' => 250,
                'deadline' => 1,
            ],
            [
                'quotes_id' => $quote['id'],
                'carrier_name' => 'Carrier 3',
                'carrier_reference' => 'carrier3',
                'service' => 'Service 1',
                'final_price' => 300,
                'deadline' => 2,
            ],
        ];

        // Salve as ofertas no banco de dados
        foreach ($offers as $offer) {
            Offer::create($offer);
        }

        // Faça a chamada HTTP para a rota da ação 'metrics'
        $response = $this->get('/api/metrics');

        // Verifique se a resposta HTTP está correta
        $response->assertStatus(200);

        // Verifique se a estrutura da resposta JSON está correta
        $response->assertJsonStructure([
            'quote_count_by_carrier',
            'total_price_by_carrier',
            'average_price_by_carrier',
            'cheapest_freight',
            'expensive_freight'
        ]);

        // Verifique os valores retornados na resposta JSON
        $responseData = $response->json();

        $this->assertEquals([
            'carrier1' => 2,
            'carrier2' => 2,
            'carrier3' => 1
        ], $responseData['quote_count_by_carrier']);

        $this->assertEquals([
            'carrier1' => 300,
            'carrier2' => 400,
            'carrier3' => 300
        ], $responseData['total_price_by_carrier']);

        $this->assertEquals([
            'carrier1' => 150,
            'carrier2' => 200,
            'carrier3' => 300
        ], $responseData['average_price_by_carrier']);

        $this->assertEquals(100, $responseData['cheapest_freight']);
        $this->assertEquals(300, $responseData['expensive_freight']);
    }

    public function test_metrics_with_status_success()
    {
        // Faça a chamada HTTP para a rota da ação 'metrics'
        $response = $this->get('/api/metrics');

        // Verifique se o status da resposta é 200
        $response->assertStatus(200);
    }

    public function test_metrics_with_success_status_with_metric()
    {
        // Faça a chamada HTTP para a rota da ação 'metrics'
        $response = $this->get('/api/metrics/5');

        // Verifique se o status da resposta é 200
        $response->assertStatus(200);
    }
}
