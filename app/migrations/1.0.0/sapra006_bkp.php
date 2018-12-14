<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Sapra006BkpMigration_100
 */
class Sapra006BkpMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('sapra006_bkp', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'size' => 1,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'usuario',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 12,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'programa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 12,
                            'after' => 'usuario'
                        ]
                    ),
                    new Column(
                        'menu',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 6,
                            'after' => 'programa'
                        ]
                    ),
                    new Column(
                        'ordem',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 6,
                            'after' => 'menu'
                        ]
                    ),
                    new Column(
                        'tipo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'ordem'
                        ]
                    ),
                    new Column(
                        'vezes',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 10,
                            'after' => 'tipo'
                        ]
                    ),
                    new Column(
                        'tempo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 10,
                            'after' => 'vezes'
                        ]
                    ),
                    new Column(
                        'usuario_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'tempo'
                        ]
                    ),
                    new Column(
                        'usuario_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 4,
                            'after' => 'usuario_data'
                        ]
                    ),
                    new Column(
                        'usuario_tempo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 10,
                            'after' => 'usuario_hora'
                        ]
                    ),
                    new Column(
                        'caf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'usuario_tempo'
                        ]
                    ),
                    new Column(
                        'cafil',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 2,
                            'after' => 'caf'
                        ]
                    ),
                    new Column(
                        'id_reg',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 12,
                            'after' => 'cafil'
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
