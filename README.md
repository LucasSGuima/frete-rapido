
# API Frete Rapido

O desafio foi: Desenvolver uma API Rest para consultas externas e devolver apenas valores esperados.


## Documentação da API

A aplicação possui uma mini documentação na rota web default. Ela está disponível temporariamente em https://frete-rapido.lucassilvaguimaraes.com.br/. Vale apena consultar, temos um passo a passo para instalação e uso!

#### Detalhes

| Método | Url               | Rota          | Descrição                                                     |
| :----- | :----------       | :---------    | :----------------------------------                           |
| POST   | `localhost/api/`  | `quote`       | Responsável por receber uma requisição de cotação de frete.   |

#### Espera-se receber um JSON de entrada conforme exemplo abaixo:

```http
    {
        "recipient":{
            "address":{
                "zipcode":"01311000"
            }
        },
        "volumes":[
            {
                "category":7,
                "amount":1,
                "unitary_weight":5,
                "price":349,
                "sku":"abc-teste-123",
                "height":0.2,
                "width":0.2,
                "length":0.2
            },
            {
                "category":7,
                "amount":2,
                "unitary_weight":4,
                "price":556,
                "sku":"abc-teste-527",
                "height":0.4,
                "width":0.6,
                "length":0.15
            }
        ]
    }
```

#### Retorna um json semelhante

```http
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
```

| Método    | Url                       | Rota       | Parâmetro                                                |
| :-----    | :----------               | :--------- | :---------                                               |
| Get       | `http://localhost/api/`   | `metrics/`| **Opcional**. (int) Numero de ofertas a ser consultadas  |

#### Retorna um json semelhante

```http
    {
        "quote_count_by_carrier": {
            "UBER": 1,
            "CORREIOS": 3,
            "BTU BRASPRESS": 1
        },
        "total_price_by_carrier": {
            "UBER": 60.74,
            "CORREIOS": 333.16,
            "BTU BRASPRESS": 103.35
        },
        "average_price_by_carrier": {
            "UBER": 60.74,
            "CORREIOS": 111.05,
            "BTU BRASPRESS": 103.35
        },
        "cheapest_freight": 60.74,
        "expensive_freight": 162.68
    }
```

## Referência

 - [Documentação API Oficial Frete Rapido](https://dev.freterapido.com/ecommerce/)


## Etiquetas

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)


## Autores

- [@LucasSGuima](https://www.github.com/LucasSGuima)
