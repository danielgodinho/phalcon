<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class InutilizacoesNfceMigration_100
 */
class InutilizacoesNfceMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('inutilizacoes_nfce', [
                'columns' => [
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_DOUBLE,
                            'notNull' => true,
                            'size' => 53,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'serie',
                        [
                            'type' => Column::TYPE_DOUBLE,
                            'notNull' => true,
                            'size' => 53,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'num_ini',
                        [
                            'type' => Column::TYPE_DOUBLE,
                            'notNull' => true,
                            'size' => 53,
                            'after' => 'serie'
                        ]
                    ),
                    new Column(
                        'num_fim',
                        [
                            'type' => Column::TYPE_DOUBLE,
                            'notNull' => true,
                            'size' => 53,
                            'after' => 'num_ini'
                        ]
                    ),
                    new Column(
                        'status_inut',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'num_fim'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('inutilizacoes_nfce_pkey', ['filial', 'serie', 'num_ini', 'num_fim'], null)
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
