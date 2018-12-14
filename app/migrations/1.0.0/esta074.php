<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Esta074Migration_100
 */
class Esta074Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('esta074', [
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
                        'fornecedor_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'recnum'
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
                        'pedido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'produto'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'pedido'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
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
                        'inf_for_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'inf_for',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'inf_for_emp'
                        ]
                    ),
                    new Column(
                        'minimo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'inf_for'
                        ]
                    ),
                    new Column(
                        'vp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'minimo'
                        ]
                    ),
                    new Column(
                        'observacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'vp'
                        ]
                    ),
                    new Column(
                        'ativo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'observacao'
                        ]
                    ),
                    new Column(
                        'imposto',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ativo'
                        ]
                    ),
                    new Column(
                        'estoque',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'imposto'
                        ]
                    ),
                    new Column(
                        'unidade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'estoque'
                        ]
                    ),
                    new Column(
                        't1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'unidade'
                        ]
                    ),
                    new Column(
                        't2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 't1'
                        ]
                    ),
                    new Column(
                        't3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 't2'
                        ]
                    ),
                    new Column(
                        't4',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 't3'
                        ]
                    ),
                    new Column(
                        't5',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 't4'
                        ]
                    ),
                    new Column(
                        't6',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 't5'
                        ]
                    ),
                    new Column(
                        'pedido_pendente',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 't6'
                        ]
                    ),
                    new Column(
                        'reclamacao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'pedido_pendente'
                        ]
                    ),
                    new Column(
                        'entradas',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'reclamacao'
                        ]
                    ),
                    new Column(
                        'pedido_maximo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'entradas'
                        ]
                    ),
                    new Column(
                        'ped_filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'pedido_maximo'
                        ]
                    ),
                    new Column(
                        'ped_numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'ped_filial'
                        ]
                    ),
                    new Column(
                        'ped_log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'ped_numero'
                        ]
                    ),
                    new Column(
                        'ped_log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'ped_log'
                        ]
                    ),
                    new Column(
                        'ped_log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'ped_log_data'
                        ]
                    ),
                    new Column(
                        'ped_ok',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ped_log_hora'
                        ]
                    ),
                    new Column(
                        'ped_for',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'ped_ok'
                        ]
                    ),
                    new Column(
                        'ped_for_desc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 17,
                            'after' => 'ped_for'
                        ]
                    ),
                    new Column(
                        'ped_valor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'ped_for_desc'
                        ]
                    ),
                    new Column(
                        'ped_prog',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 21,
                            'after' => 'ped_valor'
                        ]
                    ),
                    new Column(
                        'ped_desc',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'ped_prog'
                        ]
                    ),
                    new Column(
                        'ped_desc1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'ped_desc'
                        ]
                    ),
                    new Column(
                        'ped_desc2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'ped_desc1'
                        ]
                    ),
                    new Column(
                        'ped_fator',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 4,
                            'after' => 'ped_desc2'
                        ]
                    ),
                    new Column(
                        'ped_outros',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'ped_fator'
                        ]
                    ),
                    new Column(
                        'ped_qtde',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ped_outros'
                        ]
                    ),
                    new Column(
                        'ped_qtde1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ped_qtde'
                        ]
                    ),
                    new Column(
                        'ped_qtde2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ped_qtde1'
                        ]
                    ),
                    new Column(
                        'ped_qtde3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ped_qtde2'
                        ]
                    ),
                    new Column(
                        'ped_qtde4',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ped_qtde3'
                        ]
                    ),
                    new Column(
                        'ped_qtde5',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ped_qtde4'
                        ]
                    ),
                    new Column(
                        'produto_desc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 77,
                            'after' => 'ped_qtde5'
                        ]
                    ),
                    new Column(
                        'produto_emb_cpa',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'produto_desc'
                        ]
                    ),
                    new Column(
                        'produto_emb_vda',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'produto_emb_cpa'
                        ]
                    ),
                    new Column(
                        'produto_cpa_un',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'produto_emb_vda'
                        ]
                    ),
                    new Column(
                        'produto_vda_un',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'produto_cpa_un'
                        ]
                    ),
                    new Column(
                        'indice_compra',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 4,
                            'after' => 'produto_vda_un'
                        ]
                    ),
                    new Column(
                        'indice_venda',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 4,
                            'after' => 'indice_compra'
                        ]
                    ),
                    new Column(
                        'ped_filial_f1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'indice_venda'
                        ]
                    ),
                    new Column(
                        'ped_numero_f1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'ped_filial_f1'
                        ]
                    ),
                    new Column(
                        'ped_ok_f1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ped_numero_f1'
                        ]
                    ),
                    new Column(
                        'pedido_f1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'ped_ok_f1'
                        ]
                    ),
                    new Column(
                        'ped_valor_f1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'pedido_f1'
                        ]
                    ),
                    new Column(
                        'ped_desc_f1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'ped_valor_f1'
                        ]
                    ),
                    new Column(
                        'ped_desc1_f1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'ped_desc_f1'
                        ]
                    ),
                    new Column(
                        'ped_desc2_f1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'ped_desc1_f1'
                        ]
                    ),
                    new Column(
                        'ped_fator_f1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 4,
                            'after' => 'ped_desc2_f1'
                        ]
                    ),
                    new Column(
                        'ped_outros_f1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 4,
                            'after' => 'ped_fator_f1'
                        ]
                    ),
                    new Column(
                        'ped_filial_f2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ped_outros_f1'
                        ]
                    ),
                    new Column(
                        'ped_numero_f2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'ped_filial_f2'
                        ]
                    ),
                    new Column(
                        'ped_ok_f2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ped_numero_f2'
                        ]
                    ),
                    new Column(
                        'pedido_f2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'ped_ok_f2'
                        ]
                    ),
                    new Column(
                        'ped_valor_f2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'pedido_f2'
                        ]
                    ),
                    new Column(
                        'ped_desc_f2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'ped_valor_f2'
                        ]
                    ),
                    new Column(
                        'ped_desc1_f2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'ped_desc_f2'
                        ]
                    ),
                    new Column(
                        'ped_desc2_f2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'ped_desc1_f2'
                        ]
                    ),
                    new Column(
                        'ped_fator_f2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 4,
                            'after' => 'ped_desc2_f2'
                        ]
                    ),
                    new Column(
                        'ped_outros_f2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 4,
                            'after' => 'ped_fator_f2'
                        ]
                    ),
                    new Column(
                        'ped_filial_f3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ped_outros_f2'
                        ]
                    ),
                    new Column(
                        'ped_numero_f3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'ped_filial_f3'
                        ]
                    ),
                    new Column(
                        'ped_ok_f3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ped_numero_f3'
                        ]
                    ),
                    new Column(
                        'pedido_f3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'ped_ok_f3'
                        ]
                    ),
                    new Column(
                        'ped_valor_f3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'pedido_f3'
                        ]
                    ),
                    new Column(
                        'ped_desc_f3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'ped_valor_f3'
                        ]
                    ),
                    new Column(
                        'ped_desc1_f3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'ped_desc_f3'
                        ]
                    ),
                    new Column(
                        'ped_desc2_f3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'ped_desc1_f3'
                        ]
                    ),
                    new Column(
                        'ped_fator_f3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 4,
                            'after' => 'ped_desc2_f3'
                        ]
                    ),
                    new Column(
                        'ped_outros_f3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 4,
                            'after' => 'ped_fator_f3'
                        ]
                    ),
                    new Column(
                        'aviso',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'ped_outros_f3'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('esta074_index00', ['recnum'], null),
                    new Index('esta074_index01', ['produto', 'fornecedor_emp', 'fornecedor'], null),
                    new Index('esta074_index02', ['inf_for', 'inf_for_emp', 'fornecedor_emp', 'fornecedor', 'produto'], null),
                    new Index('esta074_index03', ['fornecedor_emp', 'fornecedor', 'produto', 'ped_filial', 'ped_numero'], null)
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
