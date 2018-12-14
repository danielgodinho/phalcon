<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Nfa245Migration_100
 */
class Nfa245Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('nfa245', [
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
                        'filialdest',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'cod_emissor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'filialdest'
                        ]
                    ),
                    new Column(
                        'fornecedor_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'cod_emissor'
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
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'fornecedor_cod'
                        ]
                    ),
                    new Column(
                        'descricao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 60,
                            'after' => 'produto'
                        ]
                    ),
                    new Column(
                        'data_mov',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'descricao'
                        ]
                    ),
                    new Column(
                        'num_doc',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'data_mov'
                        ]
                    ),
                    new Column(
                        'ser_doc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'num_doc'
                        ]
                    ),
                    new Column(
                        'quantidade',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 4,
                            'after' => 'ser_doc'
                        ]
                    ),
                    new Column(
                        'val_unitario',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'quantidade'
                        ]
                    ),
                    new Column(
                        'total',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'val_unitario'
                        ]
                    ),
                    new Column(
                        'classfiscal',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'total'
                        ]
                    ),
                    new Column(
                        'cfop',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 7,
                            'after' => 'classfiscal'
                        ]
                    ),
                    new Column(
                        'modal_pagto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cfop'
                        ]
                    ),
                    new Column(
                        'flag',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'modal_pagto'
                        ]
                    ),
                    new Column(
                        'devol_emis_orig',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'flag'
                        ]
                    ),
                    new Column(
                        'cod_vendedor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'devol_emis_orig'
                        ]
                    ),
                    new Column(
                        'tipo_reg',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'cod_vendedor'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'tipo_reg'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('nfa245_index00', ['recnum'], null),
                    new Index('nfa245_index01', ['produto', 'data_mov', 'fornecedor_emp', 'fornecedor_cod', 'ser_doc', 'filialdest', 'num_doc'], null),
                    new Index('nfa245_index02', ['produto', 'filialdest', 'fornecedor_emp', 'fornecedor_cod', 'data_mov', 'num_doc', 'ser_doc', 'classfiscal'], null),
                    new Index('nfa245_index03', ['filialdest', 'fornecedor_emp', 'fornecedor_cod', 'produto', 'data_mov', 'num_doc', 'ser_doc'], null),
                    new Index('nfa245_index04', ['ser_doc', 'filialdest', 'fornecedor_emp', 'fornecedor_cod', 'produto', 'data_mov', 'num_doc', 'cod_vendedor'], null),
                    new Index('nfa245_index05', ['recnum', 'filialdest', 'fornecedor_emp', 'fornecedor_cod', 'produto'], null),
                    new Index('nfa245_index06', ['filialdest', 'fornecedor_emp', 'fornecedor_cod', 'produto', 'num_doc', 'ser_doc'], null),
                    new Index('nfa245_index07', ['filialdest', 'fornecedor_emp', 'fornecedor_cod', 'produto', 'data_mov', 'num_doc', 'ser_doc', 'log'], null),
                    new Index('nfa245_index08', ['filialdest', 'fornecedor_emp', 'fornecedor_cod', 'produto', 'data_mov', 'num_doc', 'ser_doc', 'log'], null)
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
