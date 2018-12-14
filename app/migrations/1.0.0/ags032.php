<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Ags032Migration_100
 */
class Ags032Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('ags032', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "nextval(('"public"."ags032_dfseq"'::text)::regclass)",
                            'notNull' => true,
                            'size' => 28,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'codigo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'cgc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'codigo'
                        ]
                    ),
                    new Column(
                        'razao_social',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'cgc'
                        ]
                    ),
                    new Column(
                        'nome',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'razao_social'
                        ]
                    ),
                    new Column(
                        'empresa',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'nome'
                        ]
                    ),
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'empresa'
                        ]
                    ),
                    new Column(
                        'tipocontrib',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'contribuinte',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'tipocontrib'
                        ]
                    ),
                    new Column(
                        'entcontato',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 20,
                            'after' => 'contribuinte'
                        ]
                    ),
                    new Column(
                        'entender',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 40,
                            'after' => 'entcontato'
                        ]
                    ),
                    new Column(
                        'entbairro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 15,
                            'after' => 'entender'
                        ]
                    ),
                    new Column(
                        'entcidade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 40,
                            'after' => 'entbairro'
                        ]
                    ),
                    new Column(
                        'entcep',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 8,
                            'after' => 'entcidade'
                        ]
                    ),
                    new Column(
                        'entestado',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 2,
                            'after' => 'entcep'
                        ]
                    ),
                    new Column(
                        'entddd',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 3,
                            'after' => 'entestado'
                        ]
                    ),
                    new Column(
                        'enttelefone1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'entddd'
                        ]
                    ),
                    new Column(
                        'entramal1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 4,
                            'after' => 'enttelefone1'
                        ]
                    ),
                    new Column(
                        'enttelex',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 8,
                            'after' => 'entramal1'
                        ]
                    ),
                    new Column(
                        'entfax',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'enttelex'
                        ]
                    ),
                    new Column(
                        'entarea',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'after' => 'entfax'
                        ]
                    ),
                    new Column(
                        'enttelefone2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'entarea'
                        ]
                    ),
                    new Column(
                        'entramal2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 4,
                            'after' => 'enttelefone2'
                        ]
                    ),
                    new Column(
                        'cobcontato',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 20,
                            'after' => 'entramal2'
                        ]
                    ),
                    new Column(
                        'cobender',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 40,
                            'after' => 'cobcontato'
                        ]
                    ),
                    new Column(
                        'cobbairro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 15,
                            'after' => 'cobender'
                        ]
                    ),
                    new Column(
                        'cobcidade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 40,
                            'after' => 'cobbairro'
                        ]
                    ),
                    new Column(
                        'cobcep',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 8,
                            'after' => 'cobcidade'
                        ]
                    ),
                    new Column(
                        'cobestado',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 2,
                            'after' => 'cobcep'
                        ]
                    ),
                    new Column(
                        'cobddd',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 3,
                            'after' => 'cobestado'
                        ]
                    ),
                    new Column(
                        'cobtelefone',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'cobddd'
                        ]
                    ),
                    new Column(
                        'cobramal',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 4,
                            'after' => 'cobtelefone'
                        ]
                    ),
                    new Column(
                        'cobtelex',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 8,
                            'after' => 'cobramal'
                        ]
                    ),
                    new Column(
                        'cobfax',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'cobtelex'
                        ]
                    ),
                    new Column(
                        'cobarea',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'after' => 'cobfax'
                        ]
                    ),
                    new Column(
                        'instrucao_banco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 2,
                            'after' => 'cobarea'
                        ]
                    ),
                    new Column(
                        'inscest',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'instrucao_banco'
                        ]
                    ),
                    new Column(
                        'vendedor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'after' => 'inscest'
                        ]
                    ),
                    new Column(
                        'cgcprinc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 14,
                            'after' => 'vendedor'
                        ]
                    ),
                    new Column(
                        'bloqueio',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'cgcprinc'
                        ]
                    ),
                    new Column(
                        'bloqueio_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'bloqueio'
                        ]
                    ),
                    new Column(
                        'bloqueio_usu_s',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'bloqueio_data'
                        ]
                    ),
                    new Column(
                        'bloqueio_usu_n',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'bloqueio_usu_s'
                        ]
                    ),
                    new Column(
                        'compra_ultima',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'bloqueio_usu_n'
                        ]
                    ),
                    new Column(
                        'compra_numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "1",
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'compra_ultima'
                        ]
                    ),
                    new Column(
                        'compra_serie',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 3,
                            'after' => 'compra_numero'
                        ]
                    ),
                    new Column(
                        'compra_filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 2,
                            'after' => 'compra_serie'
                        ]
                    ),
                    new Column(
                        'compra_total',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 16,
                            'scale' => 2,
                            'after' => 'compra_filial'
                        ]
                    ),
                    new Column(
                        'compra_situacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 5,
                            'after' => 'compra_total'
                        ]
                    ),
                    new Column(
                        'compra_vendedor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'after' => 'compra_situacao'
                        ]
                    ),
                    new Column(
                        'compra_usuario',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'compra_vendedor'
                        ]
                    ),
                    new Column(
                        'suframa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'compra_usuario'
                        ]
                    ),
                    new Column(
                        'cliente_tipo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 2,
                            'after' => 'suframa'
                        ]
                    ),
                    new Column(
                        'cartao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'after' => 'cliente_tipo'
                        ]
                    ),
                    new Column(
                        'cartao_numero',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 20,
                            'after' => 'cartao'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'cartao_numero'
                        ]
                    ),
                    new Column(
                        'log_usuario',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 12,
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_alteracao',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'default' => "01/01/0001",
                            'size' => 1,
                            'after' => 'log_usuario'
                        ]
                    ),
                    new Column(
                        'banco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 4,
                            'after' => 'log_alteracao'
                        ]
                    ),
                    new Column(
                        'banco_agencia',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'banco'
                        ]
                    ),
                    new Column(
                        'agrupar_notas',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'banco_agencia'
                        ]
                    ),
                    new Column(
                        'fj',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'agrupar_notas'
                        ]
                    ),
                    new Column(
                        'status',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'fj'
                        ]
                    ),
                    new Column(
                        'flag',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'status'
                        ]
                    ),
                    new Column(
                        'cheque_cadastro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'flag'
                        ]
                    ),
                    new Column(
                        'cheque_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'cheque_cadastro'
                        ]
                    ),
                    new Column(
                        'cheque_usuario',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'cheque_data'
                        ]
                    ),
                    new Column(
                        'cheque_observac',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 64,
                            'after' => 'cheque_usuario'
                        ]
                    ),
                    new Column(
                        'estado_civil',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'cheque_observac'
                        ]
                    ),
                    new Column(
                        'cpt',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 8,
                            'after' => 'estado_civil'
                        ]
                    ),
                    new Column(
                        'cpt_serie',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 5,
                            'after' => 'cpt'
                        ]
                    ),
                    new Column(
                        'cpt_origem',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 2,
                            'after' => 'cpt_serie'
                        ]
                    ),
                    new Column(
                        'esposa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 50,
                            'after' => 'cpt_origem'
                        ]
                    ),
                    new Column(
                        'esposa_nascimen',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'esposa'
                        ]
                    ),
                    new Column(
                        'esposa_trab',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 40,
                            'after' => 'esposa_nascimen'
                        ]
                    ),
                    new Column(
                        'esposa_trab_end',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 40,
                            'after' => 'esposa_trab'
                        ]
                    ),
                    new Column(
                        'esposa_trab_ddd',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'after' => 'esposa_trab_end'
                        ]
                    ),
                    new Column(
                        'esposa_trab_fon',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 8,
                            'after' => 'esposa_trab_ddd'
                        ]
                    ),
                    new Column(
                        'esposa_trab_ram',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'after' => 'esposa_trab_fon'
                        ]
                    ),
                    new Column(
                        'esposa_trab_pro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 30,
                            'after' => 'esposa_trab_ram'
                        ]
                    ),
                    new Column(
                        'esposa_trab_car',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 30,
                            'after' => 'esposa_trab_pro'
                        ]
                    ),
                    new Column(
                        'esposa_trab_sec',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 30,
                            'after' => 'esposa_trab_car'
                        ]
                    ),
                    new Column(
                        'esposa_trab_adm',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'esposa_trab_sec'
                        ]
                    ),
                    new Column(
                        'esposa_fil_pai',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 50,
                            'after' => 'esposa_trab_adm'
                        ]
                    ),
                    new Column(
                        'esposa_fil_mae',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 50,
                            'after' => 'esposa_fil_pai'
                        ]
                    ),
                    new Column(
                        'esposa_identid',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 14,
                            'after' => 'esposa_fil_mae'
                        ]
                    ),
                    new Column(
                        'filiacao_pai',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 50,
                            'after' => 'esposa_identid'
                        ]
                    ),
                    new Column(
                        'filiacao_mae',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 50,
                            'after' => 'filiacao_pai'
                        ]
                    ),
                    new Column(
                        'nascimento',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'filiacao_mae'
                        ]
                    ),
                    new Column(
                        'trabalho',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 40,
                            'after' => 'nascimento'
                        ]
                    ),
                    new Column(
                        'trabalho_ender',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 40,
                            'after' => 'trabalho'
                        ]
                    ),
                    new Column(
                        'trabalho_cargo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 30,
                            'after' => 'trabalho_ender'
                        ]
                    ),
                    new Column(
                        'trabalho_profis',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 30,
                            'after' => 'trabalho_cargo'
                        ]
                    ),
                    new Column(
                        'trabalho_secao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 30,
                            'after' => 'trabalho_profis'
                        ]
                    ),
                    new Column(
                        'trabalho_ddd',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'after' => 'trabalho_secao'
                        ]
                    ),
                    new Column(
                        'trabalho_fone',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 8,
                            'after' => 'trabalho_ddd'
                        ]
                    ),
                    new Column(
                        'trabalho_ramal',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'after' => 'trabalho_fone'
                        ]
                    ),
                    new Column(
                        'trabalho_admiss',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'trabalho_ramal'
                        ]
                    ),
                    new Column(
                        'ficha',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'trabalho_admiss'
                        ]
                    ),
                    new Column(
                        'ficha_usuario',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'ficha'
                        ]
                    ),
                    new Column(
                        'ficha_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'ficha_usuario'
                        ]
                    ),
                    new Column(
                        'uucp',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'ficha_data'
                        ]
                    ),
                    new Column(
                        'uucp_usuario',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'uucp'
                        ]
                    ),
                    new Column(
                        'cadastro',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'uucp_usuario'
                        ]
                    ),
                    new Column(
                        'uucp_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'cadastro'
                        ]
                    ),
                    new Column(
                        'uucp_err',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 21,
                            'after' => 'uucp_hora'
                        ]
                    ),
                    new Column(
                        'uucp_obs',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 21,
                            'after' => 'uucp_err'
                        ]
                    ),
                    new Column(
                        'limite_credito',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'uucp_obs'
                        ]
                    ),
                    new Column(
                        'saldo_devedor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'limite_credito'
                        ]
                    ),
                    new Column(
                        'natural',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 40,
                            'after' => 'saldo_devedor'
                        ]
                    ),
                    new Column(
                        'natural_uf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 2,
                            'after' => 'natural'
                        ]
                    ),
                    new Column(
                        'cartao_vencto',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'natural_uf'
                        ]
                    ),
                    new Column(
                        'cartao_inicio',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'cartao_vencto'
                        ]
                    ),
                    new Column(
                        'esposa_cpf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 14,
                            'after' => 'cartao_inicio'
                        ]
                    ),
                    new Column(
                        'end_ant',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 50,
                            'after' => 'esposa_cpf'
                        ]
                    ),
                    new Column(
                        'end_ant1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 50,
                            'after' => 'end_ant'
                        ]
                    ),
                    new Column(
                        'end_ant_tempo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'end_ant1'
                        ]
                    ),
                    new Column(
                        'end_ant_tempo1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'end_ant_tempo'
                        ]
                    ),
                    new Column(
                        'observacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 50,
                            'after' => 'end_ant_tempo1'
                        ]
                    ),
                    new Column(
                        'observacao1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 50,
                            'after' => 'observacao'
                        ]
                    ),
                    new Column(
                        'identidade_emis',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'observacao1'
                        ]
                    ),
                    new Column(
                        'limite_log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'identidade_emis'
                        ]
                    ),
                    new Column(
                        'limite_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'limite_log'
                        ]
                    ),
                    new Column(
                        'limite_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'limite_data'
                        ]
                    ),
                    new Column(
                        'cobrador',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 3,
                            'after' => 'limite_hora'
                        ]
                    ),
                    new Column(
                        'correio',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'cobrador'
                        ]
                    ),
                    new Column(
                        'correio_resp',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 30,
                            'after' => 'correio'
                        ]
                    ),
                    new Column(
                        'saldo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'correio_resp'
                        ]
                    ),
                    new Column(
                        'aniv_mes',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 2,
                            'after' => 'saldo'
                        ]
                    ),
                    new Column(
                        'aniv_dia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 2,
                            'after' => 'aniv_mes'
                        ]
                    ),
                    new Column(
                        'aniv_conj_mes',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 2,
                            'after' => 'aniv_dia'
                        ]
                    ),
                    new Column(
                        'aniv_conj_dia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 2,
                            'after' => 'aniv_conj_mes'
                        ]
                    ),
                    new Column(
                        'log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'aniv_conj_dia'
                        ]
                    ),
                    new Column(
                        'numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'caf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'numero'
                        ]
                    ),
                    new Column(
                        'cafil',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 2,
                            'after' => 'caf'
                        ]
                    ),
                    new Column(
                        'id_reg',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 12,
                            'after' => 'cafil'
                        ]
                    ),
                    new Column(
                        'lim',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'id_reg'
                        ]
                    ),
                    new Column(
                        'lim_log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'lim'
                        ]
                    ),
                    new Column(
                        'lim_log_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'lim_log'
                        ]
                    ),
                    new Column(
                        'lim_log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'lim_log_data'
                        ]
                    ),
                    new Column(
                        'lim1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'lim_log_hora'
                        ]
                    ),
                    new Column(
                        'lim1_log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 10,
                            'after' => 'lim1'
                        ]
                    ),
                    new Column(
                        'lim1_log_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'lim1_log'
                        ]
                    ),
                    new Column(
                        'lim1_log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'lim1_log_data'
                        ]
                    ),
                    new Column(
                        'oper_isenta',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'lim1_log_hora'
                        ]
                    ),
                    new Column(
                        'os_numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 8,
                            'after' => 'oper_isenta'
                        ]
                    ),
                    new Column(
                        'opt_simples',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'os_numero'
                        ]
                    ),
                    new Column(
                        'insc_municipal',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 15,
                            'after' => 'opt_simples'
                        ]
                    ),
                    new Column(
                        'iss_ret_fonte',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'insc_municipal'
                        ]
                    ),
                    new Column(
                        'numero_rg',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 15,
                            'after' => 'iss_ret_fonte'
                        ]
                    ),
                    new Column(
                        'emissao_rg',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'size' => 1,
                            'after' => 'numero_rg'
                        ]
                    ),
                    new Column(
                        'emissor_rg',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 5,
                            'after' => 'emissao_rg'
                        ]
                    ),
                    new Column(
                        'ipi_venda',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1,
                            'after' => 'emissor_rg'
                        ]
                    ),
                    new Column(
                        'id_preco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'ipi_venda'
                        ]
                    ),
                    new Column(
                        'descpais',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 60,
                            'after' => 'id_preco'
                        ]
                    ),
                    new Column(
                        'entnumero',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 6,
                            'after' => 'descpais'
                        ]
                    ),
                    new Column(
                        'cod_pais',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 6,
                            'after' => 'entnumero'
                        ]
                    ),
                    new Column(
                        'cod_munic',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 8,
                            'after' => 'cod_pais'
                        ]
                    ),
                    new Column(
                        'email',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'cod_munic'
                        ]
                    ),
                    new Column(
                        'carta_fianca',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "N",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'email'
                        ]
                    ),
                    new Column(
                        'valor_carta',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'carta_fianca'
                        ]
                    ),
                    new Column(
                        'codcliente',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'valor_carta'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('ags032_index00', ['recnum'], null),
                    new Index('ags032_index01', ['codigo', 'empresa'], null),
                    new Index('ags032_index02', ['cgc'], null),
                    new Index('ags032_index03', ['codigo', 'empresa', 'nome', 'razao_social'], null),
                    new Index('ags032_index04', ['razao_social', 'empresa', 'nome', 'codigo'], null),
                    new Index('ags032_index05', ['bloqueio_data', 'empresa', 'nome', 'razao_social', 'cgc', 'codigo', 'bloqueio'], null),
                    new Index('ags032_index06', ['razao_social', 'codigo', 'nome', 'cliente_tipo', 'empresa'], null),
                    new Index('ags032_index07', ['cobarea', 'codigo', 'razao_social', 'empresa', 'cobbairro', 'cobrador'], null),
                    new Index('ags032_index08', ['aniv_dia', 'aniv_mes', 'razao_social', 'codigo', 'recnum'], null),
                    new Index('ags032_index09', ['codigo', 'recnum', 'aniv_conj_dia', 'aniv_conj_mes', 'filial', 'razao_social'], null),
                    new Index('ags032_index10', ['numero'], null),
                    new Index('ags032_index11', ['cgc', 'filial', 'razao_social', 'recnum'], null),
                    new Index('ags032_index12', ['caf', 'recnum'], null),
                    new Index('ags032_index13', ['log_alteracao', 'recnum'], null),
                    new Index('ags032_index14', ['cadastro', 'recnum'], null)
                ],
            ]
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
