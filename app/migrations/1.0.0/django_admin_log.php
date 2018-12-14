<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class DjangoAdminLogMigration_100
 */
class DjangoAdminLogMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('django_admin_log', [
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
                        'action_time',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'object_id',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'action_time'
                        ]
                    ),
                    new Column(
                        'object_repr',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 200,
                            'after' => 'object_id'
                        ]
                    ),
                    new Column(
                        'action_flag',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 16,
                            'after' => 'object_repr'
                        ]
                    ),
                    new Column(
                        'change_message',
                        [
                            'type' => Column::TYPE_TEXT,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'action_flag'
                        ]
                    ),
                    new Column(
                        'content_type_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'change_message'
                        ]
                    ),
                    new Column(
                        'user_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'content_type_id'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('django_admin_log_content_type_id_c4bce8eb', ['content_type_id'], null),
                    new Index('django_admin_log_pkey', ['id'], null),
                    new Index('django_admin_log_user_id_c564eba6', ['user_id'], null)
                ],
                'references' => [
                    new Reference(
                        'django_admin_log_user_id_c564eba6_fk_auth_user_id',
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
                        'django_admin_log_content_type_id_c4bce8eb_fk_django_co',
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
