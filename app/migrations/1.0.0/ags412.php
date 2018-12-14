<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Ags412Migration_100
 */
class Ags412Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('ags412', [
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
                        'sessao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
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
                            'after' => 'sessao'
                        ]
                    ),
                    new Column(
                        'doc_serie',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'doc_numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'doc_serie'
                        ]
                    ),
                    new Column(
                        'doc_emissao',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'doc_numero'
                        ]
                    ),
                    new Column(
                        'doc_tipo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'doc_emissao'
                        ]
                    ),
                    new Column(
                        'doc_vendedor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'doc_tipo'
                        ]
                    ),
                    new Column(
                        'vend_comissao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'doc_vendedor'
                        ]
                    ),
                    new Column(
                        'vend_nome',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'vend_comissao'
                        ]
                    ),
                    new Column(
                        'doc_qtde',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 4,
                            'after' => 'vend_nome'
                        ]
                    ),
                    new Column(
                        'doc_qtde_invd',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 4,
                            'after' => 'doc_qtde'
                        ]
                    ),
                    new Column(
                        'doc_valor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'doc_qtde_invd'
                        ]
                    ),
                    new Column(
                        'doc_valor_invd',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'doc_valor'
                        ]
                    ),
                    new Column(
                        'pesquisa_for',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'doc_valor_invd'
                        ]
                    ),
                    new Column(
                        'pesquisa_prod',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'pesquisa_for'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('ags412_index00', ['recnum'], null),
                    new Index('ags412_index01', ['recnum', 'vend_comissao', 'sessao', 'filial'], null),
                    new Index('ags412_index02', ['vend_comissao', 'recnum', 'filial', 'doc_vendedor'], null),
                    new Index('ags412_index03', ['pesquisa_for', 'recnum', 'sessao', 'filial', 'doc_emissao', 'vend_comissao', 'pesquisa_prod'], null),
                    new Index('ags412_index04', ['recnum', 'sessao', 'filial', 'vend_comissao', 'doc_qtde_invd', 'pesquisa_for'], null),
                    new Index('ags412_index05', ['recnum', 'sessao', 'filial', 'vend_comissao', 'doc_valor_invd', 'pesquisa_for'], null)
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
