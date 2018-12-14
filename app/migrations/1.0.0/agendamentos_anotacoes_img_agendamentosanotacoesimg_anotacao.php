<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class AgendamentosAnotacoesImgAgendamentosanotacoesimgAnotacaoMigration_100
 */
class AgendamentosAnotacoesImgAgendamentosanotacoesimgAnotacaoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('agendamentos_anotacoes_img_agendamentosanotacoesimg_anotacao', [
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
                        'agendamentosanotacoesimg_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'agendamentosanotacoes_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'agendamentosanotacoesimg_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('agendamentos_anotacoes_i_agendamentosanotacoesimg_efa0fbc7_uniq', ['agendamentosanotacoesimg_id', 'agendamentosanotacoes_id'], null),
                    new Index('agendamentos_anotacoes_img_agendamentosanotacoes_id_fce417eb', ['agendamentosanotacoes_id'], null),
                    new Index('agendamentos_anotacoes_img_agendamentosanotacoesimg_anotac_pkey', ['id'], null),
                    new Index('agendamentos_anotacoes_img_agendamentosanotacoesimg_i_342b93b3', ['agendamentosanotacoesimg_id'], null)
                ],
                'references' => [
                    new Reference(
                        'agendamentos_anotaco_agendamentosanotacoe_fce417eb_fk_agendamen',
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
                        'agendamentos_anotaco_agendamentosanotacoe_342b93b3_fk_agendamen',
                        [
                            'referencedTable' => 'agendamentos_anotacoes_img_agendamentosanotacoesimg',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['agendamentosanotacoesimg_id'],
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
