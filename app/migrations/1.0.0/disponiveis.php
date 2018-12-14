<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class DisponiveisMigration_100
 */
class DisponiveisMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('disponiveis', [
                'columns' => [
                    new Column(
                        'codigo_diponivel',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'notNull' => true,
                            'size' => 1,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'codigo_mo',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'codigo_diponivel'
                        ]
                    ),
                    new Column(
                        'codigo_f',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'codigo_mo'
                        ]
                    ),
                    new Column(
                        'qtde',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'codigo_f'
                        ]
                    ),
                    new Column(
                        'data',
                        [
                            'type' => Column::TYPE_DATE,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'qtde'
                        ]
                    ),
                    new Column(
                        'filial_codigo_f',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'data'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('disponiveis_pk', ['codigo_diponivel'], null)
                ],
                'references' => [
                    new Reference(
                        'modelo_disponiveis_fk',
                        [
                            'referencedTable' => 'modelo',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['codigo_mo'],
                            'referencedColumns' => ['codigo_mo'],
                            'onUpdate' => '',
                            'onDelete' => ''
                        ]
                    ),
                    new Reference(
                        'filial_disponiveis_fk',
                        [
                            'referencedTable' => 'filial',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['filial_codigo_f'],
                            'referencedColumns' => ['codigo_f'],
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
