<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class PedcontroleitemMigration_100
 */
class PedcontroleitemMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('pedcontroleitem', [
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
                        'filial',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'pedcontrole',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'item',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'pedcontrole'
                        ]
                    ),
                    new Column(
                        'produtoemp',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'item'
                        ]
                    ),
                    new Column(
                        'produtofor',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'produtoemp'
                        ]
                    ),
                    new Column(
                        'produto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 20,
                            'after' => 'produtofor'
                        ]
                    ),
                    new Column(
                        'locacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 15,
                            'after' => 'produto'
                        ]
                    ),
                    new Column(
                        'qtd_ped',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'locacao'
                        ]
                    ),
                    new Column(
                        'qtd_sep',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'qtd_ped'
                        ]
                    ),
                    new Column(
                        'sts_sep',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'qtd_sep'
                        ]
                    ),
                    new Column(
                        'qtd_confer',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'sts_sep'
                        ]
                    ),
                    new Column(
                        'sts_confer',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'qtd_confer'
                        ]
                    ),
                    new Column(
                        'impresso',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'sts_confer'
                        ]
                    ),
                    new Column(
                        'es',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'impresso'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'es'
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
                        'log_timestamp',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'status_coleta',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "N",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'log_timestamp'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('pedcontroleitem_index00', ['recnum'], null),
                    new Index('pedcontroleitem_index01', ['filial', 'es', 'item', 'pedcontrole'], null),
                    new Index('pedcontroleitem_index02', ['produto', 'filial', 'pedcontrole', 'item', 'produtoemp', 'produtofor'], null),
                    new Index('pedcontroleitem_index03', ['pedcontrole', 'filial', 'locacao', 'produto', 'produtofor', 'produtoemp', 'item'], null)
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
