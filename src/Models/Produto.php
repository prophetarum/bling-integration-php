<?php 

namespace Prophetarum\BlingIntegrationPhp\Models;

Class Produto 
{
    public $codigo; // 	Código do produto
    public $codigoItem; // 	Código de item de serviço (06, 21 e 22)
    public $descricao; // 	Descrição do produto
    public $tipo; //    Tipo ('S' para serviço, 'P' para produto e 'N' para serviço de nota 06, 21 e 22) padrão P
    public $situacao; //    Situação do produto (Ativo ou Inativo) padrão Ativo
    public $descricaoCurta; //  Descrição curta do produto
    public $descricaoComplementar; // 	Descrição complementar do produto
    public $un; // 	Tipo de unidade do produto
    public $vlr_unit; //    Valor unitário do produto
    public $preco_custo; // Preço de custo do produto
    public $peso_bruto; // 	Peso bruto do produto
    public $peso_liq; // 	Peso líquido do produto
    public $class_fiscal; // 	NCM do produto padrão 9999.99.99
    public $marca; // 	Marca do produto
    public $cest; // 	CEST do produto padrão 99.999.99
    public $origem; //  Origem do produto padrão 9
    public $idGrupoProduto; //  Identificador do grupo do produto padrão 0
    public $condicao; // 	Condição do produto (Não especificado, Novo ou Usado) padrão Não identificado
    public $freteGratis; // 	Frete grátis (S para Sim ou N para Não) padrão N
    public $linkExterno; // 	Link do produto na loja virtual, marketplace, catálago etc.
    public $observacoes; // 	Observações do produto
    public $producao; // 	Tipo de produção do produto (T para Terceiros ou P para Própria) padrão P
    public $unidadeMedida; // 	Unidade de medida do produto (Metros, Centímetros ou Milímetro) padrão Centímetros
    public $dataValidade; //    Data de validade do produto
    public $descricaoFornecedor; // Descrição do fornecedor
    public $idFabricante; //    Id do fornecedor (pode ser obtido no GET de contatos)
    public $codigoFabricante; //    Código do produto no fornecedor
    public $gtin; // 	GTIN / EAN do produto
    public $gtinEmbalagem; // 	GTIN / EAN tributário da menor unidade comercializada
    public $largura; // 	Largura do produto com embalagem
    public $altura; // 	Altura do produto com embalagem
    public $profundidade; // 	Profundidade do produto com embalagem
    public $estoqueMinimo; //   Estoque mínimo do produto
    public $estoqueMaximo; // 	Estoque máximo do produto
    public $itensPorCaixa; //   Quantidade de itens por caixa
    public $volumes; // 	Quantidade de volumes do produto
    public $urlVideo; // 	Url do vídeo do produto, utilizado na exportação do produto para lojas virtuais
    public $localizacao; //  	Localização do produto
    public $crossdocking; // 	Quantidade de dias para o processo de distribuição em que a mercadoria recebida é redirecionada ao consumidor final sem uma armazenagem prévia.
    public $garantia; // 	Garantia do produto, deve ser informada em meses.
    public $spedTipoItem; //    Código do tipo do item no SPED
    public $idCategoria; // ID da categoria do produto

    // public $deposito = [ //    Depósito ao qual será lançado estoque
    //     'id' => '', // 	Código identificador do depósito
    //     'estoque' => '', // 	Estoque atual do produto no depósito
    // ];
    // public $variacoes = [ //   Grupo de variações
    //     'variacao' => '', //    Grupo de variação
    //     'nome' => '', //    nome da variação
    //     'codigo' => '', //  código da variação
    //     'vlr_unit' => '', //    valor unitário da variação
    //     'clonarDadosPai' => '', //  Utilizar informações do produto pai (S para Sim ou N para Não)
    //     'estoque' => '', // estoque da variação
    //     'deposito' => '', //    Depósito ao qual será lançado estoque da variação
    //     'un' => '' //  Unidade da Variação (somente se o campo clonarDadosPai for N)
    // ]; 
    // public $imagens = [ // 	Lista de imagens do produto
    //     'url' => '' // URL da imagem
    // ];
    // public $camposCustomizados = [ // Alias do campo customizado
    //     'alias' => ''
    // ];
    // public $estrutura = [ // 	Composição do produto 
    //     'tipoEstoque' => '', // Tipo do estoque F - Físico V - Virtual
    //     'lancarEstoque' => '', // 	Lançar estoque em  	P - Produto C - Componente PC - Produto e Componente
    //     'componente' => [
    //         'nome' => '', // 	Nome do produto 
    //         'codigo' => '', //  Código do produto
    //         'quantidade' => '',//  Quantidade do produto na composição
    //     ]
    // ]; 

    public function __construct( array $parameters)
    {
        foreach($parameters as $key => $value) {
            $this->$key = $value;
        }
    }

    // public $id;
    // public $codigo;
    // public $descricao;
    // public $tipo;
    // public $situacao;
    // public $unidade;
    // public $preco;
    // public $precoCusto;
    // public $descricaoCurta;
    // public $descricaoComplementar;
    // public $dataInclusao;
    // public $dataAlteracao;
    // public $imageThumbnail;
    // public $urlVideo;
    // public $nomeFornecedor;
    // public $codigoFabricante;
    // public $marca;
    // public $class_fiscal;
    // public $cest;
    // public $origem;
    // public $idGrupoProduto;
    // public $linkExterno;
    // public $observacoes;
    // public $grupoProduto;
    // public $garantia;
    // public $descricaoFornecedor;
    // public $idFabricante;
    // public $pesoLiq;
    // public $pesoBruto;
    // public $estoqueMinimo;
    // public $estoqueMaximo;
    // public $gtin;
    // public $gtinEmbalagem;
    // public $larguraProduto;
    // public $alturaProduto;
    // public $profundidadeProduto;
    // public $unidadeMedida;
    // public $itensPorCaixa;
    // public $volumes;
    // public $localizacao;
    // public $crossdocking;
    // public $condicao;
    // public $freteGratis;
    // public $producao;
    // public $dataValidade;
    // public $spedTipoItem;
    // public $categoria = [];
}