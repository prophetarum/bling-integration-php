# Integrações com o Bling
    Integrar informações com Bling

## Utilização
    Para exportar um produto siga o exemplo: 

```php

<?php

require __DIR__ . '/vendor/autoload.php';

use Prophetarum\BlingIntegrationPhp\Models\Produto;
use Prophetarum\BlingIntegrationPhp\Services\Exportador;

$data = [
    'codigo' => '999',
    'descricao' => 'PRODUTO DE BOA QUALIDADE',
    'un' => 'UN',
    'vlr_unit' => '103.63',
    'origem' => '0',
    'class_fiscal' => '84212100',
    'cest' => '2109600',
    'spedTipoItem' => '00'
];

$produto = new Produto( $data );

$apiKey = "1234567890"; // API fornecida pelo Bling
$exportador = new Exportador( $apiKey );
$response = $exportador->postProduto( $produto );
print_r( $response );


```

    Para exportar um pedido siga o exemplo: 

```php

<?php 

require __DIR__ . '/vendor/autoload.php';

use Prophetarum\BlingIntegrationPhp\Models\Pedido;
use Prophetarum\BlingIntegrationPhp\Services\Exportador;

$pedidoArray = [
    'cliente' => [
        'id' => '1234567890',
        'nome' => 'CONSUMIDOR FINAL',
    ],
    'itens' => [
        'item' => [
            'codigo' => '004485', 
            'descricao' => 'PRODUTO DE BOA QUALIDADE', 
            'un' => 'UN', 
            'qtde' => '1', 
            'vlr_unit' => '18.99', 
            'vlr_desconto' => '0.00', 
        ]
    ]
];

$pedido = new Pedido( $pedidoArray );

$apiKey = "1234567890"; // API fornecida pelo Bling
$exportador = new Exportador( $apiKey );
$response = $exportador->postPedido( $pedido );
print_r( $response );


```

    Para exportar uma Nfc-e: 

```php

<?php 

require __DIR__ . '/vendor/autoload.php';

use Prophetarum\BlingIntegrationPhp\Models\Nfce;
use Prophetarum\BlingIntegrationPhp\Services\Exportador;

$nfceArray = [
    'cliente' => [
        'id' => '1234567890',
        'nome' => 'CONSUMIDOR FINAL',
    ],
    'itens' => [
        'item' => [
            'codigo' => '004485', 
            'descricao' => 'PRODUTO DE BOA QUALIDADE', 
            'un' => 'UN', 
            'qtde' => '1', 
            'vlr_unit' => '18.99', 
            'vlr_desconto' => '0.00', 
        ]
    ],
    'parcelas' => [
        'data' => '03/02/2022'
    ]


];

$nfce = new Nfce( $nfceArray );

$apiKey = "1234567890"; // API fornecida pelo Bling
$exportador = new Exportador( $apiKey );
$response = $exportador->postNfce( $nfce );
print_r( $response );


```