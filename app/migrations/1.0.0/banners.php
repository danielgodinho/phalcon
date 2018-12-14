<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class BannersMigration_100
 */
class BannersMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('banners', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 28,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_banner',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'src_banner',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 200,
                            'after' => 'id_banner'
                        ]
                    ),
                    new Column(
                        'dataini',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'src_banner'
                        ]
                    ),
                    new Column(
                        'datafim',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'dataini'
                        ]
                    ),
                    new Column(
                        'cod_uf',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 28,
                            'after' => 'datafim'
                        ]
                    ),
                    new Column(
                        'cod_cidade',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 28,
                            'after' => 'cod_uf'
                        ]
                    ),
                    new Column(
                        'filial_especifica',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'cod_cidade'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 10,
                            'after' => 'filial_especifica'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'log_data'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('banners_index00', ['recnum'], null),
                    new Index('banners_index01', ['id_banner'], null)
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
