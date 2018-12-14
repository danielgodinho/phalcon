<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class FilialMigration_100
 */
class FilialMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('filial', [
                'columns' => [
                    new Column(
                        'codigo_f',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'notNull' => true,
                            'size' => 1,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'nome_f',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'codigo_f'
                        ]
                    ),
                    new Column(
                        'cidade_f',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nome_f'
                        ]
                    ),
                    new Column(
                        'codigo_pais',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cidade_f'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('filial_pk', ['codigo_f'], null)
                ],
                'references' => [
                    new Reference(
                        'cidade_pais_filial_fk',
                        [
                            'referencedTable' => 'cidade_pais',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['codigo_pais'],
                            'referencedColumns' => ['codigo_pais'],
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
