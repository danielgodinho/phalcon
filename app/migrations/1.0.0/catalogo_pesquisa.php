<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class CatalogoPesquisaMigration_100
 */
class CatalogoPesquisaMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('catalogo_pesquisa', [
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
                        'pesquisa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'id_pesquisa'
                        ]
                    ),
                    new Column(
                        'data_pesq',
                        [
                            'type' => Column::TYPE_DATE,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'pesquisa'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('catalogo_pesquisa_index01', ['id_pesquisa'], null)
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
