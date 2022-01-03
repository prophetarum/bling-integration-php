<?php 

namespace Prophetarum\BlingIntegrationPhp\Services;

use Prophetarum\BlingIntegrationPhp\Models\{Produto, Contato, Pedido};
use Spatie\ArrayToXml\ArrayToXml;

class Exportador 
{

    public function postPedido( Pedido $pedido )
    {
        $url = $this->baseUrl . 'pedido/json/';
        $xml = ArrayToXml::convert( (array)  $pedido , 'pedido');
        return $this->post($url, $xml);
    }

    public function postContato( Contato $contato )
    {
        $url = $this->baseUrl . 'contato/json/';
        $xml = ArrayToXml::convert( (array)  $contato , 'contato');
        return $this->post($url, $xml);
    }

    public function postProduto( Produto $produto )
    {
        $url = $this->baseUrl . 'produto/json/';
        $xml = ArrayToXml::convert( (array)  $produto , 'produto');
        return $this->post($url, $xml);
    }

    private function post($url, $xml){
        $data = [
            "apikey" => $this->apiKey,
            "xml" => rawurlencode($xml)
        ];

        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_POST, count($data));
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($curl_handle);
        curl_close($curl_handle);
        return $response;
    }

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->baseUrl = "https://bling.com.br/Api/v2/";
    }

    private $baseUrl;
}