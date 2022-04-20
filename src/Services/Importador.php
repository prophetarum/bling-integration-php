<?php 

namespace Prophetarum\BlingIntegrationPhp\Services;

use Prophetarum\BlingIntegrationPhp\Models\Produto;

class Importador 
{

    public function getNfce( $numero, $serie = 1 )
    {
        $apikey = $this->apiKey;
        $documentNumber = $numero;
        $documentSerie = $serie;
        $outputType = "json";
        $url = 'https://bling.com.br/Api/v2/nfce/' . $documentNumber . '/'. $documentSerie . '/' . $outputType;
        $retorno = $this->executeGetFiscalDocument($url, $apikey);
        echo $retorno;
    }

    public function getContatos()
    {
        function executeGetContacts($url, $apikey){
           $curl_handle = curl_init();
           curl_setopt($curl_handle, CURLOPT_URL, $url . '&apikey=' . $apikey);
           curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
           $response = curl_exec($curl_handle);
           curl_close($curl_handle);
           return $response;
        }


        $outputType = "json";
        $url = 'https://bling.com.br/Api/v2/contatos/' . $outputType;
        $retorno = executeGetContacts($url, $this->apiKey);
        return $retorno;
    }

    public function getProdutos()
    {
        function executeGetProducts($url, $apikey){
            $curl_handle = curl_init();
            curl_setopt($curl_handle, CURLOPT_URL, $url . '&apikey=' . $apikey);
            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
            $response = curl_exec($curl_handle);
            curl_close($curl_handle);
            return $response;
        }

        $outputType = "json";
        $apikey = $this->apiKey;
        $url = 'https://bling.com.br/Api/v2/produtos/' . $outputType;
        $retorno = executeGetProducts($url, $apikey);
        return $retorno;
    }

    public function getProduto( $code )
    {
        function executeGetProduct($url, $apikey){
            $curl_handle = curl_init();
            curl_setopt($curl_handle, CURLOPT_URL, $url . '&apikey=' . $apikey);
            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
            $response = curl_exec($curl_handle);
            curl_close($curl_handle);
            return $response;
        }
        $apikey = $this->apiKey;
        $outputType = "json";
        $url = 'https://bling.com.br/Api/v2/produto/' . $code . '/' . $outputType;
        $retorno = executeGetProduct($url, $apikey);
        echo $retorno;

    }

    public function getNfe( $numero, $serie = 1 )
    {
        $apikey = $this->apiKey;
        $documentNumber = $numero;
        $documentSerie = $serie;
        $outputType = "json";
        $url = 'https://bling.com.br/Api/v2/notafiscal/' . $documentNumber . '/'. $documentSerie . '/' . $outputType;
        $retorno = $this->executeGetFiscalDocument($url, $apikey);
        echo $retorno;

    }

    public function executeGetFiscalDocument($url, $apikey){
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url . '&apikey=' . $apikey);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($curl_handle);
        curl_close($curl_handle);
        return $response;
    }

    public function get()
    {
        // function executeGetProduct($url, $apikey){
        //     $curl_handle = curl_init();
        //     curl_setopt($curl_handle, CURLOPT_URL, $url . '&apikey=' . $apikey);
        //     curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
        //     $response = curl_exec($curl_handle);
        //     curl_close($curl_handle);
        //     return $response;
        // }

        // $code = "1800";
        // $apikey = "";
        // $outputType = "json";
        // $url = 'https://bling.com.br/Api/v2/produto/' . $code . '/' . $outputType;
        // $retorno = executeGetProduct($url, $apikey);
        // echo $retorno;
    }

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    private $apiKey;
}