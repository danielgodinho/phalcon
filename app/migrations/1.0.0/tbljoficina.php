<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class TbljoficinaMigration_100
 */
class TbljoficinaMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('tbljoficina', [
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
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'oficina',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 3,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'dt_ref',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'oficina'
                        ]
                    ),
                    new Column(
                        'ofic_imp',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 3,
                            'after' => 'dt_ref'
                        ]
                    ),
                    new Column(
                        'ativo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "N",
                            'size' => 1,
                            'after' => 'ofic_imp'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('tbljoficina_index00', ['recnum'], null),
                    new Index('tbljoficina_index01', ['filial'], null)
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
