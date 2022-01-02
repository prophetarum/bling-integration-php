<?php 

namespace Prophetarum\BlingIntegrationPhp\Models;

Class Contato
{
    
        public $id;
        public $codigo; 
        public $nome; 
        public $fantasia;
        public $tipo; 
        public $cnpj;
        public $ie_rg;
        public $endereco;
        public $numero;
        public $bairro;
        public $cep;
        public $cidade;
        public $complemento;
        public $uf;
        public $fone;
        public $email;
        public $situacao;
        public $contribuinte;
        public $site;
        public $celular;
        public $dataAlteracao;
        public $dataInclusao;
        public $sexo;
        public $clienteDesde;
        public $limiteCredito;
        public $subscriber_id;

        public function __construct( array $parameters)
        {
            foreach($parameters as $key => $value) {
                $this->$key = $value;
            }
        }
    

}