<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Cfma007Migration_100
 */
class Cfma007Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('cfma007', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "nextval(('"public"."cfma007_dfseq"'::text)::regclass)",
                            'notNull' => true,
                            'size' => 28,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_ordem',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'numero_pedido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'id_ordem'
                        ]
                    ),
                    new Column(
                        'id_ordem_pedido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 10,
                            'after' => 'numero_pedido'
                        ]
                    ),
                    new Column(
                        'filial_destino',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'size' => 3,
                            'after' => 'id_ordem_pedido'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'filial_destino'
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
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'filial_cd',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'log_data'
                        ]
                    ),
                    new Column(
                        'filial_origem',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'filial_cd'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('cfma007_index00', ['recnum'], null),
                    new Index('cfma007_index01', ['id_ordem', 'numero_pedido'], null),
                    new Index('cfma007_index02', ['id_ordem_pedido'], null)
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
