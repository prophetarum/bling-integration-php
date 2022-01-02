<?php 

namespace Prophetarum\BlingIntegrationPhp\Services;

use Prophetarum\BlingIntegrationPhp\Models\{Produto, Contato};
use Spatie\ArrayToXml\ArrayToXml;

class Exportador 
{

    public function postContato( Contato $contato )
    {
        $url = $this->baseUrl . 'contato/json/';
        $xml = ArrayToXml::convert( (array)  $contato , 'contato');
        $posts = array (
            "apikey" => $this->apiKey,
            "xml" => rawurlencode($xml)
        );
        $retorno = $this->executeInsert($url, $posts);
        echo $retorno;
    }


    public function postProduto( Produto $produto )
    {
        $url = $this->baseUrl . 'produto/json/';
        $xml = ArrayToXml::convert( (array)  $produto , 'produto');

        $posts = array (
            "apikey" => $this->apiKey,
            "xml" => rawurlencode($xml)
        );
        $retorno = $this->executeInsert($url, $posts);

        return $retorno;
    }

    private function executeInsert($url, $data){
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