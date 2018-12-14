<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class TbImpmovErrosMigration_100
 */
class TbImpmovErrosMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('tb_impmov_erros', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 32,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'sql',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'arquivo',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'sql'
                        ]
                    ),
                    new Column(
                        'reaplicado',
                        [
                            'type' => Column::TYPE_CHAR,
                            'default' => "N",
                            'size' => 1,
                            'after' => 'arquivo'
                        ]
                    ),
                    new Column(
                        'erro',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'reaplicado'
                        ]
                    ),
                    new Column(
                        'data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "('now'::text)",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'erro'
                        ]
                    ),
                    new Column(
                        'hora',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "('now'::text)",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'data'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('tb_impmov_erros_pkey', ['recnum'], null)
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
