<?php 

namespace Prophetarum\BlingIntegrationPhp\Services;

use Prophetarum\BlingIntegrationPhp\Models\Produto;

class Importador 
{

    public function getNfe()
    {
        $apikey = "73afb574098d14a3a9c1c5fcad14cb2beecac4585888c9f5d8cfd97e74a49176b0a21a41";
        $documentNumber = 3544216;
        $documentSerie = 1;
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
}