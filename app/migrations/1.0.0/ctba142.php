<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Ctba142Migration_100
 */
class Ctba142Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('ctba142', [
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
                        'empresa',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'empresa'
                        ]
                    ),
                    new Column(
                        'ano',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'mes',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ano'
                        ]
                    ),
                    new Column(
                        'conta',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'mes'
                        ]
                    ),
                    new Column(
                        'centro_custo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'conta'
                        ]
                    ),
                    new Column(
                        'classif',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'centro_custo'
                        ]
                    ),
                    new Column(
                        'debito_ant',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 18,
                            'scale' => 4,
                            'after' => 'classif'
                        ]
                    ),
                    new Column(
                        'credito_ant',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 18,
                            'scale' => 4,
                            'after' => 'debito_ant'
                        ]
                    ),
                    new Column(
                        'debito',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 18,
                            'scale' => 4,
                            'after' => 'credito_ant'
                        ]
                    ),
                    new Column(
                        'credito',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 18,
                            'scale' => 4,
                            'after' => 'debito'
                        ]
                    ),
                    new Column(
                        'grau1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'credito'
                        ]
                    ),
                    new Column(
                        'grau2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'grau1'
                        ]
                    ),
                    new Column(
                        'grau3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'grau2'
                        ]
                    ),
                    new Column(
                        'grau4',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'grau3'
                        ]
                    ),
                    new Column(
                        'grau5',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 22,
                            'after' => 'grau4'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('ctba142_index00', ['recnum'], null),
                    new Index('ctba142_index01', ['empresa', 'mes', 'ano', 'centro_custo', 'filial', 'conta'], null),
                    new Index('ctba142_index02', ['centro_custo', 'recnum', 'empresa', 'filial', 'ano', 'mes', 'conta'], null),
                    new Index('ctba142_index03', ['filial', 'recnum', 'empresa', 'ano', 'mes', 'conta', 'centro_custo'], null),
                    new Index('ctba142_index04', ['recnum', 'empresa', 'filial', 'ano', 'mes', 'centro_custo', 'grau1', 'grau2', 'grau3', 'grau4', 'grau5'], null)
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
