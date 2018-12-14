<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Coban13Migration_100
 */
class Coban13Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('coban13', [
                'columns' => [
                    new Column(
                        'lote_arq',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 6,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'cod_ban',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "NUL",
                            'size' => 3,
                            'after' => 'lote_arq'
                        ]
                    ),
                    new Column(
                        'cod_retorno',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "NU",
                            'size' => 2,
                            'after' => 'cod_ban'
                        ]
                    ),
                    new Column(
                        'ident_titulo_ban',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 20,
                            'after' => 'cod_retorno'
                        ]
                    ),
                    new Column(
                        'ident_titulo_emp',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 20,
                            'after' => 'ident_titulo_ban'
                        ]
                    ),
                    new Column(
                        'cod_carteira',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 3,
                            'after' => 'ident_titulo_emp'
                        ]
                    ),
                    new Column(
                        'num_doc_cob',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 20,
                            'after' => 'cod_carteira'
                        ]
                    ),
                    new Column(
                        'dt_vencimento',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'num_doc_cob'
                        ]
                    ),
                    new Column(
                        'vl_titulo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 13,
                            'scale' => 2,
                            'after' => 'dt_vencimento'
                        ]
                    ),
                    new Column(
                        'tipo_insc',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'vl_titulo'
                        ]
                    ),
                    new Column(
                        'doc_insc',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 15,
                            'after' => 'tipo_insc'
                        ]
                    ),
                    new Column(
                        'nome',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 40,
                            'after' => 'doc_insc'
                        ]
                    ),
                    new Column(
                        'vl_juros',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 13,
                            'scale' => 2,
                            'after' => 'nome'
                        ]
                    ),
                    new Column(
                        'vl_desconto',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 13,
                            'scale' => 2,
                            'after' => 'vl_juros'
                        ]
                    ),
                    new Column(
                        'vl_abatimento',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 13,
                            'scale' => 2,
                            'after' => 'vl_desconto'
                        ]
                    ),
                    new Column(
                        'vl_iof',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 13,
                            'scale' => 2,
                            'after' => 'vl_abatimento'
                        ]
                    ),
                    new Column(
                        'vl_pago',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 13,
                            'scale' => 2,
                            'after' => 'vl_iof'
                        ]
                    ),
                    new Column(
                        'vl_liq_cred',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 13,
                            'scale' => 2,
                            'after' => 'vl_pago'
                        ]
                    ),
                    new Column(
                        'vl_despesas',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 13,
                            'scale' => 2,
                            'after' => 'vl_liq_cred'
                        ]
                    ),
                    new Column(
                        'vl_creditos',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 13,
                            'scale' => 2,
                            'after' => 'vl_despesas'
                        ]
                    ),
                    new Column(
                        'dt_ocorrencia',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'vl_creditos'
                        ]
                    ),
                    new Column(
                        'dt_credito',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'dt_ocorrencia'
                        ]
                    ),
                    new Column(
                        'status',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "NU",
                            'size' => 2,
                            'after' => 'dt_credito'
                        ]
                    ),
                    new Column(
                        'processado',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "N",
                            'size' => 1,
                            'after' => 'status'
                        ]
                    ),
                    new Column(
                        'log_proc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 10,
                            'after' => 'processado'
                        ]
                    ),
                    new Column(
                        'log_data_proc',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'log_proc'
                        ]
                    ),
                    new Column(
                        'log_hora_proc',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'log_data_proc'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 10,
                            'after' => 'log_hora_proc'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'log_data'
                        ]
                    ),
                    new Column(
                        'mensagem',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 200,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'mensagem1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 200,
                            'after' => 'mensagem'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('coban13_index01', ['lote_arq', 'cod_ban', 'cod_retorno', 'ident_titulo_ban'], null),
                    new Index('coban13_index02', ['cod_retorno'], null),
                    new Index('coban13_index03', ['cod_ban'], null)
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
