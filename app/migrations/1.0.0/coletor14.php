<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Coletor14Migration_100
 */
class Coletor14Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('coletor14', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "nextval(('"public"."coletor14_dfseq"'::text)::regclass)",
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
                            'size' => 20,
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
                        'tipo_reg',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'hora_coleta'
                        ]
                    ),
                    new Column(
                        'fornecedor_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'tipo_reg'
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
                    ),
                    new Column(
                        'cod_func',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'comissao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'cod_func'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('coletor14_index00', ['recnum'], null),
                    new Index('coletor14_index01', ['data', 'abertura', 'codbarra', 'filial', 'tipo', 'hora_coleta', 'tipo_reg', 'selo'], null),
                    new Index('coletor14_index02', ['fornecedor_emp', 'abertura', 'filial', 'fornecedor_cod', 'produto', 'status', 'obs'], null),
                    new Index('coletor14_index03', ['abertura', 'filial', 'tipo', 'fornecedor_emp', 'fornecedor_cod', 'produto'], null)
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
