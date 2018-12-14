<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class LprecosiMigration_100
 */
class LprecosiMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('lprecosi', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 1,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'fornecedor_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'id_numero'
                        ]
                    ),
                    new Column(
                        'fornecedor_cod',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'fornecedor_emp'
                        ]
                    ),
                    new Column(
                        'produto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'fornecedor_cod'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'produto'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
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
                        'aliq_ipi',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 4,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'log_aplc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'aliq_ipi'
                        ]
                    ),
                    new Column(
                        'log_data_aplc',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'log_aplc'
                        ]
                    ),
                    new Column(
                        'log_hora_aplc',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'log_data_aplc'
                        ]
                    ),
                    new Column(
                        'preco_base',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'log_hora_aplc'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('lprecosi_index00', ['recnum'], null),
                    new Index('lprecosi_index01', ['fornecedor_cod', 'id_numero', 'fornecedor_emp', 'produto'], null),
                    new Index('lprecosi_index02', ['produto', 'id_numero', 'fornecedor_emp', 'fornecedor_cod'], null),
                    new Index('lprecosi_index03', ['recnum', 'log_data_aplc'], null)
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
