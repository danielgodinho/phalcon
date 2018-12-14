<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Mmt201Migration_100
 */
class Mmt201Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('mmt201', [
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
                        'cod_grupo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'cod_subgrupo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'cod_grupo'
                        ]
                    ),
                    new Column(
                        'num_produto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 5,
                            'after' => 'cod_subgrupo'
                        ]
                    ),
                    new Column(
                        'desc_produto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 40,
                            'after' => 'num_produto'
                        ]
                    ),
                    new Column(
                        'num_ano',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'desc_produto'
                        ]
                    ),
                    new Column(
                        'num_grupo_preco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'num_ano'
                        ]
                    ),
                    new Column(
                        'peso_especifico',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 4,
                            'after' => 'num_grupo_preco'
                        ]
                    ),
                    new Column(
                        'cod_unidade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'peso_especifico'
                        ]
                    ),
                    new Column(
                        'val_tabela_qu',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'cod_unidade'
                        ]
                    ),
                    new Column(
                        'cod_tinta_uni',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'val_tabela_qu'
                        ]
                    ),
                    new Column(
                        'flag_nacionalid',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cod_tinta_uni'
                        ]
                    ),
                    new Column(
                        'num_versao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'flag_nacionalid'
                        ]
                    ),
                    new Column(
                        'data_versao',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'num_versao'
                        ]
                    ),
                    new Column(
                        'cd_marca',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'data_versao'
                        ]
                    ),
                    new Column(
                        'val_original_qu',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'cd_marca'
                        ]
                    ),
                    new Column(
                        'val_tabela_gl',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'val_original_qu'
                        ]
                    ),
                    new Column(
                        'val_original_gl',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'val_tabela_gl'
                        ]
                    ),
                    new Column(
                        'cd_formula1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'val_original_gl'
                        ]
                    ),
                    new Column(
                        'cd_formula2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'cd_formula1'
                        ]
                    ),
                    new Column(
                        'flag_novo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cd_formula2'
                        ]
                    ),
                    new Column(
                        'desc_prod_por',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 40,
                            'after' => 'flag_novo'
                        ]
                    ),
                    new Column(
                        'desc_prod_esp',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 40,
                            'after' => 'desc_prod_por'
                        ]
                    ),
                    new Column(
                        'desc_prod_ingl',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 40,
                            'after' => 'desc_prod_esp'
                        ]
                    ),
                    new Column(
                        'alternativa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'desc_prod_ingl'
                        ]
                    ),
                    new Column(
                        'val_tabela_arg',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'alternativa'
                        ]
                    ),
                    new Column(
                        'val_tabela_par',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'val_tabela_arg'
                        ]
                    ),
                    new Column(
                        'flag_soargentin',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'val_tabela_par'
                        ]
                    ),
                    new Column(
                        'ano_inicio',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'flag_soargentin'
                        ]
                    ),
                    new Column(
                        'ano_termino',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'ano_inicio'
                        ]
                    ),
                    new Column(
                        'mensagem1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'ano_termino'
                        ]
                    ),
                    new Column(
                        'mensagem2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'mensagem1'
                        ]
                    ),
                    new Column(
                        'flag_mostra',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'mensagem2'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('mmt201_index00', ['recnum'], null),
                    new Index('mmt201_index01', ['num_produto', 'cod_grupo', 'cod_subgrupo'], null),
                    new Index('mmt201_index02', ['desc_produto', 'num_ano', 'cd_marca', 'cod_grupo', 'cod_subgrupo', 'num_produto'], null),
                    new Index('mmt201_index03', ['num_ano', 'cod_grupo', 'cod_subgrupo', 'num_produto', 'desc_produto'], null),
                    new Index('mmt201_index06', ['cod_grupo', 'cod_subgrupo', 'num_produto', 'desc_produto'], null),
                    new Index('mmt201_index07', ['cod_grupo', 'cod_subgrupo', 'num_produto', 'desc_produto', 'cod_tinta_uni'], null),
                    new Index('mmt201_index08', ['cod_grupo', 'cod_subgrupo', 'num_produto', 'desc_produto', 'flag_nacionalid'], null)
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
