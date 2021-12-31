<?php 

namespace Prophetarum\BlingIntegrationPhp\Services;

use Prophetarum\BlingIntegrationPhp\Models\Produto;
use Spatie\ArrayToXml\ArrayToXml;

class Exportador 
{
    public function postProduto( Produto $produto )
    {
        function executeInsertProduct($url, $data){
            $curl_handle = curl_init();
            curl_setopt($curl_handle, CURLOPT_URL, $url);
            curl_setopt($curl_handle, CURLOPT_POST, count($data));
            curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
            $response = curl_exec($curl_handle);
            curl_close($curl_handle);
            return $response;
        }

        $url = $this->baseUrl . 'produto/json/';
        $xml = ArrayToXml::convert( (array)  $produto , 'produto');

        $posts = array (
            "apikey" => $this->apiKey,
            "xml" => rawurlencode($xml)
        );
        $retorno = executeInsertProduct($url, $posts);

        return $retorno;
    }




    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->baseUrl = "https://bling.com.br/Api/v2/";
    }

    private $baseUrl;
}