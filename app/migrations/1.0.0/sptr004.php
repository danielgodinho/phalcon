<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Sptr004Migration_100
 */
class Sptr004Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('sptr004', [
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
                        'pedido_local',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'filial_pedido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'pedido_local'
                        ]
                    ),
                    new Column(
                        'controle_transferencia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'filial_pedido'
                        ]
                    ),
                    new Column(
                        'controle_separacao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'controle_transferencia'
                        ]
                    ),
                    new Column(
                        'chave_nfe',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 44,
                            'after' => 'controle_separacao'
                        ]
                    ),
                    new Column(
                        'id_transportador',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "1",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'chave_nfe'
                        ]
                    ),
                    new Column(
                        'peso',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'id_transportador'
                        ]
                    ),
                    new Column(
                        'volumes',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'peso'
                        ]
                    ),
                    new Column(
                        'flag_env',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "N",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'volumes'
                        ]
                    ),
                    new Column(
                        'flag_sep',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "N",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'flag_env'
                        ]
                    ),
                    new Column(
                        'flag_nf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "N",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'flag_sep'
                        ]
                    ),
                    new Column(
                        'flag_sd',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "N",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'flag_nf'
                        ]
                    ),
                    new Column(
                        'flag_ent',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "N",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'flag_sd'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'flag_ent'
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
                        'status',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'log_hora'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('sptr004_index00', ['recnum'], null),
                    new Index('sptr004_index01', ['pedido_local', 'filial_pedido'], null)
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
