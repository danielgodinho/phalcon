<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class TreinaprogressoMigration_100
 */
class TreinaprogressoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('treinaprogresso', [
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
                        'id_usuario',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'id_modulo_item',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'id_usuario'
                        ]
                    ),
                    new Column(
                        'status',
                        [
                            'type' => Column::TYPE_TEXT,
                            'default' => "A",
                            'size' => 1,
                            'after' => 'id_modulo_item'
                        ]
                    ),
                    new Column(
                        'dataini',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'status'
                        ]
                    ),
                    new Column(
                        'datafim',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'dataini'
                        ]
                    ),
                    new Column(
                        'indice',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'datafim'
                        ]
                    ),
                    new Column(
                        'pontuacao',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'indice'
                        ]
                    ),
                    new Column(
                        'tentativas',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'pontuacao'
                        ]
                    ),
                    new Column(
                        'progresso',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'tentativas'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'progresso'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
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
