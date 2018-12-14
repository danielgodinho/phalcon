<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Mmt213Migration_100
 */
class Mmt213Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('mmt213', [
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
                        'cod_produto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 9,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'cd_grup_formula',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'cod_produto'
                        ]
                    ),
                    new Column(
                        'ult_item_estrut',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'cd_grup_formula'
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
                            'after' => 'ult_item_estrut'
                        ]
                    ),
                    new Column(
                        'val_preco_kg',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'scale' => 2,
                            'after' => 'val_preco'
                        ]
                    ),
                    new Column(
                        'qtde_peso1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'val_preco_kg'
                        ]
                    ),
                    new Column(
                        'qtde_peso2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'qtde_peso1'
                        ]
                    ),
                    new Column(
                        'qtde_peso3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'qtde_peso2'
                        ]
                    ),
                    new Column(
                        'qtde_peso4',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'qtde_peso3'
                        ]
                    ),
                    new Column(
                        'qtde_peso5',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'scale' => 2,
                            'after' => 'qtde_peso4'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('mmt213_index00', ['recnum'], null),
                    new Index('mmt213_index01', ['cod_produto', 'cd_grup_formula'], null)
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
