<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class PermissaoMigration_100
 */
class PermissaoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('permissao', [
                'columns' => [
                    new Column(
                        'valorfinal',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'valorinicial',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'valorfinal'
                        ]
                    ),
                    new Column(
                        'valorespecifico',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'valorinicial'
                        ]
                    ),
                    new Column(
                        'tipopermissao',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'valorespecifico'
                        ]
                    ),
                    new Column(
                        'tituloapresentacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'tipopermissao'
                        ]
                    ),
                    new Column(
                        'permissoes',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 30,
                            'after' => 'tituloapresentacao'
                        ]
                    ),
                    new Column(
                        'nomeentidade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 60,
                            'after' => 'permissoes'
                        ]
                    ),
                    new Column(
                        'codperfilacesso',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 32,
                            'after' => 'nomeentidade'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('ch_permissao_tituloapresentacao', ['tituloapresentacao'], null),
                    new Index('permissao_pkey', ['nomeentidade', 'codperfilacesso'], null)
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
