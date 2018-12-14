<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class QtderegsMigration_100
 */
class QtderegsMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('qtderegs', [
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
                        'tabela',
                        [
                            'type' => Column::TYPE_CHAR,
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'qtde',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'size' => 1,
                            'after' => 'tabela'
                        ]
                    ),
                    new Column(
                        'campo_md5_registro',
                        [
                            'type' => Column::TYPE_CHAR,
                            'size' => 32,
                            'after' => 'qtde'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('quantidaderegistros_index1', ['tabela'], null)
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
