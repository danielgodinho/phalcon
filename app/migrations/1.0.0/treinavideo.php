<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class TreinavideoMigration_100
 */
class TreinavideoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('treinavideo', [
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
                        'id_video',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'nome_video',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'id_video'
                        ]
                    ),
                    new Column(
                        'src_video',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'nome_video'
                        ]
                    ),
                    new Column(
                        'ext_video',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'src_video'
                        ]
                    ),
                    new Column(
                        'mime_video',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'ext_video'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'mime_video'
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
                    new Index('treinavideo_index00', ['recnum'], null),
                    new Index('treinavideo_index01', ['id_video'], null)
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
