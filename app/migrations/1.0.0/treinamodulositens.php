<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class TreinamodulositensMigration_100
 */
class TreinamodulositensMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('treinamodulositens', [
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
                        'id_modulo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'id_modulo_item',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'id_modulo'
                        ]
                    ),
                    new Column(
                        'id_video',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 28,
                            'after' => 'id_modulo_item'
                        ]
                    ),
                    new Column(
                        'descricao_item',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'id_video'
                        ]
                    ),
                    new Column(
                        'indice',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'descricao_item'
                        ]
                    ),
                    new Column(
                        'percentual_acerto',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'indice'
                        ]
                    ),
                    new Column(
                        'qtde_questoes',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'percentual_acerto'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'qtde_questoes'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
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
                    new Index('treinamodulositens_index00', ['recnum'], null),
                    new Index('treinamodulositens_index01', ['id_modulo', 'id_modulo_item'], null)
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
