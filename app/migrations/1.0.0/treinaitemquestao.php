<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class TreinaitemquestaoMigration_100
 */
class TreinaitemquestaoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('treinaitemquestao', [
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
                        'id_questao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'id_resposta',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'id_questao'
                        ]
                    ),
                    new Column(
                        'resposta',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'id_resposta'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'resposta'
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
                    new Index('treinaitemquestao_index00', ['recnum'], null),
                    new Index('treinaitemquestao_index01', ['id_questao', 'id_resposta'], null)
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
