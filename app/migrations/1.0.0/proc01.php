<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Proc01Migration_100
 */
class Proc01Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('proc01', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 28,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_proc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'empresa',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'id_proc'
                        ]
                    ),
                    new Column(
                        'fornecedor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'empresa'
                        ]
                    ),
                    new Column(
                        'descricao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => true,
                            'size' => 200,
                            'after' => 'fornecedor'
                        ]
                    ),
                    new Column(
                        'tipo_proc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'descricao'
                        ]
                    ),
                    new Column(
                        'situacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'tipo_proc'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'situacao'
                        ]
                    ),
                    new Column(
                        'log_hora',
                        [
                            'type' => Column::TYPE_DOUBLE,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 53,
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'log_hora'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('proc01_index01', ['id_proc', 'empresa', 'fornecedor', 'tipo_proc'], null)
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
