<?php 

namespace Prophetarum\BlingIntegrationPhp\Services;

use Prophetarum\BlingIntegrationPhp\Models\{Produto, Contato, Pedido, Nfce, Nfe};
use Spatie\ArrayToXml\ArrayToXml;

class Exportador 
{

    public function geraNfe( $numeroNfce, $serie, $sendEmail )
    {
        $url = $this->baseUrl . 'notafiscal/json/';
        $data = [
            "number"    => $numeroNfce,
            "serie"     => $serie,
            "sendEmail" => $sendEmail
        ];
        
        return $this->post($url, $data);
    }
    
    public function postNfe( Nfe $nfe )
    {
        $url = $this->baseUrl . 'notafiscal/json/';
        $xml = ArrayToXml::convert( (array)  $nfe , 'nfe');
        $data = [ "xml" => rawurlencode($xml) ];
        return $this->post($url, $data);
    }

    public function geraNfce( $numeroNfce, $serie, $sendEmail)
    {
        $url = $this->baseUrl . 'nfce/json/';
        $data = [
            "number"    => $numeroNfce,
            "serie"     => $serie,
            "sendEmail" => $sendEmail
        ];
        return $this->post($url, $data);
    }

    public function postNfce( Nfce $nfce )
    {
        $url = $this->baseUrl . 'nfce/json/';
        $xml = ArrayToXml::convert( (array)  $nfce , 'nfce');
        $data = [ "xml" => rawurlencode($xml) ];
        return $this->post($url, $data);
    }

    public function postPedido( Pedido $pedido )
    {
        $url = $this->baseUrl . 'pedido/json/';
        $xml = ArrayToXml::convert( (array)  $pedido , 'pedido');
        $data = [ "xml" => rawurlencode($xml) ];
        return $this->post($url, $data);
    }

    public function postContato( Contato $contato )
    {
        $xml = ArrayToXml::convert( (array)  $contato , 'contato');
        $data = [ "xml" => rawurlencode($xml) ];
        if( !$contato->id ) {
            $url = $this->baseUrl . 'contato/json/';
            return $this->post($url, $data);
        } else {
            $url = $this->baseUrl . "contato/$contato->id/json/";
            return $this->post($url, $data, "PUT");
        }
    }

    public function updateProduto( Produto $produto )
    {
        $url = $this->baseUrl . 'produto/' . $produto->codigo . '/' . 'json/';
        $xml = ArrayToXml::convert( (array)  $produto , 'produto');
        $data = [ "xml" => rawurlencode($xml) ];
        return $this->post($url, $data);
    }

    public function postProduto( Produto $produto )
    {
        $url = $this->baseUrl . 'produto/json/';
        $xml = ArrayToXml::convert( (array)  $produto , 'produto');
        $data = [ "xml" => rawurlencode($xml) ];
        return $this->post($url, $data);
    }

    private function post($url, $data, $method = null){
        $data['apikey'] = $this->apiKey;

        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_POST, count($data));
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
        
        if ( $method == "PUT" ) {
            curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, "PUT");
        }
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