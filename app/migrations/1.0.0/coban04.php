<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Coban04Migration_100
 */
class Coban04Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('coban04', [
                'columns' => [
                    new Column(
                        'sequencia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'codbanco',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'sequencia'
                        ]
                    ),
                    new Column(
                        'agencia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 5,
                            'after' => 'codbanco'
                        ]
                    ),
                    new Column(
                        'conta',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'agencia'
                        ]
                    ),
                    new Column(
                        'tipo_doc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 2,
                            'after' => 'conta'
                        ]
                    ),
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'tipo_doc'
                        ]
                    ),
                    new Column(
                        'numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 8,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'duplicata',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 2,
                            'after' => 'numero'
                        ]
                    ),
                    new Column(
                        'vencimento',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'duplicata'
                        ]
                    ),
                    new Column(
                        'carteira',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'vencimento'
                        ]
                    ),
                    new Column(
                        'cod_ocorr',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'carteira'
                        ]
                    ),
                    new Column(
                        'data_ocorr',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cod_ocorr'
                        ]
                    ),
                    new Column(
                        'val_titulo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'data_ocorr'
                        ]
                    ),
                    new Column(
                        'val_principal',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'val_titulo'
                        ]
                    ),
                    new Column(
                        'val_iof',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'val_principal'
                        ]
                    ),
                    new Column(
                        'juros',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'val_iof'
                        ]
                    ),
                    new Column(
                        'descontos',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'juros'
                        ]
                    ),
                    new Column(
                        'abatimentos',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'descontos'
                        ]
                    ),
                    new Column(
                        'outcreditos',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'abatimentos'
                        ]
                    ),
                    new Column(
                        'erros',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'outcreditos'
                        ]
                    ),
                    new Column(
                        'cod_liquidacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'erros'
                        ]
                    ),
                    new Column(
                        'nome_sacado',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 40,
                            'after' => 'cod_liquidacao'
                        ]
                    ),
                    new Column(
                        'num_seq_arq',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 5,
                            'after' => 'nome_sacado'
                        ]
                    ),
                    new Column(
                        'data_credito',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'num_seq_arq'
                        ]
                    ),
                    new Column(
                        'num_seq',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'data_credito'
                        ]
                    ),
                    new Column(
                        'cod_bco_cob',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'num_seq'
                        ]
                    ),
                    new Column(
                        'cod_agn_cob',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 5,
                            'after' => 'cod_bco_cob'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'cod_agn_cob'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
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
                        'nome_arq_txt',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'data_import',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nome_arq_txt'
                        ]
                    ),
                    new Column(
                        'baixa_status',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 2,
                            'after' => 'data_import'
                        ]
                    ),
                    new Column(
                        'baixa_msg',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'baixa_status'
                        ]
                    ),
                    new Column(
                        'serie_nf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 3,
                            'after' => 'baixa_msg'
                        ]
                    ),
                    new Column(
                        'uso_empresa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 25,
                            'after' => 'serie_nf'
                        ]
                    ),
                    new Column(
                        'num_doc_cobr',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 15,
                            'after' => 'uso_empresa'
                        ]
                    ),
                    new Column(
                        'nosso_numero',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 25,
                            'after' => 'num_doc_cobr'
                        ]
                    ),
                    new Column(
                        'motivo_ocorrencia',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'size' => 10,
                            'after' => 'nosso_numero'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('coban04_index01', ['sequencia', 'filial', 'numero', 'cod_ocorr', 'baixa_status', 'serie_nf'], null)
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
