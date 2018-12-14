<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class RespostasRespostasAgendamentoMigration_100
 */
class RespostasRespostasAgendamentoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('respostas_respostas_agendamento', [
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
                        'agendamentos_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'respostas_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('respostas_respostas_agen_respostas_id_agendamento_5960c58a_uniq', ['respostas_id', 'agendamentos_id'], null),
                    new Index('respostas_respostas_agendamento_agendamentos_id_d90cf3d6', ['agendamentos_id'], null),
                    new Index('respostas_respostas_agendamento_pkey', ['id'], null),
                    new Index('respostas_respostas_agendamento_respostas_id_2feac47a', ['respostas_id'], null)
                ],
                'references' => [
                    new Reference(
                        'respostas_respostas__respostas_id_2feac47a_fk_respostas',
                        [
                            'referencedTable' => 'respostas_respostas',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['respostas_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => '',
                            'onDelete' => ''
                        ]
                    ),
                    new Reference(
                        'respostas_respostas__agendamentos_id_d90cf3d6_fk_agendamen',
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
