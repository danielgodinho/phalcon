<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class AuthUserGroupsMigration_100
 */
class AuthUserGroupsMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('auth_user_groups', [
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
                        'group_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'user_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('auth_user_groups_group_id_97559544', ['group_id'], null),
                    new Index('auth_user_groups_pkey', ['id'], null),
                    new Index('auth_user_groups_user_id_6a12ed8b', ['user_id'], null),
                    new Index('auth_user_groups_user_id_group_id_94350c0c_uniq', ['user_id', 'group_id'], null)
                ],
                'references' => [
                    new Reference(
                        'auth_user_groups_user_id_6a12ed8b_fk_auth_user_id',
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
                        'auth_user_groups_group_id_97559544_fk_auth_group_id',
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
