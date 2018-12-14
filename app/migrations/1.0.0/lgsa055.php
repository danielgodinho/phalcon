<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Lgsa055Migration_100
 */
class Lgsa055Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('lgsa055', [
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
                        'field_1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'field_2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'field_1'
                        ]
                    ),
                    new Column(
                        'field_3',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'field_2'
                        ]
                    ),
                    new Column(
                        'field_4',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'field_3'
                        ]
                    ),
                    new Column(
                        'field_5',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 7,
                            'after' => 'field_4'
                        ]
                    ),
                    new Column(
                        'field_6',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 54,
                            'after' => 'field_5'
                        ]
                    ),
                    new Column(
                        'field_7',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'field_6'
                        ]
                    ),
                    new Column(
                        'field_8',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 40,
                            'after' => 'field_7'
                        ]
                    ),
                    new Column(
                        'field_9',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 40,
                            'after' => 'field_8'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('lgsa055_index00', ['recnum'], null),
                    new Index('lgsa055_index01', ['field_6'], null),
                    new Index('lgsa055_index02', ['recnum', 'field_6', 'field_8'], null)
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
