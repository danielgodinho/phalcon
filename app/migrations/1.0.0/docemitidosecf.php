<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class DocemitidosecfMigration_100
 */
class DocemitidosecfMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('docemitidosecf', [
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
                        'coo',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'gnf',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'coo'
                        ]
                    ),
                    new Column(
                        'grg',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'gnf'
                        ]
                    ),
                    new Column(
                        'cdc',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'grg'
                        ]
                    ),
                    new Column(
                        'denominacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 2,
                            'after' => 'cdc'
                        ]
                    ),
                    new Column(
                        'datemi',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 6,
                            'after' => 'denominacao'
                        ]
                    ),
                    new Column(
                        'horemi',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 6,
                            'after' => 'datemi'
                        ]
                    ),
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'horemi'
                        ]
                    ),
                    new Column(
                        'nrserie',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'nrcaixa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 3,
                            'after' => 'nrserie'
                        ]
                    ),
                    new Column(
                        'valor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'nrcaixa'
                        ]
                    ),
                    new Column(
                        'condicao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 20,
                            'after' => 'valor'
                        ]
                    ),
                    new Column(
                        'coovic',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'condicao'
                        ]
                    ),
                    new Column(
                        'ccf',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'coovic'
                        ]
                    ),
                    new Column(
                        'caf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'ccf'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'caf'
                        ]
                    ),
                    new Column(
                        'campo_md5_registro',
                        [
                            'type' => Column::TYPE_CHAR,
                            'size' => 32,
                            'after' => 'log_data'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('docemitidosecf_index01', ['recnum', 'coo', 'nrserie'], null)
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
