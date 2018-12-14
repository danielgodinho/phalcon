<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Coban07Migration_100
 */
class Coban07Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('coban07', [
                'columns' => [
                    new Column(
                        'numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'cod_sacado',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'numero'
                        ]
                    ),
                    new Column(
                        'cnpj_emitente',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'cod_sacado'
                        ]
                    ),
                    new Column(
                        'valor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'cnpj_emitente'
                        ]
                    ),
                    new Column(
                        'vencimento',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'valor'
                        ]
                    ),
                    new Column(
                        'emissao',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'vencimento'
                        ]
                    ),
                    new Column(
                        'carteira',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 5,
                            'after' => 'emissao'
                        ]
                    ),
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'carteira'
                        ]
                    ),
                    new Column(
                        'serie',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'nota',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'serie'
                        ]
                    ),
                    new Column(
                        'fatura_num',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'nota'
                        ]
                    ),
                    new Column(
                        'duplicata',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'fatura_num'
                        ]
                    ),
                    new Column(
                        'tot_parcelas',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'duplicata'
                        ]
                    ),
                    new Column(
                        'cod_banco',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'tot_parcelas'
                        ]
                    ),
                    new Column(
                        'cod_agencia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'cod_banco'
                        ]
                    ),
                    new Column(
                        'conta',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 5,
                            'after' => 'cod_agencia'
                        ]
                    ),
                    new Column(
                        'dac',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'conta'
                        ]
                    ),
                    new Column(
                        'arq_txt_remessa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'dac'
                        ]
                    ),
                    new Column(
                        'status',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "N",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'arq_txt_remessa'
                        ]
                    ),
                    new Column(
                        'nosso_numero',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 20,
                            'after' => 'status'
                        ]
                    ),
                    new Column(
                        'num_doc_cobr',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'size' => 10,
                            'after' => 'nosso_numero'
                        ]
                    ),
                    new Column(
                        'uso_empresa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'size' => 25,
                            'after' => 'num_doc_cobr'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('pemaza_coban07_index00', ['numero'], null),
                    new Index('pemaza_coban07_index01', ['filial', 'fatura_num', 'duplicata', 'numero'], null),
                    new Index('pemaza_coban07_index02', ['numero', 'filial', 'serie', 'nota'], null)
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
