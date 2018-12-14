<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Apk001Migration_100
 */
class Apk001Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('apk001', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "nextval(('"public"."apk001_dfseq"'::text)::regclass)",
                            'notNull' => true,
                            'size' => 28,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_aplicativo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "currval(('"public"."apk001_dfseq"'::text)::regclass)",
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'id_aplicativo'
                        ]
                    ),
                    new Column(
                        'nome_apk',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 200,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'src_aplicativo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 200,
                            'after' => 'nome_apk'
                        ]
                    ),
                    new Column(
                        'src_manual',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 200,
                            'after' => 'src_aplicativo'
                        ]
                    ),
                    new Column(
                        'situacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'src_manual'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'situacao'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'log_data'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('apk001_index01', ['id_aplicativo'], null)
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
