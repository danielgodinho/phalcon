<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Coletor08Migration_100
 */
class Coletor08Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('coletor08', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 28,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'abertura',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'abertura'
                        ]
                    ),
                    new Column(
                        'data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'codbarra',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 40,
                            'after' => 'data'
                        ]
                    ),
                    new Column(
                        'selo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'codbarra'
                        ]
                    ),
                    new Column(
                        'tipo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'selo'
                        ]
                    ),
                    new Column(
                        'hora_coleta',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'tipo'
                        ]
                    ),
                    new Column(
                        'fornecedor_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'hora_coleta'
                        ]
                    ),
                    new Column(
                        'fornecedor_cod',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'fornecedor_emp'
                        ]
                    ),
                    new Column(
                        'produto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 20,
                            'after' => 'fornecedor_cod'
                        ]
                    ),
                    new Column(
                        'locacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 14,
                            'after' => 'produto'
                        ]
                    ),
                    new Column(
                        'quantidade',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'locacao'
                        ]
                    ),
                    new Column(
                        'status',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'quantidade'
                        ]
                    ),
                    new Column(
                        'obs',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'status'
                        ]
                    ),
                    new Column(
                        'arquivo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'obs'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'arquivo'
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
                    )
                ],
                'indexes' => [
                    new Index('coletor08_index00', ['recnum'], null),
                    new Index('coletor08_index01', ['codbarra', 'filial', 'data', 'hora_coleta', 'abertura', 'selo', 'tipo'], null),
                    new Index('coletor08_index02', ['produto', 'abertura', 'filial', 'fornecedor_emp', 'fornecedor_cod', 'status', 'obs'], null),
                    new Index('coletor08_index03', ['abertura', 'produto', 'fornecedor_cod', 'fornecedor_emp', 'tipo', 'filial'], null)
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
