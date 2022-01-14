<?php 

namespace Prophetarum\BlingIntegrationPhp\Models;

Class Nfe
{
    public $tipo; //    Tipo de nota (E - Entrada, S - Saída)
    public $finalidade; //  1 - Normal, 2 - Complementar, 3 - Ajuste ou 4 - Devolução
    public $loja; // Número identificador da loja.
    public $numero_loja; // 	Número do pedido na loja virtual
    public $numero_nf; //   Número da nota fiscal
    public $nat_operacao; //    Nome da natureza de operação cadastrada
    public $data_operacao; //   Data de saída da nota

    public $doc_referenciado = [ // 	Grupo de informações para referenciar documentos na nota de devolução
        'modelo' => null, //  1 - Nota fiscal talão, 2 - Nota fiscal de consumidor talão, 2D - Cupom fiscal, 4 - Nota de produtor, 55 - NF-e ou 65 - NFC-e
        'data' => null, // 	Data da nota original no formato AAMM
        'numero' => null, // 	Número da nota original
        'serie' => null, // 	Série da nota original
        'coo' => null, // 	Contador de Ordem de Operação (COO) do cupom original
        'chave_acesso' => null, // 	Chave de acesso da nota original
    ];

    
    public $cliente = [
        'nome' => null, // Nome do Cliente
        'tipo_pessoa' => null, //   Pessoa Física, Jurídica ou Estrangeiro
        'cpf_cnpj' => null, // 	CNPJ do cliente
        'ie_rg' => null, // Inscrição Estadual ou RG do cliente
        'contribuinte' => null, //  1 - Contribuinte do ICMS 2 - Contribuinte isento de ICMS 9 - Não contribuinte
        'endereco' => null, // 	Endereço do Cliente
        'numero' => null, //    Número da casa do cliente
        'complemento' => null, //   Complemento do endereço do cliente
        'bairro' => null, // 	Bairro do cliente
        'cep' => null, //   CEP do cliente
        'cidade' => null, // 	Cidade do cliente
        'uf' => null, // 	Sigla do estado do cliente
        'pais' => null, //  País do cliente (em caso de cliente estrangeiro)
        'fone' => null, // 	Telefone do cliente
        'email' => null, // 	E-mail do cliente
    ];
    
    public $transporte = [
        'transportadora' => null, //    Nome da transportadora
        'cpf_cnpj' => null, // 	CPF ou CNPJ da transportadora
        'ie_rg' => null, // Inscrição Estadual ou RG da transportadora
        'endereco' => null, //  Endereço e número da transportadora
        'cidade' => null, // 	Cidade da transportadora
        'uf' => null, //    Sigla do estado da transportadora
        'placa' => null, // Placa do veículo a realizar o frete
        'uf_veiculo' => null, //    Sigla do Estado do veículo a realizar o frete
        'marca' => null, // Marca do veículo
        'tipo_frete' => null, // 	Frete por conta do Destinatário/Remetente
        'qtde_volumes' => null, //  Quantidade de Volumes do pedido
        'especie' => null, // 	Espécie dos Volumes
        'numero' => null, // 	Número do volume
        'peso_bruto' => null, //    Peso Bruto do volume
        'peso_liquido' => null, // 	Peso Líquido do volume
        'servico_correios' => null, // 	Nome do Serviço dos correios utilizado
        'dados_etiqueta' => null, // 	Grupo com endereço alternativo para a etiqueta de envio
        'volumes' => [
            'volume' => [ // Volume vinculado ao pedido 	
                'servico' => null, // 	Alías do serviço de entrega vinculado ao volume 	
                'codigoRastreamento' => null, // 	Código de rastreamento vinculado ao volume
            ]
        ]
    ];
    
    public $dados_etiqueta = [
        'nome' => null, //  Nome do destinatário
        'endereco' => null, //  Endereço do destinatário
        'numero' => null, //    Número do destinatário
        'complemento' => null, //   Complemento do destinatário
        'municipio' => null, // Nome do município do destinatário
        'uf' => null, // 	Sigla da UF do destinatário
        'cep' => null, // 	CEP do destinatário
        'bairro' => null, //    Bairro do destinatário
    ];
    
    public $itens = [
        'item' => [
            'codigo' => null, // 	Código do Item
            'descricao' => null, // 	Nome do item
            'un' => null, // 	Tipo de unidade do item
            'qtde' => null, // 	Quantidade do item no pedido
            'vlr_unit' => null, // 	Valor unitário do item
            'tipo' => null, // 	 	Tipo do Item: Produto/Serviço
            'peso_bruto' => null, // 	Peso Bruto do item
            'numero_pedido_compra' => null,//    Número do Pedido de Compra
            'peso_liq' => null, //  Peso Líquido do item
            'class_fiscal' => null, // 	Classificação Fiscal do Item: NCM
            'cest' => null, // 	CEST - Código Especificador da Substituição Tributária
            'cod_servico' => null, // 	Código da lista de serviços (somente para serviços)
            'origem' => null, //    Código da Origem do item
            'informacoes_adicionais' => null
        ]
    ];

    public $parcelas = [
        'parcela' => [
            'dias' => null, //  Dias de prazo de pagamento da parcela
            'data' => null, // 	Data do vencimento da parcela
            'vlr' => null, // 	Valor da parcela
            'obs' => null, //   Observação da parcela
            'forma' => [ // Forma de pagamento da parcela
                'id' => null // 	Id da forma de pagamento da parcela
            ]
        ]
    ];

    public $nf_produtor_rural_referenciada = [
        'numero' => null, //    Número da NF referenciada
        'serie' => null, // Série da NF referenciada
        'ano_mes_emissao' => null, // 	Ano e mês da emissão da NF
    ];

    public $pedido = [
        'vlr_frete' => null, // Valor do Frete
        'vlr_seguro' => null, // 	Valor do Seguro
        'vlr_despesas' => null, // 	Valor das Despesas Adicionais 	
        'vlr_desconto' => null, // 	Valor do Desconto no pedido 	
        'obs' => null, //   Observações do Pedido
        'intermediador' => [
            'cnpj' => null, //  CNPJ do intermediador
            'nomeUsuario' => null, // 	Nome usuário ou identificação do perfil do vendedor no site do intermediador
        ]
    ];

    public function __construct( array $parameters)
    {
        foreach($parameters as $key => $value) {
            $this->$key = $value;
        }
    }
    

}