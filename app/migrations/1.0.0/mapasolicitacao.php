<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class MapasolicitacaoMigration_100
 */
class MapasolicitacaoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('mapasolicitacao', [
                'columns' => [
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'codigo',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 1,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'vendedor',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'codigo'
                        ]
                    ),
                    new Column(
                        'tipo',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'vendedor'
                        ]
                    ),
                    new Column(
                        'turnoconferencia',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'tipo'
                        ]
                    ),
                    new Column(
                        'data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'turnoconferencia'
                        ]
                    ),
                    new Column(
                        'orcamento',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'data'
                        ]
                    ),
                    new Column(
                        'filialnota',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'orcamento'
                        ]
                    ),
                    new Column(
                        'nota',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'filialnota'
                        ]
                    ),
                    new Column(
                        'serie',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'nota'
                        ]
                    ),
                    new Column(
                        'status',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'serie'
                        ]
                    ),
                    new Column(
                        'impresso',
                        [
                            'type' => Column::TYPE_BOOLEAN,
                            'size' => 1,
                            'after' => 'status'
                        ]
                    ),
                    new Column(
                        'reimprimir',
                        [
                            'type' => Column::TYPE_BOOLEAN,
                            'size' => 1,
                            'after' => 'impresso'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'reimprimir'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'log_data'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('mapasolicitacao_pk', ['filial', 'codigo'], null)
                ],
                'references' => [
                    new Reference(
                        'fk_mapasolicitacao_vendedor',
                        [
                            'referencedTable' => 'ags011',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['vendedor'],
                            'referencedColumns' => ['codigo'],
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
