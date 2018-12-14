<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class RespostasRespostasLegendaMigration_100
 */
class RespostasRespostasLegendaMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('respostas_respostas_legenda', [
                'columns' => [
                    new Column(
                        'id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 32,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'respostas_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'respostaslegendas_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'respostas_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('respostas_respostas_lege_respostas_id_respostasle_880710c0_uniq', ['respostas_id', 'respostaslegendas_id'], null),
                    new Index('respostas_respostas_legenda_pkey', ['id'], null),
                    new Index('respostas_respostas_legenda_respostas_id_3a77f736', ['respostas_id'], null),
                    new Index('respostas_respostas_legenda_respostaslegendas_id_accd0ac6', ['respostaslegendas_id'], null)
                ],
                'references' => [
                    new Reference(
                        'respostas_respostas__respostaslegendas_id_accd0ac6_fk_respostas',
                        [
                            'referencedTable' => 'respostas_legendas_respostaslegendas',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['respostaslegendas_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => '',
                            'onDelete' => ''
                        ]
                    ),
                    new Reference(
                        'respostas_respostas__respostas_id_3a77f736_fk_respostas',
                        [
                            'referencedTable' => 'respostas_respostas',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['respostas_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => '',
                            'onDelete' => ''
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
