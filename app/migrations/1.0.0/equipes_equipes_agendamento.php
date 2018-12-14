<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class EquipesEquipesAgendamentoMigration_100
 */
class EquipesEquipesAgendamentoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('equipes_equipes_agendamento', [
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
                        'equipes_id',
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
                            'after' => 'equipes_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('equipes_equipes_agendame_equipes_id_agendamentos__22ac0b4a_uniq', ['equipes_id', 'agendamentos_id'], null),
                    new Index('equipes_equipes_agendamento_agendamentos_id_61c71b8e', ['agendamentos_id'], null),
                    new Index('equipes_equipes_agendamento_equipes_id_9b0b104d', ['equipes_id'], null),
                    new Index('equipes_equipes_agendamento_pkey', ['id'], null)
                ],
                'references' => [
                    new Reference(
                        'equipes_equipes_agen_agendamentos_id_61c71b8e_fk_agendamen',
                        [
                            'referencedTable' => 'agendamentos_agendamentos',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['agendamentos_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => '',
                            'onDelete' => ''
                        ]
                    ),
                    new Reference(
                        'equipes_equipes_agen_equipes_id_9b0b104d_fk_equipes_e',
                        [
                            'referencedTable' => 'equipes_equipes',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['equipes_id'],
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
