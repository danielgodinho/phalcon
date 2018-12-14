<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Pema001Migration_100
 */
class Pema001Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('pema001', [
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
                        'doc_nro',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'doc_tip',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'doc_nro'
                        ]
                    ),
                    new Column(
                        'lan_dd',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'doc_tip'
                        ]
                    ),
                    new Column(
                        'lan_mm',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'lan_dd'
                        ]
                    ),
                    new Column(
                        'lan_aa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'lan_mm'
                        ]
                    ),
                    new Column(
                        'ven_dd',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'lan_aa'
                        ]
                    ),
                    new Column(
                        'ven_mm',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ven_dd'
                        ]
                    ),
                    new Column(
                        'ven_aa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'ven_mm'
                        ]
                    ),
                    new Column(
                        'pre_dd',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ven_aa'
                        ]
                    ),
                    new Column(
                        'pre_mm',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'pre_dd'
                        ]
                    ),
                    new Column(
                        'pre_aa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'pre_mm'
                        ]
                    ),
                    new Column(
                        'lan_tip',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'pre_aa'
                        ]
                    ),
                    new Column(
                        'val',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'lan_tip'
                        ]
                    ),
                    new Column(
                        'for_cli',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'val'
                        ]
                    ),
                    new Column(
                        'ori_doc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'for_cli'
                        ]
                    ),
                    new Column(
                        'ori_tip',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ori_doc'
                        ]
                    ),
                    new Column(
                        'sit',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'ori_tip'
                        ]
                    ),
                    new Column(
                        'data_lan',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'sit'
                        ]
                    ),
                    new Column(
                        'data_ven',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'data_lan'
                        ]
                    ),
                    new Column(
                        'data_pre',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'data_ven'
                        ]
                    ),
                    new Column(
                        'responsave',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'data_pre'
                        ]
                    ),
                    new Column(
                        'data_pag',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'responsave'
                        ]
                    ),
                    new Column(
                        'val_pag',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'data_pag'
                        ]
                    ),
                    new Column(
                        'ags_031_032',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'val_pag'
                        ]
                    ),
                    new Column(
                        'empresa',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ags_031_032'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('pema001_index00', ['recnum'], null),
                    new Index('pema001_index01', ['doc_tip', 'doc_nro'], null),
                    new Index('pema001_index02', ['recnum', 'for_cli', 'data_lan'], null),
                    new Index('pema001_index03', ['for_cli', 'recnum', 'data_ven'], null),
                    new Index('pema001_index04', ['recnum', 'for_cli', 'data_pre'], null),
                    new Index('pema001_index05', ['recnum', 'for_cli'], null)
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
