<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class AuthUserUserPermissionsMigration_100
 */
class AuthUserUserPermissionsMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('auth_user_user_permissions', [
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
                        'user_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'permission_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'user_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('auth_user_user_permissions_permission_id_1fbb5f2c', ['permission_id'], null),
                    new Index('auth_user_user_permissions_pkey', ['id'], null),
                    new Index('auth_user_user_permissions_user_id_a95ead1b', ['user_id'], null),
                    new Index('auth_user_user_permissions_user_id_permission_id_14a6b632_uniq', ['user_id', 'permission_id'], null)
                ],
                'references' => [
                    new Reference(
                        'auth_user_user_permissions_user_id_a95ead1b_fk_auth_user_id',
                        [
                            'referencedTable' => 'auth_user',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['user_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => '',
                            'onDelete' => ''
                        ]
                    ),
                    new Reference(
                        'auth_user_user_permi_permission_id_1fbb5f2c_fk_auth_perm',
                        [
                            'referencedTable' => 'auth_permission',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['permission_id'],
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
