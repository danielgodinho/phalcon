<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Mmt210Migration_100
 */
class Mmt210Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('mmt210', [
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
                        'cd_marca',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'desc_produto'
                        ]
                    ),
                    new Column(
                        'num_ano',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'cd_marca'
                        ]
                    ),
                    new Column(
                        'qtdade_itens',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
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
                            'after' => 'qtdade_itens'
                        ]
                    ),
                    new Column(
                        'cd_formula1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'peso_especifico'
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
                        'tot_gramas',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'cd_formula2'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('mmt210_index00', ['recnum'], null),
                    new Index('mmt210_index01', ['cod_grupo', 'cod_subgrupo', 'num_produto'], null),
                    new Index('mmt210_index02', ['recnum', 'num_produto'], null)
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
