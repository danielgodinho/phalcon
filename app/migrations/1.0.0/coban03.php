<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Coban03Migration_100
 */
class Coban03Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('coban03', [
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
                        'data_import',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'sequencia'
                        ]
                    ),
                    new Column(
                        'nome_arq_txt',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'data_import'
                        ]
                    ),
                    new Column(
                        'arquivo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'nome_arq_txt'
                        ]
                    ),
                    new Column(
                        'empresa',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 2,
                            'after' => 'arquivo'
                        ]
                    ),
                    new Column(
                        'cod_banco',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 3,
                            'after' => 'empresa'
                        ]
                    ),
                    new Column(
                        'seq_arq_retorno',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 6,
                            'after' => 'cod_banco'
                        ]
                    )
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
