<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Mmt222Migration_100
 */
class Mmt222Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('mmt222', [
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
                        'data_movimento',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'cd_produto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 9,
                            'after' => 'data_movimento'
                        ]
                    ),
                    new Column(
                        'cd_componente',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 9,
                            'after' => 'cd_produto'
                        ]
                    ),
                    new Column(
                        'usuario',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'cd_componente'
                        ]
                    ),
                    new Column(
                        'tipo_processo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'usuario'
                        ]
                    ),
                    new Column(
                        'tipo_movimento',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'tipo_processo'
                        ]
                    ),
                    new Column(
                        'hora',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'tipo_movimento'
                        ]
                    ),
                    new Column(
                        'minuto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'hora'
                        ]
                    ),
                    new Column(
                        'segundo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'minuto'
                        ]
                    ),
                    new Column(
                        'qtd_gramas',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'segundo'
                        ]
                    ),
                    new Column(
                        'qtd_ml',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'qtd_gramas'
                        ]
                    ),
                    new Column(
                        'qtd_pecas',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'qtd_ml'
                        ]
                    ),
                    new Column(
                        'num_nf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'qtd_pecas'
                        ]
                    ),
                    new Column(
                        'val_nf',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'num_nf'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('mmt222_index00', ['recnum'], null),
                    new Index('mmt222_index01', ['cd_produto', 'cd_componente', 'hora', 'minuto', 'segundo', 'data_movimento'], null),
                    new Index('mmt222_index02', ['data_movimento', 'cd_componente', 'hora', 'minuto', 'segundo'], null)
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
