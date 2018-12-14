<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Mmt203Migration_100
 */
class Mmt203Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('mmt203', [
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
                        'val_preco',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'desc_produto'
                        ]
                    ),
                    new Column(
                        'cod_unidade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'val_preco'
                        ]
                    ),
                    new Column(
                        'val_tabela',
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
                        'val_original',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'val_tabela'
                        ]
                    ),
                    new Column(
                        'desc_prod_por',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 40,
                            'after' => 'val_original'
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
                        'val_preco_arg',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'desc_prod_ingl'
                        ]
                    ),
                    new Column(
                        'val_preco_par',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'val_preco_arg'
                        ]
                    ),
                    new Column(
                        'val_desconto',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'val_preco_par'
                        ]
                    ),
                    new Column(
                        'val_liquido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'val_desconto'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('mmt203_index00', ['recnum'], null),
                    new Index('mmt203_index01', ['cod_grupo', 'cod_subgrupo', 'num_produto'], null)
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
