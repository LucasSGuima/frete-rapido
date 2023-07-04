<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
use App\Models\Offer;
use GuzzleHttp\Client;
use App\Models\Quote;
use Carbon\Carbon;
use GuzzleHttp\Exception\RequestException;

class QuoteController extends Controller
{
    protected $url = "https://sp.freterapido.com/api/v3/quote/simulate";

    protected $headers = [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json'
    ];

    protected $body = [];

    public function __construct()
    {
        $this->body['shipper'] = [
            'registered_number' => env('CNPJ_REMETENTE'),
            'token' => env('TOKEN_AUTENTICACAO'),
            'platform_code' => env('CODIGO_PLATAFORMA')
        ];
    }

    public function quote(QuoteRequest $request)
    {
        $requestData = $request->validated();
        $client = new Client();

        $this->body['recipient'] = [
            'type' => 0,
            'country' => 'BRA',
            'zipcode' => (int) $requestData['recipient']['address']['zipcode'],
        ];

        foreach ($requestData['volumes'] as $k => $volume) {
            $volumes[] = [
                'category' => (string) $volume['category'],
                'amount' => $volume['amount'],
                'unitary_price' => $volume['price'],
                'unitary_weight' => $volume['unitary_weight'],
                'sku' => $volume['sku'],
                'height' => $volume['height'],
                'width' => $volume['width'],
                'length' => $volume['length']
            ];
        }

        $this->body['dispatchers'] = [
            [
                'registered_number' => env('CNPJ_REMETENTE'),
                'zipcode' => (int) env('CEP'),
                'volumes' => $volumes
            ]
        ];

        $this->body['simulation_type'] = [0];

        try {

            $response = $client->post($this->url, [
                'headers' => $this->headers,
                'json' => $this->body,
            ]);

            $result = json_decode($response->getBody(), true);

            $quote = Quote::create([
                'request_id' => $result['dispatchers'][0]['request_id'],
                'registered_number_shipper' => $result['dispatchers'][0]['registered_number_shipper'],
                'registered_number_dispatcher' => $result['dispatchers'][0]['registered_number_dispatcher'],
                'zipcode_origin' => $result['dispatchers'][0]['zipcode_origin']
            ]);

            if(isset($result['dispatchers'][0]['offers'])) {

                foreach ($result['dispatchers'][0]['offers'] as $k => $offer) {
                    $offerData = [
                        'quotes_id' => $quote['id'],
                        'carrier_name' => $offer['carrier']['name'],
                        'carrier_reference' => $offer['carrier']['reference'],
                        'service' => $offer['service'],
                        'final_price' => $offer['final_price'],
                        'deadline' => $this->deadline($offer['delivery_time']),
                    ];

                    Offer::create($offerData);

                    unset($offerData['quotes_id']);
                    unset($offerData['carrier_reference']);
                    $offers[] = $offerData;
                }

                return response()->json([
                    'carrier' => $offers
                ]);

            } else {

                return response(null, 204);

            }

        } catch (RequestException $e) {

            $errorMessage = $this->exception_message($e);

            return response()->json([
                'error' => $errorMessage
            ], 500);
        }
    }

    public function metrics($metric = null)
    {
        if($metric) {
            $offers = Offer::latest()->take($metric)->get();
        } else {
            $offers = Offer::all();
        }

        $metrics = [];

        if(env('AGRUPAR_NOME')) {
            $column_name = 'carrier_name';
        } else {
            $column_name = 'carrier_reference';
        }

        // Quantidade de resultados por transportadora
        $quoteCountByCarrier = $offers->groupBy($column_name)->map->count();
        $metrics['quote_count_by_carrier'] = $quoteCountByCarrier;

        // Total de "final_price" por transportadora (arredondado para 2 casas decimais)
        $totalPriceByCarrier = $offers->groupBy($column_name)->map(function ($offers) {
            return round($offers->sum('final_price'), 2);
        });
        $metrics['total_price_by_carrier'] = $totalPriceByCarrier;

        // Média de "final_price" por transportadora (arredondado para 2 casas decimais)
        $averagePriceByCarrier = $offers->groupBy($column_name)->map(function ($offers) {
            return round($offers->avg('final_price'), 2);
        });
        $metrics['average_price_by_carrier'] = $averagePriceByCarrier;

        // O frete mais barato geral (arredondado para 2 casas decimais)
        $cheapestFreight = round($offers->min('final_price'), 2);
        $metrics['cheapest_freight'] = $cheapestFreight;

        // O frete mais caro geral (arredondado para 2 casas decimais)
        $expensiveFreight = round($offers->max('final_price'), 2);
        $metrics['expensive_freight'] = $expensiveFreight;

        return response()->json($metrics);
    }

    private function deadline($delivery_time)
    {
        // Verifica se o campo 'days' está presente no array $delivery_time
        if (isset($delivery_time['days'])) {
            // Obtém o valor de 'days' do array
            $days = $delivery_time['days'];

            // Verifica se o campo 'hours' também está presente e possui um valor maior que zero
            if (isset($delivery_time['hours']) && $delivery_time['hours'] > 0) {
                // Incrementa o valor de 1 dia em 'days' arredondando o deadline para cima
                $days++;
            }
        } else {
            // Obtém a data atual
            $currentDate = Carbon::now();

            // Converte a data estimada para o formato Carbon
            $estimatedDate = Carbon::parse($delivery_time['estimated_date']);

            // Calcula a diferença em dias entre a data atual e a data estimada
            $days = $currentDate->diffInDays($estimatedDate);
        }

        return $days;
    }

    private function exception_message($e)
    {
        $errorMessage = 'Erro ao consumir a API da Frete Rápido: ';

        if ($e->hasResponse()) {
            $statusCode = $e->getResponse()->getStatusCode();
            $errorResponse = json_decode($e->getResponse()->getBody(), true);

            // Adicione a mensagem de erro com base no código de status
            if ($statusCode === 400) {
                $errorMessage .= 'Requisição inválida.';
            } elseif ($statusCode === 500) {
                $errorMessage .= 'Erro interno do servidor.';
            } else {
                $errorMessage .= 'Erro desconhecido.';
            }
        } else {
            $errorMessage .= 'Erro de conexão ou falha na requisição.';
        }

        return $errorMessage;
    }
}

