<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class TblogMigration_100
 */
class TblogMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('tbLog', [
                'columns' => [
                    new Column(
                        'ID',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 1,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'Time',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'ID'
                        ]
                    ),
                    new Column(
                        'IP',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'Time'
                        ]
                    ),
                    new Column(
                        'Funcao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'IP'
                        ]
                    ),
                    new Column(
                        'Resultado',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'Funcao'
                        ]
                    ),
                    new Column(
                        'Produto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'Resultado'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('tbLog_pkey', ['ID'], null)
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
