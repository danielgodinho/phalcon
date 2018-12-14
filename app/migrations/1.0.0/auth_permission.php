<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class AuthPermissionMigration_100
 */
class AuthPermissionMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('auth_permission', [
                'columns' => [
                    new Column(
                        'id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 32,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'name',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 255,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'content_type_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'name'
                        ]
                    ),
                    new Column(
                        'codename',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'content_type_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('auth_permission_content_type_id_2f476e4b', ['content_type_id'], null),
                    new Index('auth_permission_content_type_id_codename_01ab375a_uniq', ['content_type_id', 'codename'], null),
                    new Index('auth_permission_pkey', ['id'], null)
                ],
                'references' => [
                    new Reference(
                        'auth_permission_content_type_id_2f476e4b_fk_django_co',
                        [
                            'referencedTable' => 'django_content_type',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['content_type_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => '',
                            'onDelete' => ''
                        ]
                    )
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
