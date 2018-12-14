<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Sisa007Migration_100
 */
class Sisa007Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('sisa007', [
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
                        'produtos',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'arquivo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 77,
                            'after' => 'produtos'
                        ]
                    ),
                    new Column(
                        'diretorio_spool',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 77,
                            'after' => 'arquivo'
                        ]
                    ),
                    new Column(
                        'operacao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'diretorio_spool'
                        ]
                    ),
                    new Column(
                        'campo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'operacao'
                        ]
                    ),
                    new Column(
                        'campo1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'campo'
                        ]
                    ),
                    new Column(
                        'campo2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'campo1'
                        ]
                    ),
                    new Column(
                        'fator_vista',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 16,
                            'scale' => 8,
                            'after' => 'campo2'
                        ]
                    ),
                    new Column(
                        'caf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'fator_vista'
                        ]
                    ),
                    new Column(
                        'cafil',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'caf'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('sisa007_index00', ['recnum'], null),
                    new Index('sisa007_index01', ['recnum', 'caf'], null)
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
