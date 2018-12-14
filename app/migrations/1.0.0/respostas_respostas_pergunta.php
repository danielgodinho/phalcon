<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class RespostasRespostasPerguntaMigration_100
 */
class RespostasRespostasPerguntaMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('respostas_respostas_pergunta', [
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
                        'perguntas_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'respostas_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('respostas_respostas_perg_respostas_id_perguntas_i_4bd6be6a_uniq', ['respostas_id', 'perguntas_id'], null),
                    new Index('respostas_respostas_pergunta_perguntas_id_05c533f0', ['perguntas_id'], null),
                    new Index('respostas_respostas_pergunta_pkey', ['id'], null),
                    new Index('respostas_respostas_pergunta_respostas_id_bb2f6373', ['respostas_id'], null)
                ],
                'references' => [
                    new Reference(
                        'respostas_respostas__perguntas_id_05c533f0_fk_perguntas',
                        [
                            'referencedTable' => 'perguntas_perguntas',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['perguntas_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => '',
                            'onDelete' => ''
                        ]
                    ),
                    new Reference(
                        'respostas_respostas__respostas_id_bb2f6373_fk_respostas',
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
