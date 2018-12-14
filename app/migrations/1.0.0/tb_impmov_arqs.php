<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class TbImpmovArqsMigration_100
 */
class TbImpmovArqsMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('tb_impmov_arqs', [
                'columns' => [
                    new Column(
                        'arquivo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 400,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'data',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'arquivo'
                        ]
                    ),
                    new Column(
                        'hora',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 10,
                            'after' => 'data'
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
