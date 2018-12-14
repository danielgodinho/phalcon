<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Coban01Migration_100
 */
class Coban01Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('coban01', [
                'columns' => [
                    new Column(
                        'cod_empresa',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'cod_banco',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cod_empresa'
                        ]
                    ),
                    new Column(
                        'rzs_banco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'cod_banco'
                        ]
                    ),
                    new Column(
                        'nme_banco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'rzs_banco'
                        ]
                    ),
                    new Column(
                        'nro_agencia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'nme_banco'
                        ]
                    ),
                    new Column(
                        'nro_conta',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 5,
                            'after' => 'nro_agencia'
                        ]
                    ),
                    new Column(
                        'dac',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nro_conta'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'dac'
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
                        'cod_ban_spmz',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 3,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'dac_agencia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'cod_ban_spmz'
                        ]
                    ),
                    new Column(
                        'convenio',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 20,
                            'after' => 'dac_agencia'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('coban01_index00', ['cod_empresa', 'cod_banco', 'nro_agencia', 'nro_conta', 'dac', 'cod_ban_spmz'], null)
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
