<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class TbservmecanicoMigration_100
 */
class TbservmecanicoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('tbservmecanico', [
                'columns' => [
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 3,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'os_numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 10,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'fornecedor_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 2,
                            'after' => 'os_numero'
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
                        'mecanico',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 10,
                            'after' => 'produto'
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
