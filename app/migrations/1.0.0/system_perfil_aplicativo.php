<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class SystemPerfilAplicativoMigration_100
 */
class SystemPerfilAplicativoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('system_perfil_aplicativo', [
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
                        'id_perfil_aplicativo',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'default' => "currval('system_perfil_aplicativo_dfseq'::regclass)",
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'id_aplicativo',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'id_perfil_aplicativo'
                        ]
                    ),
                    new Column(
                        'id_perfil',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'id_aplicativo'
                        ]
                    ),
                    new Column(
                        'perm_add',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'id_perfil'
                        ]
                    ),
                    new Column(
                        'perm_edit',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'perm_add'
                        ]
                    ),
                    new Column(
                        'perm_view',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'perm_edit'
                        ]
                    ),
                    new Column(
                        'perm_dell',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'perm_view'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'perm_dell'
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
                    new Index('system_perfil_aplicativo_index00', ['recnum'], null),
                    new Index('system_perfil_aplicativo_index01', ['id_perfil_aplicativo', 'id_aplicativo', 'id_perfil'], null)
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
