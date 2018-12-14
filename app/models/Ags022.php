<?php

class Ags022 extends \Phalcon\Mvc\Model
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
    public $codigo;

    /**
     *
     * @var string
     */
    public $nome_fantasia;

    /**
     *
     * @var string
     */
    public $razao_social;

    /**
     *
     * @var string
     */
    public $endereco;

    /**
     *
     * @var string
     */
    public $bairro;

    /**
     *
     * @var string
     */
    public $cidade;

    /**
     *
     * @var string
     */
    public $estado;

    /**
     *
     * @var string
     */
    public $cep;

    /**
     *
     * @var string
     */
    public $cgc;

    /**
     *
     * @var string
     */
    public $ddd;

    /**
     *
     * @var string
     */
    public $telefone;

    /**
     *
     * @var string
     */
    public $fax;

    /**
     *
     * @var string
     */
    public $inscricao;

    /**
     *
     * @var string
     */
    public $inscricao_munic;

    /**
     *
     * @var double
     */
    public $nf_numero;

    /**
     *
     * @var double
     */
    public $nf_modelo;

    /**
     *
     * @var string
     */
    public $nf_online;

    /**
     *
     * @var double
     */
    public $os_numero;

    /**
     *
     * @var double
     */
    public $os_modelo;

    /**
     *
     * @var double
     */
    public $fatura_numero;

    /**
     *
     * @var string
     */
    public $localpagto;

    /**
     *
     * @var double
     */
    public $cadastro_client;

    /**
     *
     * @var double
     */
    public $cadastro_fornec;

    /**
     *
     * @var string
     */
    public $regjuntacom;

    /**
     *
     * @var double
     */
    public $fatura_modelo;

    /**
     *
     * @var double
     */
    public $empresa;

    /**
     *
     * @var string
     */
    public $folha_mensagem;

    /**
     *
     * @var string
     */
    public $folha_mensagem1;

    /**
     *
     * @var string
     */
    public $folha_mensagem2;

    /**
     *
     * @var double
     */
    public $fator_preco;

    /**
     *
     * @var string
     */
    public $fgts;

    /**
     *
     * @var double
     */
    public $pedido;

    /**
     *
     * @var double
     */
    public $modelo1;

    /**
     *
     * @var double
     */
    public $modelo2;

    /**
     *
     * @var double
     */
    public $modelo3;

    /**
     *
     * @var double
     */
    public $modelo4;

    /**
     *
     * @var double
     */
    public $modelo5;

    /**
     *
     * @var double
     */
    public $modelo6;

    /**
     *
     * @var double
     */
    public $modelo7;

    /**
     *
     * @var double
     */
    public $modelo8;

    /**
     *
     * @var double
     */
    public $modelo9;

    /**
     *
     * @var string
     */
    public $uucp;

    /**
     *
     * @var string
     */
    public $uucp_data;

    /**
     *
     * @var double
     */
    public $uucp_hora;

    /**
     *
     * @var double
     */
    public $pedido_compra;

    /**
     *
     * @var string
     */
    public $cliente;

    /**
     *
     * @var string
     */
    public $fornecedor;

    /**
     *
     * @var double
     */
    public $fornecedor_emp;

    /**
     *
     * @var double
     */
    public $fornecedor_cod;

    /**
     *
     * @var double
     */
    public $cliente_emp;

    /**
     *
     * @var double
     */
    public $cliente_cod;

    /**
     *
     * @var string
     */
    public $log;

    /**
     *
     * @var string
     */
    public $log_data;

    /**
     *
     * @var double
     */
    public $log_hora;

    /**
     *
     * @var string
     */
    public $destinario;

    /**
     *
     * @var double
     */
    public $x;

    /**
     *
     * @var double
     */
    public $y;

    /**
     *
     * @var double
     */
    public $distancia;

    /**
     *
     * @var string
     */
    public $suframa;

    /**
     *
     * @var string
     */
    public $pedido_obs;

    /**
     *
     * @var string
     */
    public $m1;

    /**
     *
     * @var string
     */
    public $m2;

    /**
     *
     * @var string
     */
    public $m3;

    /**
     *
     * @var string
     */
    public $m4;

    /**
     *
     * @var string
     */
    public $m5;

    /**
     *
     * @var string
     */
    public $m6;

    /**
     *
     * @var string
     */
    public $m7;

    /**
     *
     * @var string
     */
    public $m8;

    /**
     *
     * @var string
     */
    public $m9;

    /**
     *
     * @var string
     */
    public $informatizada;

    /**
     *
     * @var string
     */
    public $cgc_1;

    /**
     *
     * @var string
     */
    public $nf1;

    /**
     *
     * @var string
     */
    public $nf2;

    /**
     *
     * @var string
     */
    public $nf3;

    /**
     *
     * @var string
     */
    public $nf4;

    /**
     *
     * @var string
     */
    public $nf5;

    /**
     *
     * @var string
     */
    public $nf6;

    /**
     *
     * @var string
     */
    public $nf7;

    /**
     *
     * @var string
     */
    public $nf8;

    /**
     *
     * @var string
     */
    public $nf9;

    /**
     *
     * @var string
     */
    public $oc1;

    /**
     *
     * @var string
     */
    public $oc2;

    /**
     *
     * @var string
     */
    public $oc3;

    /**
     *
     * @var string
     */
    public $oc4;

    /**
     *
     * @var string
     */
    public $oc5;

    /**
     *
     * @var string
     */
    public $oc6;

    /**
     *
     * @var string
     */
    public $oc7;

    /**
     *
     * @var string
     */
    public $oc8;

    /**
     *
     * @var string
     */
    public $oc9;

    /**
     *
     * @var double
     */
    public $cheque;

    /**
     *
     * @var string
     */
    public $bloqueio_nf;

    /**
     *
     * @var string
     */
    public $bloqueio_fatura;

    /**
     *
     * @var string
     */
    public $bloqueio_compra;

    /**
     *
     * @var double
     */
    public $recibo;

    /**
     *
     * @var double
     */
    public $fator_pedido;

    /**
     *
     * @var string
     */
    public $cpd;

    /**
     *
     * @var string
     */
    public $gerente;

    /**
     *
     * @var string
     */
    public $tesoreiro;

    /**
     *
     * @var double
     */
    public $dias_malote;

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
     * @var double
     */
    public $ender_numero;

    /**
     *
     * @var double
     */
    public $mult_med_mensal;

    /**
     *
     * @var string
     */
    public $possui_selofisc;

    /**
     *
     * @var string
     */
    public $inst_banc_jur;

    /**
     *
     * @var string
     */
    public $inst_banc_fis;

    /**
     *
     * @var double
     */
    public $id_reg;

    /**
     *
     * @var string
     */
    public $oper_isenta;

    /**
     *
     * @var string
     */
    public $dtregjuntacom;

    /**
     *
     * @var double
     */
    public $cod_municipio;

    /**
     *
     * @var double
     */
    public $cod_uf;

    /**
     *
     * @var double
     */
    public $cod_pais;

    /**
     *
     * @var string
     */
    public $desc_pais;

    /**
     *
     * @var string
     */
    public $ind_perfil;

    /**
     *
     * @var double
     */
    public $ind_atividade;

    /**
     *
     * @var string
     */
    public $cod_receita;

    /**
     *
     * @var string
     */
    public $campo_md5_registro;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("public");
        $this->setSource("ags022");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ags022';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Ags022[]|Ags022|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Ags022|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
