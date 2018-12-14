<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Rconest02Migration_100
 */
class Rconest02Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('rconest02', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "nextval(('"public"."rconest02_dfseq"'::text)::regclass)",
                            'notNull' => true,
                            'size' => 10,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_reconta',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'id_recon_item',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'id_reconta'
                        ]
                    ),
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'id_recon_item'
                        ]
                    ),
                    new Column(
                        'fornecedor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'produto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'fornecedor'
                        ]
                    ),
                    new Column(
                        'qtd_conferida',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 5,
                            'after' => 'produto'
                        ]
                    ),
                    new Column(
                        'dt_inicio',
                        [
                            'type' => Column::TYPE_DATE,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'qtd_conferida'
                        ]
                    ),
                    new Column(
                        'dt_fim',
                        [
                            'type' => Column::TYPE_DATE,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'dt_inicio'
                        ]
                    ),
                    new Column(
                        'situacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'dt_fim'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'situacao'
                        ]
                    ),
                    new Column(
                        'log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'qtd_est_ini',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 4,
                            'after' => 'log_data'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('rconest02_index00', ['recnum'], null),
                    new Index('rconest02_index01', ['id_recon_item'], null),
                    new Index('rconest02_index02', ['id_reconta', 'id_recon_item'], null)
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
