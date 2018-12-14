<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class PedsenhaMigration_100
 */
class PedsenhaMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('pedsenha', [
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
                        'filial',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'codigo',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'filial'
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
                        'numero',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'data'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('pedsenha_index00', ['recnum'], null),
                    new Index('pedsenha_index01', ['filial', 'codigo'], null),
                    new Index('pedsenha_index02', ['filial', 'data'], null)
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
