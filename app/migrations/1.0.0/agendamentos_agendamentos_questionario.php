<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class AgendamentosAgendamentosQuestionarioMigration_100
 */
class AgendamentosAgendamentosQuestionarioMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('agendamentos_agendamentos_questionario', [
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
                        'agendamentos_id',
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
                            'after' => 'agendamentos_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('agendamentos_agendamento_agendamentos_id_question_80b5100f_uniq', ['agendamentos_id', 'questionarios_id'], null),
                    new Index('agendamentos_agendamentos__questionarios_id_6e1af641', ['questionarios_id'], null),
                    new Index('agendamentos_agendamentos_questionario_agendamentos_id_2dc4e988', ['agendamentos_id'], null),
                    new Index('agendamentos_agendamentos_questionario_pkey', ['id'], null)
                ],
                'references' => [
                    new Reference(
                        'agendamentos_agendam_questionarios_id_6e1af641_fk_questiona',
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
                        'agendamentos_agendam_agendamentos_id_2dc4e988_fk_agendamen',
                        [
                            'referencedTable' => 'agendamentos_agendamentos',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['agendamentos_id'],
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
