<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class VwItensNotaMigration_100
 */
class VwItensNotaMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('vw_itens_nota', [
                'columns' => [
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 2,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'fornecedor_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 2,
                            'after' => 'numero'
                        ]
                    ),
                    new Column(
                        'fornecedor_cod',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 8,
                            'after' => 'fornecedor_emp'
                        ]
                    ),
                    new Column(
                        'produto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 20,
                            'after' => 'fornecedor_cod'
                        ]
                    ),
                    new Column(
                        'q_est',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'produto'
                        ]
                    ),
                    new Column(
                        'idpeditem',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'size' => 1,
                            'after' => 'q_est'
                        ]
                    ),
                    new Column(
                        'tpreg',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'idpeditem'
                        ]
                    ),
                    new Column(
                        'flag',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'tpreg'
                        ]
                    ),
                    new Column(
                        'liquido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'flag'
                        ]
                    ),
                    new Column(
                        'total_liquido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'liquido'
                        ]
                    ),
                    new Column(
                        'quantidade',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'total_liquido'
                        ]
                    ),
                    new Column(
                        'ipi_liquido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'quantidade'
                        ]
                    ),
                    new Column(
                        'id_preco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'ipi_liquido'
                        ]
                    ),
                    new Column(
                        'und_venda',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'id_preco'
                        ]
                    ),
                    new Column(
                        'unitario',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'und_venda'
                        ]
                    ),
                    new Column(
                        'total',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'unitario'
                        ]
                    ),
                    new Column(
                        'vendedor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'total'
                        ]
                    ),
                    new Column(
                        'imposto_tipo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 2,
                            'after' => 'vendedor'
                        ]
                    ),
                    new Column(
                        'classfiscal',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 10,
                            'after' => 'imposto_tipo'
                        ]
                    ),
                    new Column(
                        'cb',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 14,
                            'after' => 'classfiscal'
                        ]
                    ),
                    new Column(
                        'descricao_compl',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 70,
                            'after' => 'cb'
                        ]
                    ),
                    new Column(
                        'unidade_venda',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 2,
                            'after' => 'descricao_compl'
                        ]
                    ),
                    new Column(
                        'idproduto',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'size' => 1,
                            'after' => 'unidade_venda'
                        ]
                    ),
                    new Column(
                        'coefreducao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'idproduto'
                        ]
                    ),
                    new Column(
                        'coefsubst',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'coefreducao'
                        ]
                    ),
                    new Column(
                        'icms_proprio',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'coefsubst'
                        ]
                    ),
                    new Column(
                        'conv_com_ven',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 16,
                            'scale' => 8,
                            'after' => 'icms_proprio'
                        ]
                    ),
                    new Column(
                        'embalagem_venda',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 8,
                            'after' => 'conv_com_ven'
                        ]
                    ),
                    new Column(
                        'unidade_transf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 2,
                            'after' => 'embalagem_venda'
                        ]
                    )
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
