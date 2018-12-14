<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Tabcom38Migration_100
 */
class Tabcom38Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('tabcom38', [
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
                        'coligada',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 5,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'chapa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'coligada'
                        ]
                    ),
                    new Column(
                        'codigo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'chapa'
                        ]
                    ),
                    new Column(
                        'data_ref',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "to_date('01010001'::text, 'DDMMRRRR'::text)",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'codigo'
                        ]
                    ),
                    new Column(
                        'nome',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'data_ref'
                        ]
                    ),
                    new Column(
                        'cpf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 11,
                            'after' => 'nome'
                        ]
                    ),
                    new Column(
                        'bonus',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 15,
                            'scale' => 2,
                            'after' => 'cpf'
                        ]
                    ),
                    new Column(
                        'exp',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "N",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'bonus'
                        ]
                    ),
                    new Column(
                        'tipo_meta',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'exp'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'tipo_meta'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "to_date('01010001'::text, 'DDMMRRRR'::text)",
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
                        'substituto',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 8,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'atualizado',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "N",
                            'size' => 1,
                            'after' => 'substituto'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('tabcom38_index00', ['recnum'], null),
                    new Index('tabcom38_index01', ['codigo', 'data_ref', 'tipo_meta'], null),
                    new Index('tabcom38_index02', ['data_ref'], null)
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
