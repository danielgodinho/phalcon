<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class AuthGroupPermissionsMigration_100
 */
class AuthGroupPermissionsMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('auth_group_permissions', [
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
                        'group_id',
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
                            'after' => 'group_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('auth_group_permissions_group_id_b120cbf9', ['group_id'], null),
                    new Index('auth_group_permissions_group_id_permission_id_0cd325b0_uniq', ['group_id', 'permission_id'], null),
                    new Index('auth_group_permissions_permission_id_84c5c92e', ['permission_id'], null),
                    new Index('auth_group_permissions_pkey', ['id'], null)
                ],
                'references' => [
                    new Reference(
                        'auth_group_permissio_permission_id_84c5c92e_fk_auth_perm',
                        [
                            'referencedTable' => 'auth_permission',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['permission_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => '',
                            'onDelete' => ''
                        ]
                    ),
                    new Reference(
                        'auth_group_permissions_group_id_b120cbf9_fk_auth_group_id',
                        [
                            'referencedTable' => 'auth_group',
                            'referencedSchema' => 'pgfil',
                            'columns' => ['group_id'],
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
