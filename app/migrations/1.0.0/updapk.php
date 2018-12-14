<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class UpdapkMigration_100
 */
class UpdapkMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('updapk', [
                'columns' => [
                    new Column(
                        'id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 32,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'data',
                        [
                            'type' => Column::TYPE_DATE,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'apptype',
                        [
                            'type' => Column::TYPE_CHAR,
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'data'
                        ]
                    ),
                    new Column(
                        'versao',
                        [
                            'type' => Column::TYPE_CHAR,
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'apptype'
                        ]
                    ),
                    new Column(
                        'path',
                        [
                            'type' => Column::TYPE_CHAR,
                            'notNull' => true,
                            'size' => 200,
                            'after' => 'versao'
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
