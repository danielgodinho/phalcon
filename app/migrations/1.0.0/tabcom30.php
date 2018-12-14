<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Tabcom30Migration_100
 */
class Tabcom30Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('tabcom30', [
                'columns' => [
                    new Column(
                        'codcoligada',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 5,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'chapa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 16,
                            'after' => 'codcoligada'
                        ]
                    ),
                    new Column(
                        'codcomissao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'chapa'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 10,
                            'after' => 'codcomissao'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_hora',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 8,
                            'after' => 'log_data'
                        ]
                    ),
                    new Column(
                        'status',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "S",
                            'size' => 1,
                            'after' => 'log_hora'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('tabcom30_index01', ['codcomissao'], null),
                    new Index('tabcom30_index02', ['codcoligada', 'chapa'], null),
                    new Index('tabcom30_pk', ['codcoligada', 'chapa', 'codcomissao'], null)
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
