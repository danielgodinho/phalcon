<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class AuthUserMigration_100
 */
class AuthUserMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('auth_user', [
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
                        'password',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 128,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'last_login',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'password'
                        ]
                    ),
                    new Column(
                        'is_superuser',
                        [
                            'type' => Column::TYPE_BOOLEAN,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'last_login'
                        ]
                    ),
                    new Column(
                        'username',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 150,
                            'after' => 'is_superuser'
                        ]
                    ),
                    new Column(
                        'first_name',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'username'
                        ]
                    ),
                    new Column(
                        'last_name',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 150,
                            'after' => 'first_name'
                        ]
                    ),
                    new Column(
                        'email',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 254,
                            'after' => 'last_name'
                        ]
                    ),
                    new Column(
                        'is_staff',
                        [
                            'type' => Column::TYPE_BOOLEAN,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'email'
                        ]
                    ),
                    new Column(
                        'is_active',
                        [
                            'type' => Column::TYPE_BOOLEAN,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'is_staff'
                        ]
                    ),
                    new Column(
                        'date_joined',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'is_active'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('auth_user_pkey', ['id'], null),
                    new Index('auth_user_username_6821ab7c_like', ['username'], null),
                    new Index('auth_user_username_key', ['username'], null)
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
