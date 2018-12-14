<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class CatalogoMigration_100
 */
class CatalogoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('catalogo', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 1,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'montadora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'veiculo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'montadora'
                        ]
                    ),
                    new Column(
                        'versao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'veiculo'
                        ]
                    ),
                    new Column(
                        'construcao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'versao'
                        ]
                    ),
                    new Column(
                        'motor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'construcao'
                        ]
                    ),
                    new Column(
                        'combustivel',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'motor'
                        ]
                    ),
                    new Column(
                        'grupo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'combustivel'
                        ]
                    ),
                    new Column(
                        'sub_grupo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'grupo'
                        ]
                    ),
                    new Column(
                        'nivel1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'sub_grupo'
                        ]
                    ),
                    new Column(
                        'nivel2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'nivel1'
                        ]
                    ),
                    new Column(
                        'nivel3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'nivel2'
                        ]
                    ),
                    new Column(
                        'nivel4',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'nivel3'
                        ]
                    ),
                    new Column(
                        'anoi',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'nivel4'
                        ]
                    ),
                    new Column(
                        'mesi',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'anoi'
                        ]
                    ),
                    new Column(
                        'anof',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'mesi'
                        ]
                    ),
                    new Column(
                        'mesf',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'anof'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('catalogo_index00', ['recnum'], null),
                    new Index('catalogo_index01', ['recnum', 'montadora', 'veiculo'], null),
                    new Index('catalogo_index02', ['recnum', 'veiculo', 'versao'], null),
                    new Index('catalogo_index03', ['construcao', 'recnum', 'veiculo'], null),
                    new Index('catalogo_index04', ['recnum', 'veiculo', 'motor'], null),
                    new Index('catalogo_index05', ['recnum', 'veiculo', 'combustivel'], null),
                    new Index('catalogo_index06', ['recnum', 'grupo', 'sub_grupo'], null),
                    new Index('catalogo_index07', ['nivel1', 'recnum', 'sub_grupo'], null),
                    new Index('catalogo_index08', ['recnum', 'sub_grupo', 'nivel2'], null),
                    new Index('catalogo_index09', ['recnum', 'sub_grupo', 'nivel3'], null),
                    new Index('catalogo_index10', ['recnum', 'sub_grupo', 'nivel4'], null),
                    new Index('catalogo_index15', ['montadora', 'veiculo', 'versao', 'construcao', 'motor', 'combustivel', 'grupo', 'sub_grupo', 'nivel1', 'nivel2', 'nivel3', 'nivel4'], null)
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
