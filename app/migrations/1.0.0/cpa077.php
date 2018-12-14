<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Cpa077Migration_100
 */
class Cpa077Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('cpa077', [
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
                        'empresa',
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
                            'after' => 'empresa'
                        ]
                    ),
                    new Column(
                        'codigo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'fornecedor'
                        ]
                    ),
                    new Column(
                        'codigo_invc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'codigo'
                        ]
                    ),
                    new Column(
                        'codigo_barra',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'codigo_invc'
                        ]
                    ),
                    new Column(
                        'codigo_fornec',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 21,
                            'after' => 'codigo_barra'
                        ]
                    ),
                    new Column(
                        'descricao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'codigo_fornec'
                        ]
                    ),
                    new Column(
                        'descricao1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'descricao'
                        ]
                    ),
                    new Column(
                        'descricao2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'descricao1'
                        ]
                    ),
                    new Column(
                        'descricao3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'descricao2'
                        ]
                    ),
                    new Column(
                        'descricao4',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'descricao3'
                        ]
                    ),
                    new Column(
                        'desc_maximo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'descricao4'
                        ]
                    ),
                    new Column(
                        'grupo_preco',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'desc_maximo'
                        ]
                    ),
                    new Column(
                        'peso_liquido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 4,
                            'after' => 'grupo_preco'
                        ]
                    ),
                    new Column(
                        'peso_bruto',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 4,
                            'after' => 'peso_liquido'
                        ]
                    ),
                    new Column(
                        'desconto_prod',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'peso_bruto'
                        ]
                    ),
                    new Column(
                        'imposto_codigo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'desconto_prod'
                        ]
                    ),
                    new Column(
                        'imposto_tipo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'imposto_codigo'
                        ]
                    ),
                    new Column(
                        'embalagem',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'imposto_tipo'
                        ]
                    ),
                    new Column(
                        'margem_prod',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 4,
                            'after' => 'embalagem'
                        ]
                    ),
                    new Column(
                        'peso_prod',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 4,
                            'after' => 'margem_prod'
                        ]
                    ),
                    new Column(
                        'observacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'peso_prod'
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
                        'cadastro_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'ativo'
                        ]
                    ),
                    new Column(
                        'cadastro_user',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'cadastro_data'
                        ]
                    ),
                    new Column(
                        'cadastro_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'cadastro_user'
                        ]
                    ),
                    new Column(
                        'alteracao_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cadastro_hora'
                        ]
                    ),
                    new Column(
                        'alteracao_user',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'alteracao_data'
                        ]
                    ),
                    new Column(
                        'alteracao_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'alteracao_user'
                        ]
                    ),
                    new Column(
                        'unidade_venda',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'alteracao_hora'
                        ]
                    ),
                    new Column(
                        'unidade_compra',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'unidade_venda'
                        ]
                    ),
                    new Column(
                        'conversao_vd_cp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 22,
                            'scale' => 8,
                            'after' => 'unidade_compra'
                        ]
                    ),
                    new Column(
                        'descricao_compl',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 70,
                            'after' => 'conversao_vd_cp'
                        ]
                    ),
                    new Column(
                        'descricao_compl_invc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 70,
                            'after' => 'descricao_compl'
                        ]
                    ),
                    new Column(
                        'visivel_filial',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'descricao_compl_invc'
                        ]
                    ),
                    new Column(
                        'estoque',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'visivel_filial'
                        ]
                    ),
                    new Column(
                        'preco_lista',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 18,
                            'scale' => 4,
                            'after' => 'estoque'
                        ]
                    ),
                    new Column(
                        'preco_lista1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 18,
                            'scale' => 4,
                            'after' => 'preco_lista'
                        ]
                    ),
                    new Column(
                        'preco_lista2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 18,
                            'scale' => 4,
                            'after' => 'preco_lista1'
                        ]
                    ),
                    new Column(
                        'preco_lista_dt',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'preco_lista2'
                        ]
                    ),
                    new Column(
                        'preco_lista_dt1',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'preco_lista_dt'
                        ]
                    ),
                    new Column(
                        'preco_lista_dt2',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'preco_lista_dt1'
                        ]
                    ),
                    new Column(
                        'composto_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'preco_lista_dt2'
                        ]
                    ),
                    new Column(
                        'composto_forn',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'composto_emp'
                        ]
                    ),
                    new Column(
                        'composto_prod',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'composto_forn'
                        ]
                    ),
                    new Column(
                        'equivalente_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'composto_prod'
                        ]
                    ),
                    new Column(
                        'equivalente_for',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'equivalente_emp'
                        ]
                    ),
                    new Column(
                        'equivalente_pro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'equivalente_for'
                        ]
                    ),
                    new Column(
                        'semelhante_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'equivalente_pro'
                        ]
                    ),
                    new Column(
                        'semelhante_for',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'semelhante_emp'
                        ]
                    ),
                    new Column(
                        'semelhante_pro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'semelhante_for'
                        ]
                    ),
                    new Column(
                        'composto_qtde',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 4,
                            'after' => 'semelhante_pro'
                        ]
                    ),
                    new Column(
                        'minimo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'composto_qtde'
                        ]
                    ),
                    new Column(
                        'maximo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'minimo'
                        ]
                    ),
                    new Column(
                        'embalagem_venda',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'maximo'
                        ]
                    ),
                    new Column(
                        'conv_com_ven',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 16,
                            'scale' => 8,
                            'after' => 'embalagem_venda'
                        ]
                    ),
                    new Column(
                        'vendedor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'conv_com_ven'
                        ]
                    ),
                    new Column(
                        'comp_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'vendedor'
                        ]
                    ),
                    new Column(
                        'comp_for',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'comp_emp'
                        ]
                    ),
                    new Column(
                        'comp_pro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'comp_for'
                        ]
                    ),
                    new Column(
                        'medida',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 4,
                            'after' => 'comp_pro'
                        ]
                    ),
                    new Column(
                        'medida_desc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'medida'
                        ]
                    ),
                    new Column(
                        'cb',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'medida_desc'
                        ]
                    ),
                    new Column(
                        'decimais',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'cb'
                        ]
                    ),
                    new Column(
                        'ipi',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'decimais'
                        ]
                    ),
                    new Column(
                        'aplicacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 63,
                            'after' => 'ipi'
                        ]
                    ),
                    new Column(
                        'medida_un',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'aplicacao'
                        ]
                    ),
                    new Column(
                        'caf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'medida_un'
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
                    ),
                    new Column(
                        'abandonado',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cafil'
                        ]
                    ),
                    new Column(
                        'id_reg',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'abandonado'
                        ]
                    ),
                    new Column(
                        'indice_compra',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'id_reg'
                        ]
                    ),
                    new Column(
                        'coefreducao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'indice_compra'
                        ]
                    ),
                    new Column(
                        'codigo_forn',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'coefreducao'
                        ]
                    ),
                    new Column(
                        'descricao_forn',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 70,
                            'after' => 'codigo_forn'
                        ]
                    ),
                    new Column(
                        'coefsubst',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'descricao_forn'
                        ]
                    ),
                    new Column(
                        'icms_proprio',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'coefsubst'
                        ]
                    ),
                    new Column(
                        'unidade_transf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'icms_proprio'
                        ]
                    ),
                    new Column(
                        'classfiscal',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'unidade_transf'
                        ]
                    ),
                    new Column(
                        'ipi_venda',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'classfiscal'
                        ]
                    ),
                    new Column(
                        'grupo_comissao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ipi_venda'
                        ]
                    ),
                    new Column(
                        'id_produto',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'grupo_comissao'
                        ]
                    ),
                    new Column(
                        'substituido',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'id_produto'
                        ]
                    ),
                    new Column(
                        'old_codbar',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 49,
                            'after' => 'substituido'
                        ]
                    ),
                    new Column(
                        'emb_sep',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'old_codbar'
                        ]
                    ),
                    new Column(
                        'extipi',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'emb_sep'
                        ]
                    ),
                    new Column(
                        'complemento',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'extipi'
                        ]
                    ),
                    new Column(
                        'cest',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 7,
                            'after' => 'complemento'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('cpa077_index00', ['recnum'], null),
                    new Index('cpa077_index02', ['codigo_barra'], null),
                    new Index('cpa077_index03', ['descricao_compl_invc', 'codigo_invc', 'fornecedor', 'empresa'], null),
                    new Index('cpa077_index04', ['descricao_compl', 'descricao', 'codigo', 'fornecedor', 'empresa'], null),
                    new Index('cpa077_index05', ['cb'], null),
                    new Index('cpa077_index06', ['imposto_tipo', 'codigo', 'fornecedor', 'empresa'], null),
                    new Index('cpa077_index07', ['descricao_compl', 'codigo', 'fornecedor', 'empresa'], null),
                    new Index('cpa077_index08', ['descricao_compl', 'descricao1', 'codigo', 'fornecedor', 'empresa'], null),
                    new Index('cpa077_index09', ['codigo', 'empresa', 'fornecedor', 'descricao2', 'descricao_compl'], null),
                    new Index('cpa077_index10', ['comp_pro', 'comp_for', 'comp_emp', 'codigo', 'fornecedor', 'empresa'], null),
                    new Index('cpa077_index11', ['descricao_compl', 'codigo', 'fornecedor', 'empresa'], null),
                    new Index('cpa077_index12', ['descricao_compl', 'descricao3', 'codigo', 'fornecedor', 'empresa'], null),
                    new Index('cpa077_index13', ['classfiscal', 'codigo', 'fornecedor', 'empresa'], null),
                    new Index('cpa077_index14', ['alteracao_data', 'recnum'], null),
                    new Index('cpa077_index15', ['codigo_forn', 'fornecedor', 'empresa'], null)
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
