<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class AgendamentosAnotacoesAgendamentosanotacoesAgendamentoMigration_100
 */
class AgendamentosAnotacoesAgendamentosanotacoesAgendamentoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('agendamentos_anotacoes_agendamentosanotacoes_agendamento', [
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
                        'agendamentosanotacoes_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'agendamentos_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'agendamentosanotacoes_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('agendamentos_anotacoes_a_agendamentosanotacoes_id_9ba493b7_uniq', ['agendamentosanotacoes_id', 'agendamentos_id'], null),
                    new Index('agendamentos_anotacoes_age_agendamentos_id_4a5afd93', ['agendamentos_id'], null),
                    new Index('agendamentos_anotacoes_age_agendamentosanotacoes_id_8044385c', ['agendamentosanotacoes_id'], null),
                    new Index('agendamentos_anotacoes_agendamentosanotacoes_agendamento_pkey', ['id'], null)
                ],
                'references' => [
                    new Reference(
                        'agendamentos_anotaco_agendamentosanotacoe_8044385c_fk_agendamen',
                        [
                            'referencedTable' => 'agendamentos_anotacoes_agendamentosanotacoes',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['agendamentosanotacoes_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => '',
                            'onDelete' => ''
                        ]
                    ),
                    new Reference(
                        'agendamentos_anotaco_agendamentos_id_4a5afd93_fk_agendamen',
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
