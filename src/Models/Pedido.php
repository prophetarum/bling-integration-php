<?php 

namespace Prophetarum\BlingIntegrationPhp\Models;

Class Pedido
{

    public $data; //    Data do pedido
    public $data_saida; //  Data de saída do pedido
    public $data_prevista; //   Data prevista do pedido
    public $numero; //  Número do pedido
    public $numero_loja; //   Número do pedido na loja virtual
    public $loja; //    Número identificador da loja.
    public $nat_operacao; //    Nome da natureza de operação cadastrada
    public $vendedor; // Nome o vendedor cadastrado no Bling
    
    public $cliente = [
        'id' => null, //  Id do contato
        'nome' => null, //    Nome do Cliente
        'tipoPessoa' => null, //  Pessoa Física/Jurídica (Jurídica )
        'cpf_cnpj' => null, // 	CNPJ do cliente
        'ie' => null, //    Inscrição Estadual do cliente
        'rg' => null, // 	RG do cliente
        'contribuinte' => null, //    1 - Contribuinte do ICMS, 2 - Contribuinte isento do ICMS ou 9 - Não contribuinte
        'endereco' => null, //    Endereço do Cliente
        'numero' => null, //  Número da casa do cliente
        'complemento' => null, // 	Complemento do endereço do cliente
        'bairro' => null, // 	Bairro do cliente
        'cep' => null, // 	CEP do cliente
        'cidade' => null, // 	Cidade do cliente
        'uf' => null, // 	Sigla do estado do cliente
        'fone' => null, //    Telefone do cliente
        'celular' => null, // 	Celular do cliente
        'email' => null, // 	E-mail do cliente
    ];

    public $transporte = [
        'transportadora' => null, //  Nome da transportadora
        'tipo_frete' => null, // 	Frete por conta do Destinatário/Remetente
        'servico_correios' => null, //    Nome do Serviço dos correios utilizado
        'codigo_cotacao' => null, //  Código da cotação obtida na loja virtual
        'peso_bruto' => null, //  Peso bruto do volume
        'qtde_volumes' => null, // 	Quantidade de Volumes do pedido
        'dados_etiqueta' => [ //   Grupo com endereço alternativo para a etiqueta de envio
            'nome' => null, //    Nome do destinatário
            'endereco' => null, //    Endereço do destinatário
            'numero' => null, //  Número do destinatário
            'complemento' => null, //   Complemento do destinatário
            'municipio' => null, // 	Nome do município do destinatário
            'uf' => null, // 	Sigla da UF do destinatário
            'cep' => null, // 	CEP do destinatário
            'bairro' => null, //  Bairro do destinatário
        ],
        'volumes' => [
            'volume' => null, // Volume vinculado ao pedido
            'servico' => null, // 	Alías do serviço de entrega vinculado ao volume
            'codigoRastreamento' => null,
        ]
    ];

    public $itens = [
        'item' => [
            'codigo' => null, // 	Código do Item
            'descricao' => null, // 	Nome do item
            'un' => null, // 	Tipo de unidade do item
            'qtde' => null, // 	Quantidade do item no pedido
            'vlr_unit' => null, // 	Valor unitário do item
            'vlr_desconto' => null, // 	Percentual de desconto do item
        ]
    ];

    public $idFormaPagamento; // 	Id da forma de pagamento cadastrada no sistema
    public $parcelas = [
        'parcela' => [
            'dias' => null, //  Dias de prazo de pagamento da parcela
            'data' => null, // 	Data do vencimento da parcela
            'vlr' => null, // 	Valor da parcela
            'obs' => null, //   Observação da parcela
            'forma_pagamento' => [
                'id' => null // 	Id da forma de pagamento da parcela
            ]
        ]
    ];

    public $vlr_frete; // 	Valor do Frete
    public $vlr_desconto; // 	Valor do Desconto no pedido
    public $obs; // 	Observações do Pedido
    public $obs_internas; // 	Observações internas do Pedido
    public $numeroOrdemCompra; // 	Numero da Ordem de Compra
    public $outrasDespesas; // 	Outras despesas da venda

    public $intermediador = [
        'cnpj' => null, //  CNPJ do intermediador
        'nomeUsuario' => null, // 	Nome usuário ou identificação do perfil do vendedor no site do intermediador
        'cnpjInstituicaoPagamento' => null //   CNPJ da instituição de pagamento
    ];





    public function __construct( array $parameters )
    {
        foreach($parameters as $key => $value) {
            $this->$key = $value;
        }
    }
    

}