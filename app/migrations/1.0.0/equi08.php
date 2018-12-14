<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Equi08Migration_100
 */
class Equi08Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('equi08', [
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
                        'id_transfer',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'selo_patrimonio',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'id_transfer'
                        ]
                    ),
                    new Column(
                        'id_equipamento',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'selo_patrimonio'
                        ]
                    ),
                    new Column(
                        'observacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 60,
                            'after' => 'id_equipamento'
                        ]
                    ),
                    new Column(
                        'quantidade',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'observacao'
                        ]
                    ),
                    new Column(
                        'qtde_confer',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'quantidade'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'qtde_confer'
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
                    )
                ],
                'indexes' => [
                    new Index('equi08_index00', ['recnum'], null),
                    new Index('equi08_index01', ['id_transfer', 'selo_patrimonio'], null),
                    new Index('equi08_index02', ['id_transfer', 'id_equipamento'], null)
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
