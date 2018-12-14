<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Mmt233Migration_100
 */
class Mmt233Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('mmt233', [
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
                        'cd_tipo_formula',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'ds_tipo_for_por',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'cd_tipo_formula'
                        ]
                    ),
                    new Column(
                        'ds_tipo_for_esp',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'ds_tipo_for_por'
                        ]
                    ),
                    new Column(
                        'ds_tipo_for_ing',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'ds_tipo_for_esp'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('mmt233_index00', ['recnum'], null),
                    new Index('mmt233_index01', ['cd_tipo_formula'], null)
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
