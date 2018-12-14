<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class SystemPerfilUsuarioMigration_100
 */
class SystemPerfilUsuarioMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('system_perfil_usuario', [
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
                        'id_perfil_usuario',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'default' => "currval('system_perfil_usuario_dfseq'::regclass)",
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'id_perfil',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'id_perfil_usuario'
                        ]
                    ),
                    new Column(
                        'id_usuario',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'id_perfil'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'id_usuario'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'log_data'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('system_perfil_usuario_index00', ['recnum'], null),
                    new Index('system_perfil_usuario_index01', ['id_perfil_usuario', 'id_perfil', 'id_usuario'], null)
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
