<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class ContrexpMigration_100
 */
class ContrexpMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('contrexp', [
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
                        'reg_tabela',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 60,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'reg_recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'reg_tabela'
                        ]
                    ),
                    new Column(
                        'reg_evento',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'reg_recnum'
                        ]
                    ),
                    new Column(
                        'reg_cols_pk',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 600,
                            'after' => 'reg_evento'
                        ]
                    ),
                    new Column(
                        'reg_dados_pk',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 1200,
                            'after' => 'reg_cols_pk'
                        ]
                    ),
                    new Column(
                        'reg_status',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'reg_dados_pk'
                        ]
                    ),
                    new Column(
                        'reg_log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'reg_status'
                        ]
                    ),
                    new Column(
                        'reg_log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'reg_log'
                        ]
                    ),
                    new Column(
                        'reg_log_hora',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 5,
                            'after' => 'reg_log_data'
                        ]
                    ),
                    new Column(
                        'reg_fil_origem',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'reg_log_hora'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('contrexp_index01', ['reg_recnum', 'reg_tabela', 'reg_evento'], null),
                    new Index('contrexp_index16', ['reg_status', 'reg_tabela'], null),
                    new Index('contrexp_index17', ['reg_tabela', 'reg_log_data'], null)
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
