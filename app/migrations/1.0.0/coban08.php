<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Coban08Migration_100
 */
class Coban08Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('coban08', [
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
                        'cod_empresa',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'cod_banco',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cod_empresa'
                        ]
                    ),
                    new Column(
                        'matriz',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'cod_banco'
                        ]
                    ),
                    new Column(
                        'nro_agencia',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'matriz'
                        ]
                    ),
                    new Column(
                        'dv_agencia',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "0",
                            'size' => 2,
                            'after' => 'nro_agencia'
                        ]
                    ),
                    new Column(
                        'nro_conta',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'dv_agencia'
                        ]
                    ),
                    new Column(
                        'dv_conta',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'nro_conta'
                        ]
                    ),
                    new Column(
                        'nome_agencia',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'dv_conta'
                        ]
                    ),
                    new Column(
                        'endereco_ag',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 60,
                            'after' => 'nome_agencia'
                        ]
                    ),
                    new Column(
                        'cidade_ag',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'endereco_ag'
                        ]
                    ),
                    new Column(
                        'estado_ag',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'cidade_ag'
                        ]
                    ),
                    new Column(
                        'ddd_ag',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'estado_ag'
                        ]
                    ),
                    new Column(
                        'telefone_ag',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'ddd_ag'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'telefone_ag'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'log_data'
                        ]
                    ),
                    new Column(
                        'cod_cedente',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 20,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'cnab',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 20,
                            'after' => 'cod_cedente'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('coban08_index00', ['recnum'], null),
                    new Index('coban08_index01', ['cod_empresa', 'cod_banco'], null)
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
