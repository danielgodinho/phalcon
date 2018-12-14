<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Ecfa209Migration_100
 */
class Ecfa209Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('ecfa209', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "nextval(('"public"."ecfa209_dfseq"'::text)::regclass)",
                            'notNull' => true,
                            'size' => 28,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'if',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'if'
                        ]
                    ),
                    new Column(
                        'cupom',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'data'
                        ]
                    ),
                    new Column(
                        'pedido_filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'cupom'
                        ]
                    ),
                    new Column(
                        'pedido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'pedido_filial'
                        ]
                    ),
                    new Column(
                        'cliente',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'pedido'
                        ]
                    ),
                    new Column(
                        'vendedor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'cliente'
                        ]
                    ),
                    new Column(
                        'total',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'vendedor'
                        ]
                    ),
                    new Column(
                        'liquido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'total'
                        ]
                    ),
                    new Column(
                        'condicao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 7,
                            'after' => 'liquido'
                        ]
                    ),
                    new Column(
                        'icms_valor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'condicao'
                        ]
                    ),
                    new Column(
                        'icms_base',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'icms_valor'
                        ]
                    ),
                    new Column(
                        'icms_aliquota',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'icms_base'
                        ]
                    ),
                    new Column(
                        'subst_valor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'icms_aliquota'
                        ]
                    ),
                    new Column(
                        'subst_base',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'subst_valor'
                        ]
                    ),
                    new Column(
                        'subst_aliquota',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'subst_base'
                        ]
                    ),
                    new Column(
                        'ipi_valor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'subst_aliquota'
                        ]
                    ),
                    new Column(
                        'ipi_base',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'ipi_valor'
                        ]
                    ),
                    new Column(
                        'ipi_aliquota',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'ipi_base'
                        ]
                    ),
                    new Column(
                        'item_q',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'ipi_aliquota'
                        ]
                    ),
                    new Column(
                        'obs',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 49,
                            'after' => 'item_q'
                        ]
                    ),
                    new Column(
                        'obs1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 49,
                            'after' => 'obs'
                        ]
                    ),
                    new Column(
                        'desconto_valor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'obs1'
                        ]
                    ),
                    new Column(
                        'desconto',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 4,
                            'after' => 'desconto_valor'
                        ]
                    ),
                    new Column(
                        'operacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 7,
                            'after' => 'desconto'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'operacao'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'log_data'
                        ]
                    ),
                    new Column(
                        'complemento',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'es',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'complemento'
                        ]
                    ),
                    new Column(
                        'desconto1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'es'
                        ]
                    ),
                    new Column(
                        'item_count',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'desconto1'
                        ]
                    ),
                    new Column(
                        'liquido_ipi',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'item_count'
                        ]
                    ),
                    new Column(
                        'status',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'liquido_ipi'
                        ]
                    ),
                    new Column(
                        'operacao_contab',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'status'
                        ]
                    ),
                    new Column(
                        'cliente_nome',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'operacao_contab'
                        ]
                    ),
                    new Column(
                        'ref_serie',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cliente_nome'
                        ]
                    ),
                    new Column(
                        'ref_nota',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'ref_serie'
                        ]
                    ),
                    new Column(
                        'caf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'ref_nota'
                        ]
                    ),
                    new Column(
                        'cafil',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'caf'
                        ]
                    ),
                    new Column(
                        'id_reg',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'cafil'
                        ]
                    ),
                    new Column(
                        'coo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'id_reg'
                        ]
                    ),
                    new Column(
                        'acressimo_p',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'coo'
                        ]
                    ),
                    new Column(
                        'acressimo_v',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'acressimo_p'
                        ]
                    ),
                    new Column(
                        'valor_pago',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'acressimo_v'
                        ]
                    ),
                    new Column(
                        'calc_ad_p',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'valor_pago'
                        ]
                    ),
                    new Column(
                        'calc_ad_v',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'calc_ad_p'
                        ]
                    ),
                    new Column(
                        'calc_ad_vp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'calc_ad_v'
                        ]
                    ),
                    new Column(
                        'tipocalc_ad',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'calc_ad_vp'
                        ]
                    ),
                    new Column(
                        'tiporeg',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'tipocalc_ad'
                        ]
                    ),
                    new Column(
                        'vlr_dinheiro',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'tiporeg'
                        ]
                    ),
                    new Column(
                        'vlr_cheque',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'vlr_dinheiro'
                        ]
                    ),
                    new Column(
                        'vlr_cartao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'vlr_cheque'
                        ]
                    ),
                    new Column(
                        'os_numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'vlr_cartao'
                        ]
                    ),
                    new Column(
                        'cc_bandeira',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'os_numero'
                        ]
                    ),
                    new Column(
                        'tp_frete',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cc_bandeira'
                        ]
                    ),
                    new Column(
                        'tp_pagto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'tp_frete'
                        ]
                    ),
                    new Column(
                        'total_deb_pis',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'tp_pagto'
                        ]
                    ),
                    new Column(
                        'total_deb_cof',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'total_deb_pis'
                        ]
                    ),
                    new Column(
                        'contabilizado',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'total_deb_cof'
                        ]
                    ),
                    new Column(
                        'nfce_chave',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 44,
                            'after' => 'contabilizado'
                        ]
                    ),
                    new Column(
                        'nfce_modelo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'nfce_chave'
                        ]
                    ),
                    new Column(
                        'nfce_tipo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nfce_modelo'
                        ]
                    ),
                    new Column(
                        'nfce_timpressao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nfce_tipo'
                        ]
                    ),
                    new Column(
                        'nfce_tpemissao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nfce_timpressao'
                        ]
                    ),
                    new Column(
                        'nfce_digverif',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nfce_tpemissao'
                        ]
                    ),
                    new Column(
                        'nfce_tpambiente',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nfce_digverif'
                        ]
                    ),
                    new Column(
                        'nfce_finalidade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nfce_tpambiente'
                        ]
                    ),
                    new Column(
                        'nfce_proemissao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nfce_finalidade'
                        ]
                    ),
                    new Column(
                        'nfce_versaoproc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'nfce_proemissao'
                        ]
                    ),
                    new Column(
                        'nfce_status',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'nfce_versaoproc'
                        ]
                    ),
                    new Column(
                        'nfce_numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'nfce_status'
                        ]
                    ),
                    new Column(
                        'nfce_protnumero',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'nfce_numero'
                        ]
                    ),
                    new Column(
                        'nfce_protdata',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nfce_protnumero'
                        ]
                    ),
                    new Column(
                        'nfce_protdigval',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'nfce_protdata'
                        ]
                    ),
                    new Column(
                        'nfce_protstat',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'nfce_protdigval'
                        ]
                    ),
                    new Column(
                        'nfce_protmotivo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'nfce_protstat'
                        ]
                    ),
                    new Column(
                        'nfce_datahora',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 25,
                            'after' => 'nfce_protmotivo'
                        ]
                    ),
                    new Column(
                        'nfce_check_env',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nfce_datahora'
                        ]
                    ),
                    new Column(
                        'nfce_cpf_cliente',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'nfce_check_env'
                        ]
                    ),
                    new Column(
                        'iss_tot_bc',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'nfce_cpf_cliente'
                        ]
                    ),
                    new Column(
                        'iss_tot_vl',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'iss_tot_bc'
                        ]
                    ),
                    new Column(
                        'iss_tot_ret',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'iss_tot_vl'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('ecfa209_index00', ['recnum'], null),
                    new Index('ecfa209_index01', ['filial', 'if', 'data', 'cupom'], null),
                    new Index('ecfa209_index02', ['recnum', 'caf'], null),
                    new Index('ecfa209_index03', ['recnum', 'filial', 'if', 'cupom', 'data'], null),
                    new Index('ecfa209_index04', ['data', 'cupom', 'cliente', 'filial', 'recnum', 'if'], null),
                    new Index('ecfa209_index05', ['recnum', 'filial', 'if', 'coo', 'data'], null),
                    new Index('ecfa209_index06', ['data', 'vendedor', 'cupom', 'filial', 'if'], null),
                    new Index('ecfa209_index07', ['recnum', 'log_data'], null),
                    new Index('ecfa209_index08', ['pedido', 'recnum', 'pedido_filial'], null),
                    new Index('ecfa209_index16', ['nfce_chave'], null),
                    new Index('ecfa209_index17', ['nfce_protdata', 'filial'], null)
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
