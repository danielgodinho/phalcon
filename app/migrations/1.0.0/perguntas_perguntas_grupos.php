<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class PerguntasPerguntasGruposMigration_100
 */
class PerguntasPerguntasGruposMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('perguntas_perguntas_grupos', [
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
                        'perguntas_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'grupos_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'perguntas_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('perguntas_perguntas_grupos_grupos_id_dd419fe2', ['grupos_id'], null),
                    new Index('perguntas_perguntas_grupos_perguntas_id_44e9059f', ['perguntas_id'], null),
                    new Index('perguntas_perguntas_grupos_perguntas_id_grupos_id_1be68839_uniq', ['perguntas_id', 'grupos_id'], null),
                    new Index('perguntas_perguntas_grupos_pkey', ['id'], null)
                ],
                'references' => [
                    new Reference(
                        'perguntas_perguntas__grupos_id_dd419fe2_fk_grupos_gr',
                        [
                            'referencedTable' => 'grupos_grupos',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['grupos_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => '',
                            'onDelete' => ''
                        ]
                    ),
                    new Reference(
                        'perguntas_perguntas__perguntas_id_44e9059f_fk_perguntas',
                        [
                            'referencedTable' => 'perguntas_perguntas',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['perguntas_id'],
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
