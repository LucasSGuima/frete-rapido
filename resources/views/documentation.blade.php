<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Documentação</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta19/dist/css/tabler.min.css">
</head>

<body>
    <script src="https://preview.tabler.io/dist/js/demo-theme.min.js"></script>

    <div class="page">
        <header class="navbar navbar-expand-md d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    Documentação
                </h1>

                <div class="navbar-nav flex-row order-md-last">
                    <div class="d-none d-md-flex">
                        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Dark Mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                            </svg>
                        </a>

                        <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Light Mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <div class="page-wrapper">

            <div class="page-body">
                <div class="container-xl">
                    <div class="card card-lg">
                        <div class="card-body">
                            <div class="space-y-4">

                                <div>
                                    <h2 class="mb-3">1. Introdução</h2>

                                    <div id="faq-1" class="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="accordion-item">
                                            <div class="accordion-header" role="tab">
                                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-1-1">Entendendo o Desafio!</button>
                                            </div>

                                            <div id="faq-1-1" class="accordion-collapse collapse show" role="tabpanel" data-bs-parent="#faq-1">
                                                <div class="accordion-body pt-0">
                                                    <div>
                                                        <p>
                                                            O desafio foi: Desenvolver uma API Rest para consultas externas e devolver apenas valores esperados.
                                                        </p>
                                                        <p>
                                                            Olá me chamo Lucas, e desenvolvi esse desafio solicitado pela Frete Rápido, segue uma mini documentação da aplicação. Ahh, você também pode deixar a página no <a href="?theme=dark">MODO ESCURO</a> ou
                                                            <a href="?theme=light">MODO CLARO</a>
                                                        </p>
                                                        <p>
                                                            Ah!! Importante dizer, deixei a API online temporariamente em meu website, esta em <a href="https://frete-rapido.lucassilvaguimaraes.com.br">https://frete-rapido.lucassilvaguimaraes.com.br/</a>, caso venha a testar por ela apenas troque localhost/api/ por https://frete-rapido.lucassilvaguimaraes.com.br/api/.
                                                        </p>
                                                        <h3>
                                                            Atenção!! A API online não esta gravando no banco de dados!!
                                                        </h3>
                                                        <p>
                                                            Fiz várias  simulações em vários CEPS diferentes do estado de São Paulo. Ela irá consultar e retornar dados perfeitamente, porém não ira registrar no banco de dados.
                                                            A operação GET será possiível graças os dados já registrados na simulação. <strong>A API local está persistindo os dados normalmente.</strong>
                                                        </p>
                                                        <p>
                                                            Em caso de correção ou contato, sinta-se avontade para entrar em contato comigo atraves do <a href="linkedin.com/in/lucas-guimarães-17077b21b">Linked In</a> recebi esse desafio atraves da <a href="linkedin.com/in/kerollyn-cristina-723148166">Kerollyn Cristina</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <div class="accordion-header" role="tab">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-2">Resumo do Desafio!</button>
                                            </div>

                                            <div id="faq-1-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-1">
                                                <div class="accordion-body pt-0">
                                                    <div>
                                                        <h2>Rota 1: [POST] .../quote</h2>
                                                        <ul>
                                                            <li>Objetivo: Criar uma rota para receber dados de entrada e realizar uma cotação fictícia com a API da Frete Rápido.</li>
                                                            <li>Entrada: JSON contendo os dados de entrada necessários.</li>
                                                            <li>Processo: Utilizar os dados de entrada para complementar os dados necessários e realizar a cotação na API da Frete Rápido.</li>
                                                            <li>Retorno Esperado: JSON com os valores da cotação de diferentes transportadoras.</li>
                                                        </ul>

                                                        <h2>Rota 2: [GET] .../metrics?last_quotes={?}</h2>
                                                        <ul>
                                                            <li>Objetivo: Consultar métricas das cotações armazenadas no banco de dados.</li>
                                                            <li>Parâmetro Opcional: "last_quotes" para definir a quantidade de cotações a serem consideradas (em ordem decrescente).</li>
                                                            <li>Processo: Consultar os retornos gravados no banco de dados e retornar as métricas requeridas.</li>
                                                            <li>Métricas:</li>
                                                            <ul>
                                                                <li>Quantidade de resultados por transportadora.</li>
                                                                <li>Total de "preco_frete" por transportadora (final_price na API).</li>
                                                                <li>Média de "preco_frete" por transportadora (final_price na API).</li>
                                                                <li>O frete mais barato geral.</li>
                                                                <li>O frete mais caro geral.</li>
                                                            </ul>
                                                        </ul>

                                                        <h3>Observações:</h3>
                                                        <ul>
                                                            <li>Utilizar a linguagem Golang, NodeJS ou PHP.</li>
                                                            <li>Utilizar um banco de dados de sua escolha.</li>
                                                            <li>A aplicação e todas as suas dependências devem ser executadas em um container do Docker.</li>
                                                            <li>Implementar validação dos dados de entrada e mensagens de erro claras.</li>
                                                            <li>Utilizar boas práticas de programação, código limpo e bem estruturado.</li>
                                                            <li>Implementar TDD seria muito legal!</li>
                                                        </ul>

                                                        <p>Para mais informações sobre a API da Frete Rápido, consulte a documentação em: <a href="https://dev.freterapido.com/">https://dev.freterapido.com/</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="mb-3">2. Instalação</h2>

                                    <div id="faq-2" class="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="accordion-item">
                                            <div class="accordion-header" role="tab">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2-1">Passo a Passo - Clonar e Configurar API Laravel</button>
                                            </div>

                                            <div id="faq-2-1" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-2">
                                                <div class="accordion-body pt-0">
                                                    <div>
                                                        <style>
                                                            ol {
                                                                font-size: 1rem;
                                                                font-weight: bold;
                                                            }
                                                        </style>
                                                        <ol>
                                                            <li>Abra um terminal no seu computador.</li>
                                                            <li>Navegue até o diretório onde deseja clonar o repositório da API. Por exemplo:</li>
                                                        </ol>

                                                        <pre>cd projetos</pre>

                                                        <ol start="3">
                                                            <li>Clone o repositório da sua API usando o comando git clone:</li>
                                                        </ol>

                                                        <pre>git clone https://github.com/LucasSGuima/frete-rapido.git</pre>

                                                        <ol start="4">
                                                            <li>Após o clone ser concluído, entre na pasta do projeto:</li>
                                                        </ol>

                                                        <pre>cd frete-rapido</pre>

                                                        <ol start="5">
                                                            <li>Instale as dependências do Laravel utilizando o Composer. Certifique-se de ter o Composer instalado em seu sistema:</li>
                                                        </ol>

                                                        <pre>composer install</pre>

                                                        <ol start="6">
                                                            <li>Copie o arquivo de exemplo .env.example para .env:</li>
                                                        </ol>

                                                        <pre>cp .env.example .env</pre>

                                                        <ol start="7">
                                                            <li>Gere uma chave de criptografia para sua aplicação Laravel:</li>
                                                        </ol>

                                                        <pre>php artisan key:generate</pre>

                                                        <ol start="8">
                                                            <li>Abra o arquivo .env em um editor de texto e atualize as seguintes configurações:</li>
                                                        </ol>

                                                        <div>
                                                            <p>
                                                                Configurações do banco de dados:
                                                            </p>

                                                            <pre>
                                                                DB_CONNECTION=mysql
                                                                DB_HOST=127.0.0.1
                                                                DB_PORT=3306
                                                                DB_DATABASE=nome_do_banco_de_dados
                                                                DB_USERNAME=nome_do_usuario
                                                                DB_PASSWORD=senha_do_usuario
                                                            </pre>

                                                            <p>
                                                                Certifique-se de substituir nome_do_banco_de_dados, nome_do_usuario e senha_do_usuario pelas configurações corretas do seu banco de dados.
                                                            </p>
                                                        </div>

                                                        <div>
                                                            Variáveis de ambiente personalizadas
                                                            </p>

                                                            <pre>
                                                                CNPJ_REMETENTE="cnpj_de_teste"
                                                                TOKEN_AUTENTICACAO="token_da_frete_rapido"
                                                                CODIGO_PLATAFORMA="codigo_da_plataforma"
                                                                CEP="cep_remetente"
                                                            </pre>

                                                            <p>
                                                                Substitua cnpj_de_teste, token_da_frete_rapido, codigo_da_plataforma e cep_remetente pelos valores corretos que você deseja utilizar.
                                                            </p>

                                                            <hr>

                                                            <p>
                                                                AGRUPAR_NOME sendo TRUE significa que o retorno pelo metodo get vai ser agrupado pelo nome e não o id unico de referencia, caso queria mudar para o agrupamento do id unico de referencia deixe FALSE
                                                            </p>

                                                            <pre>AGRUPAR_NOME=true</pre>

                                                            <hr>

                                                            <p>
                                                                Ativação da verificação de CEP pela API do ViaCEP: Caso queira ativar a verificação de CEP pela API do ViaCEP, atualize a seguinte variável no arquivo .env:
                                                            </p>

                                                            <pre>VALIDACAO_CEP=true</pre>
                                                        </div>

                                                        <ol start="9">
                                                            <li>Inicie o Laravel Sail:</li>
                                                        </ol>

                                                        <pre>./vendor/bin/sail up</pre>

                                                        <ol start="10">
                                                            <li>Agora com banco de dads ativo, rode as migrations com:</li>
                                                        </ol>

                                                        <pre>./vendor/bin/sail artisan migrate ou php artisan migrate</pre>

                                                        <ol start="11">
                                                            <li>Após o Laravel Sail estar em execução, você pode acessar sua API em http://localhost.</li>
                                                        </ol>

                                                        <p>Certifique-se de ter o Docker instalado em seu sistema para que o Laravel Sail funcione corretamente.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="mb-3">3. Testando a API</h2>

                                    <div id="faq-3" class="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="accordion-item">
                                            <div class="accordion-header" role="tab">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3-1">Testes de Feature</button>
                                            </div>

                                            <div id="faq-3-1" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-3">
                                                <div class="accordion-body pt-0">
                                                    <div>
                                                        <p>
                                                            Os testes de feature, também conhecidos como testes de ponta a ponta (end-to-end), são usados para verificar o comportamento de uma aplicação em um nível mais alto. Eles testam uma funcionalidade
                                                            completa da perspectiva do usuário, simulando as interações com a aplicação como um todo. Esses testes são úteis para garantir que diferentes partes da aplicação estejam funcionando corretamente em
                                                            conjunto.
                                                        </p>

                                                        <h2>Passo a Passo para Executar os Testes do Laravel:</h2>
                                                        <ol>
                                                            <li>Abra um terminal no seu sistema.</li>
                                                            <li>Navegue até o diretório do projeto Laravel onde os testes estão localizados.</li>
                                                            <li>Execute o seguinte comando para executar todos os testes do Laravel:</li>
                                                        </ol>

                                                        <pre>php artisan test</pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <div class="accordion-header" role="tab">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3-2">Passo a Passo - Requisição POST</button>
                                            </div>

                                            <div id="faq-3-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-3">
                                                <div class="accordion-body pt-0">
                                                    <div>
                                                        <p>Segue abaixo o passo a passo para fazer uma requisição POST utilizando o Insomnia ou Postman:</p>

                                                        <ol>
                                                            <li>Abra o Insomnia ou Postman em seu computador.</li>
                                                            <li>Crie uma nova requisição e defina o método como POST.</li>
                                                            <li>Insira a URL da API: <code>http://localhost/api/quote</code>.</li>
                                                            <li>Adicione o cabeçalho (headers) para a requisição:</li>
                                                            <ul>
                                                                <li>Key (Chave): <code>Content-Type</code></li>
                                                                <li>Value (Valor): <code>application/json</code></li>
                                                            </ul>
                                                            <li>Adicione outro cabeçalho (headers):</li>
                                                            <ul>
                                                                <li>Key (Chave): <code>Accept</code></li>
                                                                <li>Value (Valor): <code>application/json</code></li>
                                                            </ul>
                                                            <li>No corpo da requisição, selecione o formato JSON.</li>
                                                            <li>Insira o seguinte JSON no corpo da requisição:</li>
                                                        </ol>

                                                        <pre>
                                                        {
                                                            "recipient": {
                                                                "address": {
                                                                    "zipcode": "01311000"
                                                                }
                                                            },
                                                            "volumes": [
                                                                {
                                                                    "category": 7,
                                                                    "amount": 1,
                                                                    "unitary_weight": 5,
                                                                    "price": 349,
                                                                    "sku": "abc-teste-123",
                                                                    "height": 0.2,
                                                                    "width": 0.2,
                                                                    "length": 0.2
                                                                },
                                                                {
                                                                    "category": 7,
                                                                    "amount": 2,
                                                                    "unitary_weight": 4,
                                                                    "price": 556,
                                                                    "sku": "abc-teste-527",
                                                                    "height": 0.4,
                                                                    "width": 0.6,
                                                                    "length": 0.15
                                                                }
                                                            ]
                                                        }
                                                        </pre>

                                                        <p>Clique em "Enviar" ou "Send" para fazer a requisição.</p>

                                                        <p>Aguarde a resposta da API. A resposta será exibida na interface do Insomnia ou Postman, mostrando o código de status, o corpo da resposta e outros detalhes, algo semelhante a isso:</p>

                                                        <pre>
                                                            {
                                                                "carrier": [
                                                                    {
                                                                        "carrier_name": "UBER",
                                                                        "service": "Normal",
                                                                        "final_price": 60.74,
                                                                        "deadline": 4
                                                                    },
                                                                    {
                                                                        "carrier_name": "CORREIOS",
                                                                        "service": "Normal",
                                                                        "final_price": 78.03,
                                                                        "deadline": 6
                                                                    },
                                                                    {
                                                                        "carrier_name": "CORREIOS",
                                                                        "service": "PAC",
                                                                        "final_price": 92.45,
                                                                        "deadline": 5
                                                                    },
                                                                    {
                                                                        "carrier_name": "BTU BRASPRESS",
                                                                        "service": "Normal",
                                                                        "final_price": 103.35,
                                                                        "deadline": 6
                                                                    },
                                                                    {
                                                                        "carrier_name": "CORREIOS",
                                                                        "service": "SEDEX",
                                                                        "final_price": 162.68,
                                                                        "deadline": 1
                                                                    }
                                                                ]
                                                            }
                                                        </pre>
                                                    </div>

                                                    <hr>

                                                    <h2>Exemplo com Insomnia:</h2>

                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img src="images/post200.PNG" alt="POST200" style="width: 100%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <div class="accordion-header" role="tab">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3-3">Passo a Passo - Requisição GET</button>
                                            </div>

                                            <div id="faq-3-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-3">
                                                <div class="accordion-body pt-0">
                                                    <ol>
                                                        <li>Abra o Insomnia ou Postman em seu computador.</li>
                                                        <li>Crie uma nova requisição e defina o método como GET.</li>
                                                        <li>Insira a URL da API: <code>http://localhost/api/metrics/5</code> ou <code>http://localhost/api/metrics/</code>.</li>
                                                        <li>No primeiro caso, a métrica retornada será baseada nos últimos 5 registros. No segundo caso, a métrica será calculada para todos os registros.</li>
                                                        <li>Clique em "Enviar" ou "Send" para fazer a requisição.</li>
                                                        <li>Aguarde a resposta da API. A resposta será exibida na interface do Insomnia ou Postman, mostrando o código de status, o corpo da resposta e outros detalhes.</li>
                                                    </ol>
                                                    <hr>
                                                    <h2>Explicação do Retorno</h2>
                                                    <p>A função <code>metrics()</code> do código fornecido calcula várias métricas com base nos registros de ofertas (Offer). O retorno da requisição será um JSON contendo as seguintes informações:</p>
                                                    <ul>
                                                        <li>
                                                            <strong>quote_count_by_carrier:</strong>
                                                            Quantidade de resultados por transportadora. Os valores são agrupados pela referência da transportadora e representam a contagem de ofertas correspondentes a cada transportadora.
                                                        </li>
                                                        <li>
                                                            <strong>total_price_by_carrier:</strong>
                                                            Total de "final_price" por transportadora. Os valores são agrupados pela referência da transportadora e representam a soma dos preços finais das ofertas correspondentes a cada transportadora.
                                                        </li>
                                                        <li>
                                                            <strong>average_price_by_carrier:</strong>
                                                            Média de "final_price" por transportadora. Os valores são agrupados pela referência da transportadora e representam a média dos preços finais das ofertas correspondentes a cada transportadora.
                                                        </li>
                                                        <li><strong>cheapest_freight:</strong> O frete mais barato geral. É o menor valor do campo "final_price" entre todas as ofertas.</li>
                                                        <li><strong>expensive_freight:</strong> O frete mais caro geral. É o maior valor do campo "final_price" entre todas as ofertas.</li>
                                                    </ul>
                                                    <p>O formato do JSON de retorno será semelhante a este:</p>
                                                    <pre>
                                                    {
                                                        "quote_count_by_carrier": {
                                                        "carrier1": 10,
                                                        "carrier2": 5,
                                                        "carrier3": 3
                                                        },
                                                        "total_price_by_carrier": {
                                                        "carrier1": 1000.5,
                                                        "carrier2": 500.25,
                                                        "carrier3": 300.75
                                                        },
                                                        "average_price_by_carrier": {
                                                        "carrier1": 100.05,
                                                        "carrier2": 100.05,
                                                        "carrier3": 100.25
                                                        },
                                                        "cheapest_freight": 50.75,
                                                        "expensive_freight": 250.45
                                                    }
                                                    </pre>
                                                    <p>Esses são os dados de métricas calculados com base nas ofertas armazenadas no banco de dados. No caso do exemplo são dados ficticios.</p>

                                                    <hr>

                                                    <h2>Exemplo com Insomnia:</h2>

                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img src="images/get200.PNG" alt="get200" style="width: 100%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div>
                                    <h2 class="mb-3">4. Entendendo a API</h2>

                                    <div id="faq-4" class="accordion" role="tablist" aria-multiselectable="true">

                                        <div class="accordion-item">
                                            <div class="accordion-header" role="tab">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-4-1">QuoteController</button>
                                            </div>

                                            <div id="faq-4-1" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-4">
                                                <div class="accordion-body pt-0">
                                                    <div>
                                                        <p><strong>Função quote:</strong></p>
                                                        <ol>
                                                            <li>Responsável por receber uma requisição de cotação de frete.</li>
                                                            <li>Realiza uma chamada para a API da Frete Rápido.</li>
                                                            <li>Utiliza a biblioteca GuzzleHttp para fazer a requisição HTTP.</li>
                                                            <li>Constrói o corpo da requisição com base nos dados recebidos e em variáveis de ambiente configuradas.</li>
                                                            <li>Faz a requisição para a URL da API da Frete Rápido definida na propriedade $url do controller.</li>
                                                            <li>Processa os dados recebidos da API.</li>
                                                            <li>Armazena as informações relevantes no banco de dados usando os modelos Quote e Offer.</li>
                                                            <li>Retorna uma resposta JSON com as informações das transportadoras que oferecem o serviço de frete, se houverem ofertas, ou uma resposta vazia (204) se não houver ofertas.</li>
                                                        </ol>
                                                        <p><strong>Função metrics:</strong></p>
                                                        <ol>
                                                            <li>Responsável por calcular métricas com base nas ofertas de frete armazenadas no banco de dados.</li>
                                                            <li>Recebe um parâmetro $metric opcional que determina a quantidade de ofertas utilizadas para calcular as métricas. Se esse parâmetro não for fornecido, todas as ofertas são consideradas.</li>
                                                            <li>Calcula as métricas, que incluem quantidade de resultados por transportadora, total de preços finais por transportadora, média de preços finais por transportadora, frete mais barato geral e frete
                                                                mais caro geral.</li>
                                                            <li>Agrupa e arredonda os resultados conforme necessário.</li>
                                                            <li>Retorna uma resposta JSON com as métricas calculadas.</li>
                                                        </ol>
                                                        <p><strong>Métodos auxiliares:</strong></p>
                                                        <ul>
                                                            <li>O método <code>__construct</code> é executado ao criar uma instância do controller e define o corpo básico da requisição para a API da Frete Rápido com base nas variáveis de ambiente configuradas.
                                                            </li>
                                                            <li>O método <code>deadline</code> é utilizado para calcular o prazo de entrega com base nas informações de tempo fornecidas pela API da Frete Rápido.</li>
                                                            <li>O método <code>exception_message</code> é utilizado para obter uma mensagem de erro personalizada em caso de falha na requisição para a API da Frete Rápido.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <div class="accordion-header" role="tab">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-4-2">EnvironmentCheckMiddleware</button>
                                            </div>

                                            <div id="faq-4-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-4">
                                                <div class="accordion-body pt-0">
                                                    <div>
                                                        <p>Esse middleware é responsável por verificar as variáveis de ambiente necessárias e realizar uma validação opcional do CEP antes de permitir o processamento de uma requisição.</p>
                                                        <p>O middleware realiza as seguintes etapas:</p>
                                                        <ol>
                                                            <li>Define uma lista de variáveis de ambiente necessárias.</li>
                                                            <li>Verifica se todas as variáveis de ambiente na lista estão definidas. Caso alguma esteja faltando, retorna uma resposta JSON de erro indicando qual variável está faltando no arquivo .env.</li>
                                                            <li>Se a validação de CEP estiver ativada, obtém o valor do CEP da variável de ambiente correspondente.</li>
                                                            <li>Realiza uma requisição HTTP para a API do ViaCEP para validar o CEP.</li>
                                                            <li>Se a requisição falhar ou se a resposta da API indicar um erro, retorna uma resposta JSON de erro indicando que o CEP é inválido.</li>
                                                            <li>Caso contrário, permite que a requisição seja processada pelo próximo middleware.</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <div class="accordion-header" role="tab">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-4-3">QuoteRequest</button>
                                            </div>

                                            <div id="faq-4-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-4">
                                                <div class="accordion-body pt-0">
                                                    <div>
                                                        <p>Essa classe é responsável por definir as regras de validação para uma requisição de cotação de frete.</p>
                                                        <p>A classe possui os seguintes métodos:</p>
                                                        <ol>
                                                            <li><code>authorize()</code>: Determina se o usuário está autorizado a fazer essa requisição. Retorna <code>true</code> para autorizar.</li>
                                                            <li><code>rules()</code>: Retorna um array com as regras de validação para os campos da requisição.</li>
                                                            <li><code>messages()</code>: Retorna um array com as mensagens de erro personalizadas para cada regra de validação.</li>
                                                        </ol>
                                                        <p>As regras de validação incluem:</p>
                                                        <ul>
                                                            <li><code>recipient.address.zipcode</code>: Deve ser um CEP válido com exatamente 8 dígitos.</li>
                                                            <li><code>volumes</code>: Deve ser um array e é obrigatório.</li>
                                                            <li><code>volumes.*.category</code>: Deve ser um número inteiro e é obrigatório.</li>
                                                            <li><code>volumes.*.amount</code>: Deve ser um número inteiro maior que zero e é obrigatório.</li>
                                                            <li><code>volumes.*.unitary_weight</code>: Deve ser um número maior que zero e é obrigatório.</li>
                                                            <li><code>volumes.*.price</code>: Deve ser um número maior que zero e é obrigatório.</li>
                                                            <li><code>volumes.*.sku</code>: Deve ser uma string e é obrigatório.</li>
                                                            <li><code>volumes.*.height</code>: Deve ser um número maior que zero e é obrigatório.</li>
                                                            <li><code>volumes.*.width</code>: Deve ser um número maior que zero e é obrigatório.</li>
                                                            <li><code>volumes.*.length</code>: Deve ser um número maior que zero e é obrigatório.</li>
                                                        </ul>
                                                        <p>As mensagens de erro personalizadas estão definidas para cada regra de validação.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <div class="accordion-header" role="tab">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-4-4">QuoteControllerTest</button>
                                            </div>

                                            <div id="faq-4-4" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-4">
                                                <div class="accordion-body pt-0">
                                                    <div>
                                                        <p>Essa classe é responsável por testar o controlador <code>QuoteController</code>.</p>
                                                        <p>A classe utiliza o recurso de teste do Laravel e possui os seguintes métodos de teste:</p>
                                                        <ol>
                                                            <li><code>test_quote_with_data_inclusion_and_validation_and_with_success_status()</code>: Testa a criação de uma cotação com dados válidos e verifica se a resposta HTTP está correta, a estrutura da
                                                                resposta JSON e se os dados foram salvos corretamente no banco de dados.</li>
                                                            <li><code>test_metrics_with_data_inclusion_and_validation_and_with_success_status()</code>: Testa a obtenção de métricas com dados válidos e verifica se a resposta HTTP está correta, a estrutura da
                                                                resposta JSON e se os valores retornados estão corretos.</li>
                                                            <li><code>test_metrics_with_status_success()</code>: Testa a obtenção de métricas e verifica se o status da resposta é 200.</li>
                                                            <li><code>test_metrics_with_success_status_with_metric()</code>: Testa a obtenção de métricas com um parâmetro de métrica e verifica se o status da resposta é 200.</li>
                                                        </ol>
                                                        <p>Esses métodos de teste realizam chamadas HTTP para as rotas do controlador e verificam a resposta recebida, a estrutura da resposta JSON e os dados salvos no banco de dados.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <div class="accordion-header" role="tab">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-4-5">Banco de dados</button>
                                            </div>

                                            <div id="faq-4-5" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-4">
                                                <div class="accordion-body pt-0">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img src="images/bd.PNG" alt="bd" style="width: 100%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta19/dist/js/tabler.min.js"></script>
</body>

</html>
