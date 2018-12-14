<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Sisa006Migration_100
 */
class Sisa006Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('sisa006', [
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
                        'codigo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'codigo'
                        ]
                    ),
                    new Column(
                        'data_invd',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'data'
                        ]
                    ),
                    new Column(
                        'tipo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'data_invd'
                        ]
                    ),
                    new Column(
                        'descricao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'tipo'
                        ]
                    ),
                    new Column(
                        'caf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'descricao'
                        ]
                    ),
                    new Column(
                        'cafil',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'caf'
                        ]
                    ),
                    new Column(
                        'idreg',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'cafil'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('sisa006_index00', ['recnum'], null),
                    new Index('sisa006_index01', ['data_invd', 'codigo'], null),
                    new Index('sisa006_index02', ['data_invd', 'codigo', 'tipo'], null),
                    new Index('sisa006_index03', ['recnum', 'caf'], null)
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
