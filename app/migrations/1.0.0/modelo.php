<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class ModeloMigration_100
 */
class ModeloMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('modelo', [
                'columns' => [
                    new Column(
                        'codigo_mo',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'notNull' => true,
                            'size' => 1,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'tipo_mo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'codigo_mo'
                        ]
                    ),
                    new Column(
                        'carro_mo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'tipo_mo'
                        ]
                    ),
                    new Column(
                        'cidade_mo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'carro_mo'
                        ]
                    ),
                    new Column(
                        'nome_mo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cidade_mo'
                        ]
                    ),
                    new Column(
                        'codigo_m',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nome_mo'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('modelo_pk', ['codigo_mo'], null)
                ],
                'references' => [
                    new Reference(
                        'maraca_modelo_fk',
                        [
                            'referencedTable' => 'marca',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['codigo_m'],
                            'referencedColumns' => ['codigo_m'],
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
