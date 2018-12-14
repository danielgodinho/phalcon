<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Auxa113Migration_100
 */
class Auxa113Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('auxa113', [
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
                        'tabela',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'tabela'
                        ]
                    ),
                    new Column(
                        'hora',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'data'
                        ]
                    ),
                    new Column(
                        'processo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'hora'
                        ]
                    ),
                    new Column(
                        'tipo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'processo'
                        ]
                    ),
                    new Column(
                        'campo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'tipo'
                        ]
                    ),
                    new Column(
                        'sessao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'campo'
                        ]
                    ),
                    new Column(
                        'programa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 48,
                            'after' => 'sessao'
                        ]
                    ),
                    new Column(
                        'usuario_bd',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'programa'
                        ]
                    ),
                    new Column(
                        'usuario_so',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'usuario_bd'
                        ]
                    ),
                    new Column(
                        'computador',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 64,
                            'after' => 'usuario_so'
                        ]
                    ),
                    new Column(
                        'i_reg_upd1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 35,
                            'after' => 'computador'
                        ]
                    ),
                    new Column(
                        'i_reg_upd2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 35,
                            'after' => 'i_reg_upd1'
                        ]
                    ),
                    new Column(
                        'i_reg_upd3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 35,
                            'after' => 'i_reg_upd2'
                        ]
                    ),
                    new Column(
                        'valor_old',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 35,
                            'after' => 'i_reg_upd3'
                        ]
                    ),
                    new Column(
                        'valor_new',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 35,
                            'after' => 'valor_old'
                        ]
                    ),
                    new Column(
                        'i_reg_del1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 35,
                            'after' => 'valor_new'
                        ]
                    ),
                    new Column(
                        'i_reg_del2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 35,
                            'after' => 'i_reg_del1'
                        ]
                    ),
                    new Column(
                        'i_reg_del3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 35,
                            'after' => 'i_reg_del2'
                        ]
                    ),
                    new Column(
                        'i_reg_ins1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 35,
                            'after' => 'i_reg_del3'
                        ]
                    ),
                    new Column(
                        'i_reg_ins2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 35,
                            'after' => 'i_reg_ins1'
                        ]
                    ),
                    new Column(
                        'i_reg_ins3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 35,
                            'after' => 'i_reg_ins2'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('auxa113_index00', ['recnum'], null),
                    new Index('auxa113_index01', ['tabela', 'recnum', 'data', 'sessao'], null),
                    new Index('auxa113_index02', ['tabela', 'recnum', 'data', 'processo'], null),
                    new Index('auxa113_index03', ['recnum', 'tabela', 'data', 'tipo'], null)
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
