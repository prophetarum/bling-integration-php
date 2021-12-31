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