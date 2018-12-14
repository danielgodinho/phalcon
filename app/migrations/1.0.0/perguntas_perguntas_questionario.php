<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class PerguntasPerguntasQuestionarioMigration_100
 */
class PerguntasPerguntasQuestionarioMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('perguntas_perguntas_questionario', [
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
                        'questionarios_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'perguntas_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('perguntas_perguntas_ques_perguntas_id_questionari_59dcc22f_uniq', ['perguntas_id', 'questionarios_id'], null),
                    new Index('perguntas_perguntas_questionario_perguntas_id_add646a7', ['perguntas_id'], null),
                    new Index('perguntas_perguntas_questionario_pkey', ['id'], null),
                    new Index('perguntas_perguntas_questionario_questionarios_id_920d06af', ['questionarios_id'], null)
                ],
                'references' => [
                    new Reference(
                        'perguntas_perguntas__questionarios_id_920d06af_fk_questiona',
                        [
                            'referencedTable' => 'questionarios_questionarios',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['questionarios_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => '',
                            'onDelete' => ''
                        ]
                    ),
                    new Reference(
                        'perguntas_perguntas__perguntas_id_add646a7_fk_perguntas',
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
