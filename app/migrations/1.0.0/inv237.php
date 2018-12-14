<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Inv237Migration_100
 */
class Inv237Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('inv237', [
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
                        'data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
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
                            'after' => 'data'
                        ]
                    ),
                    new Column(
                        'fornecedor_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'fornecedor',
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
                            'after' => 'fornecedor'
                        ]
                    ),
                    new Column(
                        'descricao',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'produto'
                        ]
                    ),
                    new Column(
                        'qtde_balanco',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'descricao'
                        ]
                    ),
                    new Column(
                        'preco_medio',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'qtde_balanco'
                        ]
                    ),
                    new Column(
                        'qtde_inventario',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'preco_medio'
                        ]
                    ),
                    new Column(
                        'data_gravacao',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'qtde_inventario'
                        ]
                    ),
                    new Column(
                        'compras',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'data_gravacao'
                        ]
                    ),
                    new Column(
                        'vendas',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'compras'
                        ]
                    ),
                    new Column(
                        'transf_saidas',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'vendas'
                        ]
                    ),
                    new Column(
                        'transf_entradas',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'transf_saidas'
                        ]
                    ),
                    new Column(
                        'movimentos',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'transf_entradas'
                        ]
                    ),
                    new Column(
                        'devolucoes',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'movimentos'
                        ]
                    ),
                    new Column(
                        'sal_inv_ant',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'devolucoes'
                        ]
                    ),
                    new Column(
                        'pm_inv_ant',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'sal_inv_ant'
                        ]
                    ),
                    new Column(
                        'pm',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'pm_inv_ant'
                        ]
                    ),
                    new Column(
                        'imposto_tipo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'pm'
                        ]
                    ),
                    new Column(
                        'class_fiscal',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'imposto_tipo'
                        ]
                    ),
                    new Column(
                        'qtde_comparada',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'class_fiscal'
                        ]
                    ),
                    new Column(
                        'tipo_tributacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'qtde_comparada'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('inv237_index00', ['recnum'], null),
                    new Index('inv237_index01', ['fornecedor_emp', 'filial', 'fornecedor', 'produto', 'data'], null),
                    new Index('inv237_index02', ['fornecedor_emp', 'recnum', 'fornecedor'], null),
                    new Index('inv237_index03', ['data', 'filial', 'fornecedor_emp', 'fornecedor', 'produto', 'imposto_tipo'], null),
                    new Index('inv237_index04', ['produto', 'data', 'filial', 'fornecedor_emp', 'fornecedor'], null),
                    new Index('inv237_index05', ['data', 'filial', 'fornecedor_emp', 'fornecedor', 'produto', 'class_fiscal'], null),
                    new Index('inv237_index06', ['recnum', 'data', 'filial', 'fornecedor_emp', 'fornecedor'], null),
                    new Index('inv237_index07', ['recnum', 'data', 'filial'], null),
                    new Index('inv237_index08', ['data', 'filial', 'fornecedor_emp', 'fornecedor', 'produto'], null)
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
