<?php

class Cpa077 extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $recnum;

    /**
     *
     * @var double
     */
    public $empresa;

    /**
     *
     * @var double
     */
    public $fornecedor;

    /**
     *
     * @var string
     */
    public $codigo;

    /**
     *
     * @var string
     */
    public $codigo_invc;

    /**
     *
     * @var string
     */
    public $codigo_barra;

    /**
     *
     * @var string
     */
    public $codigo_fornec;

    /**
     *
     * @var string
     */
    public $descricao;

    /**
     *
     * @var string
     */
    public $descricao1;

    /**
     *
     * @var string
     */
    public $descricao2;

    /**
     *
     * @var string
     */
    public $descricao3;

    /**
     *
     * @var string
     */
    public $descricao4;

    /**
     *
     * @var double
     */
    public $desc_maximo;

    /**
     *
     * @var double
     */
    public $grupo_preco;

    /**
     *
     * @var double
     */
    public $peso_liquido;

    /**
     *
     * @var double
     */
    public $peso_bruto;

    /**
     *
     * @var double
     */
    public $desconto_prod;

    /**
     *
     * @var double
     */
    public $imposto_codigo;

    /**
     *
     * @var double
     */
    public $imposto_tipo;

    /**
     *
     * @var double
     */
    public $embalagem;

    /**
     *
     * @var double
     */
    public $margem_prod;

    /**
     *
     * @var double
     */
    public $peso_prod;

    /**
     *
     * @var string
     */
    public $observacao;

    /**
     *
     * @var string
     */
    public $ativo;

    /**
     *
     * @var string
     */
    public $cadastro_data;

    /**
     *
     * @var string
     */
    public $cadastro_user;

    /**
     *
     * @var double
     */
    public $cadastro_hora;

    /**
     *
     * @var string
     */
    public $alteracao_data;

    /**
     *
     * @var string
     */
    public $alteracao_user;

    /**
     *
     * @var double
     */
    public $alteracao_hora;

    /**
     *
     * @var string
     */
    public $unidade_venda;

    /**
     *
     * @var string
     */
    public $unidade_compra;

    /**
     *
     * @var double
     */
    public $conversao_vd_cp;

    /**
     *
     * @var string
     */
    public $descricao_compl;

    /**
     *
     * @var string
     */
    public $descricao_compl_invc;

    /**
     *
     * @var string
     */
    public $visivel_filial;

    /**
     *
     * @var string
     */
    public $estoque;

    /**
     *
     * @var double
     */
    public $preco_lista;

    /**
     *
     * @var double
     */
    public $preco_lista1;

    /**
     *
     * @var double
     */
    public $preco_lista2;

    /**
     *
     * @var string
     */
    public $preco_lista_dt;

    /**
     *
     * @var string
     */
    public $preco_lista_dt1;

    /**
     *
     * @var string
     */
    public $preco_lista_dt2;

    /**
     *
     * @var double
     */
    public $composto_emp;

    /**
     *
     * @var double
     */
    public $composto_forn;

    /**
     *
     * @var string
     */
    public $composto_prod;

    /**
     *
     * @var double
     */
    public $equivalente_emp;

    /**
     *
     * @var double
     */
    public $equivalente_for;

    /**
     *
     * @var string
     */
    public $equivalente_pro;

    /**
     *
     * @var double
     */
    public $semelhante_emp;

    /**
     *
     * @var double
     */
    public $semelhante_for;

    /**
     *
     * @var string
     */
    public $semelhante_pro;

    /**
     *
     * @var double
     */
    public $composto_qtde;

    /**
     *
     * @var double
     */
    public $minimo;

    /**
     *
     * @var double
     */
    public $maximo;

    /**
     *
     * @var double
     */
    public $embalagem_venda;

    /**
     *
     * @var double
     */
    public $conv_com_ven;

    /**
     *
     * @var double
     */
    public $vendedor;

    /**
     *
     * @var double
     */
    public $comp_emp;

    /**
     *
     * @var double
     */
    public $comp_for;

    /**
     *
     * @var string
     */
    public $comp_pro;

    /**
     *
     * @var double
     */
    public $medida;

    /**
     *
     * @var string
     */
    public $medida_desc;

    /**
     *
     * @var double
     */
    public $cb;

    /**
     *
     * @var double
     */
    public $decimais;

    /**
     *
     * @var double
     */
    public $ipi;

    /**
     *
     * @var string
     */
    public $aplicacao;

    /**
     *
     * @var string
     */
    public $medida_un;

    /**
     *
     * @var string
     */
    public $caf;

    /**
     *
     * @var double
     */
    public $cafil;

    /**
     *
     * @var string
     */
    public $abandonado;

    /**
     *
     * @var double
     */
    public $id_reg;

    /**
     *
     * @var double
     */
    public $indice_compra;

    /**
     *
     * @var double
     */
    public $coefreducao;

    /**
     *
     * @var string
     */
    public $codigo_forn;

    /**
     *
     * @var string
     */
    public $descricao_forn;

    /**
     *
     * @var double
     */
    public $coefsubst;

    /**
     *
     * @var string
     */
    public $icms_proprio;

    /**
     *
     * @var string
     */
    public $unidade_transf;

    /**
     *
     * @var double
     */
    public $classfiscal;

    /**
     *
     * @var double
     */
    public $ipi_venda;

    /**
     *
     * @var double
     */
    public $grupo_comissao;

    /**
     *
     * @var double
     */
    public $id_produto;

    /**
     *
     * @var string
     */
    public $substituido;

    /**
     *
     * @var string
     */
    public $old_codbar;

    /**
     *
     * @var double
     */
    public $emb_sep;

    /**
     *
     * @var double
     */
    public $extipi;

    /**
     *
     * @var string
     */
    public $complemento;

    /**
     *
     * @var string
     */
    public $cest;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("public");
        $this->setSource("cpa077");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cpa077';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cpa077[]|Cpa077|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cpa077|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
