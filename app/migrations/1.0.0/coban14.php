<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Coban14Migration_100
 */
class Coban14Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('coban14', [
                'columns' => [
                    new Column(
                        'cod_mov',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "NU",
                            'size' => 2,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'descricao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'cod_mov'
                        ]
                    ),
                    new Column(
                        'proc_baixa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "N",
                            'size' => 1,
                            'after' => 'descricao'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 10,
                            'after' => 'proc_baixa'
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
                        'cnab',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "240",
                            'size' => 20,
                            'after' => 'log_hora'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('coban14_index01', ['cod_mov', 'cnab'], null)
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
