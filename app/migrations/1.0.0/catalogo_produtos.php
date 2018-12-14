<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class CatalogoProdutosMigration_100
 */
class CatalogoProdutosMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('catalogo_produtos', [
                'columns' => [
                    new Column(
                        'id_pesquisa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 50,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_produto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'id_pesquisa'
                        ]
                    ),
                    new Column(
                        'fornecedor_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 2,
                            'after' => 'id_produto'
                        ]
                    ),
                    new Column(
                        'fornecedor_cod',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 10,
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
                        'ordem',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'produto'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('catalogo_produtos_index01', ['id_produto', 'id_pesquisa'], null),
                    new Index('catalogo_produtos_index02', ['fornecedor_emp', 'fornecedor_cod', 'ordem', 'produto', 'id_pesquisa'], null),
                    new Index('catalogo_produtos_index03', ['id_pesquisa'], null)
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
