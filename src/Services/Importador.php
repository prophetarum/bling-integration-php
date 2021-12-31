<?php 

namespace Prophetarum\BlingIntegrationPhp\Services;

use Prophetarum\BlingIntegrationPhp\Models\Produto;

class Importador 
{

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