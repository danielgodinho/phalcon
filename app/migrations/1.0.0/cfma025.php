<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Cfma025Migration_100
 */
class Cfma025Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('cfma025', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 28,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_espera',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'qtd_espera',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 4,
                            'after' => 'id_espera'
                        ]
                    ),
                    new Column(
                        'situacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 2,
                            'after' => 'qtd_espera'
                        ]
                    ),
                    new Column(
                        'id_usuario',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 10,
                            'after' => 'situacao'
                        ]
                    ),
                    new Column(
                        'codigo_barra',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'id_usuario'
                        ]
                    ),
                    new Column(
                        'id_produto',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 14,
                            'after' => 'codigo_barra'
                        ]
                    ),
                    new Column(
                        'id_palete',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 10,
                            'after' => 'id_produto'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 15,
                            'after' => 'id_palete'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'log_data'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('cfma025_index00', ['recnum'], null),
                    new Index('cfma025_index01', ['id_espera'], null)
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
