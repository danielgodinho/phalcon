<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Cfma024Migration_100
 */
class Cfma024Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('cfma024', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "nextval(('"public"."cfma024_dfseq"'::text)::regclass)",
                            'notNull' => true,
                            'size' => 28,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'filial_cd',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 16,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'locacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'filial_cd'
                        ]
                    ),
                    new Column(
                        'cod_ref',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 44,
                            'after' => 'locacao'
                        ]
                    ),
                    new Column(
                        'tipo_ref',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 3,
                            'after' => 'cod_ref'
                        ]
                    ),
                    new Column(
                        'id_palete',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'size' => 1,
                            'after' => 'tipo_ref'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 15,
                            'after' => 'id_palete'
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
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'log_data'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('cfma024_index00', ['recnum'], null),
                    new Index('cfma024_index01', ['filial_cd', 'locacao'], null)
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
