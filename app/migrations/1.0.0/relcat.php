<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class RelcatMigration_100
 */
class RelcatMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('relcat', [
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
                        'campo1_ind',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'campo2_ind',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'campo1_ind'
                        ]
                    ),
                    new Column(
                        'campo3_ind',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'campo2_ind'
                        ]
                    ),
                    new Column(
                        'campo4_ind',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'campo3_ind'
                        ]
                    ),
                    new Column(
                        'campo5_ind',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'campo4_ind'
                        ]
                    ),
                    new Column(
                        'campo6_ind',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'campo5_ind'
                        ]
                    ),
                    new Column(
                        'campo1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'campo6_ind'
                        ]
                    ),
                    new Column(
                        'campo2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'campo1'
                        ]
                    ),
                    new Column(
                        'campo3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'campo2'
                        ]
                    ),
                    new Column(
                        'campo4',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'campo3'
                        ]
                    ),
                    new Column(
                        'campo5',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'campo4'
                        ]
                    ),
                    new Column(
                        'campo6',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'campo5'
                        ]
                    ),
                    new Column(
                        'campo8',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'campo6'
                        ]
                    ),
                    new Column(
                        'valor1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'campo8'
                        ]
                    ),
                    new Column(
                        'valor1_invd',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'valor1'
                        ]
                    ),
                    new Column(
                        'valor2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'valor1_invd'
                        ]
                    ),
                    new Column(
                        'valor3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'valor2'
                        ]
                    ),
                    new Column(
                        'valor4',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'valor3'
                        ]
                    ),
                    new Column(
                        'valor5',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'valor4'
                        ]
                    ),
                    new Column(
                        'valor6',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'valor5'
                        ]
                    ),
                    new Column(
                        'valor7',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'valor6'
                        ]
                    ),
                    new Column(
                        'valor8',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'valor7'
                        ]
                    ),
                    new Column(
                        'valor9',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 4,
                            'after' => 'valor8'
                        ]
                    ),
                    new Column(
                        'valor10',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 4,
                            'after' => 'valor9'
                        ]
                    ),
                    new Column(
                        'valor10_invd',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 4,
                            'after' => 'valor10'
                        ]
                    ),
                    new Column(
                        'titulo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'valor10_invd'
                        ]
                    ),
                    new Column(
                        'codigo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'titulo'
                        ]
                    ),
                    new Column(
                        'programa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'codigo'
                        ]
                    ),
                    new Column(
                        'data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'programa'
                        ]
                    ),
                    new Column(
                        'data1',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'data'
                        ]
                    ),
                    new Column(
                        'data2',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'data1'
                        ]
                    ),
                    new Column(
                        'inteiro1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'data2'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('relcat_index00', ['recnum'], null),
                    new Index('relcat_index01', ['campo1_ind', 'campo3_ind', 'campo4_ind', 'campo5_ind', 'campo6_ind', 'programa', 'campo2_ind'], null),
                    new Index('relcat_index02', ['recnum', 'codigo', 'programa'], null),
                    new Index('relcat_index03', ['campo1_ind', 'recnum', 'campo2_ind', 'programa', 'data'], null),
                    new Index('relcat_index04', ['recnum', 'valor1_invd'], null),
                    new Index('relcat_index05', ['recnum', 'codigo', 'programa'], null),
                    new Index('relcat_index06', ['recnum', 'valor10_invd', 'programa', 'inteiro1'], null)
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
