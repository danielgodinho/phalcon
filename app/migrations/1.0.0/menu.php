<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class MenuMigration_100
 */
class MenuMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('menu', [
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
                        'header1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'header2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'header1'
                        ]
                    ),
                    new Column(
                        'default',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'header2'
                        ]
                    ),
                    new Column(
                        'pr1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'default'
                        ]
                    ),
                    new Column(
                        'ac1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pr1'
                        ]
                    ),
                    new Column(
                        'pw1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ac1'
                        ]
                    ),
                    new Column(
                        'pr2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pw1'
                        ]
                    ),
                    new Column(
                        'ac2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pr2'
                        ]
                    ),
                    new Column(
                        'pw2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ac2'
                        ]
                    ),
                    new Column(
                        'pr3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pw2'
                        ]
                    ),
                    new Column(
                        'ac3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pr3'
                        ]
                    ),
                    new Column(
                        'pw3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ac3'
                        ]
                    ),
                    new Column(
                        'pr4',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pw3'
                        ]
                    ),
                    new Column(
                        'ac4',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pr4'
                        ]
                    ),
                    new Column(
                        'pw4',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ac4'
                        ]
                    ),
                    new Column(
                        'pr5',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pw4'
                        ]
                    ),
                    new Column(
                        'ac5',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pr5'
                        ]
                    ),
                    new Column(
                        'pw5',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ac5'
                        ]
                    ),
                    new Column(
                        'pr6',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pw5'
                        ]
                    ),
                    new Column(
                        'ac6',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pr6'
                        ]
                    ),
                    new Column(
                        'pw6',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ac6'
                        ]
                    ),
                    new Column(
                        'pr7',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pw6'
                        ]
                    ),
                    new Column(
                        'ac7',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pr7'
                        ]
                    ),
                    new Column(
                        'pw7',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ac7'
                        ]
                    ),
                    new Column(
                        'pr8',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pw7'
                        ]
                    ),
                    new Column(
                        'ac8',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pr8'
                        ]
                    ),
                    new Column(
                        'pw8',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ac8'
                        ]
                    ),
                    new Column(
                        'pr9',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pw8'
                        ]
                    ),
                    new Column(
                        'ac9',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'pr9'
                        ]
                    ),
                    new Column(
                        'pw9',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ac9'
                        ]
                    ),
                    new Column(
                        'qa1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 52,
                            'after' => 'pw9'
                        ]
                    ),
                    new Column(
                        'qb1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 52,
                            'after' => 'qa1'
                        ]
                    ),
                    new Column(
                        'qa2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 52,
                            'after' => 'qb1'
                        ]
                    ),
                    new Column(
                        'qb2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 52,
                            'after' => 'qa2'
                        ]
                    ),
                    new Column(
                        'qa3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 52,
                            'after' => 'qb2'
                        ]
                    ),
                    new Column(
                        'qb3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 52,
                            'after' => 'qa3'
                        ]
                    ),
                    new Column(
                        'qa4',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 52,
                            'after' => 'qb3'
                        ]
                    ),
                    new Column(
                        'qb4',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 52,
                            'after' => 'qa4'
                        ]
                    ),
                    new Column(
                        'qa5',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 52,
                            'after' => 'qb4'
                        ]
                    ),
                    new Column(
                        'qb5',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 52,
                            'after' => 'qa5'
                        ]
                    ),
                    new Column(
                        'qa6',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 52,
                            'after' => 'qb5'
                        ]
                    ),
                    new Column(
                        'qb6',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 52,
                            'after' => 'qa6'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('menu_index00', ['recnum'], null)
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
