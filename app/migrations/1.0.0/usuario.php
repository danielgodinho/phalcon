<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class UsuarioMigration_100
 */
class UsuarioMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('usuario', [
                'columns' => [
                    new Column(
                        'codperfilacesso',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'senha',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 70,
                            'after' => 'codperfilacesso'
                        ]
                    ),
                    new Column(
                        'username',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'senha'
                        ]
                    ),
                    new Column(
                        'nome',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'username'
                        ]
                    ),
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'nome'
                        ]
                    ),
                    new Column(
                        'ip',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 15,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'dataultimoacesso',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'ip'
                        ]
                    ),
                    new Column(
                        'servidorpabx',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 15,
                            'after' => 'dataultimoacesso'
                        ]
                    ),
                    new Column(
                        'usuariopabx',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 15,
                            'after' => 'servidorpabx'
                        ]
                    ),
                    new Column(
                        'ramalpabx',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 10,
                            'after' => 'usuariopabx'
                        ]
                    ),
                    new Column(
                        'matriculausuariopabx',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 10,
                            'after' => 'ramalpabx'
                        ]
                    ),
                    new Column(
                        'sipidpabx',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 35,
                            'after' => 'matriculausuariopabx'
                        ]
                    ),
                    new Column(
                        'senhapabx',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 15,
                            'after' => 'sipidpabx'
                        ]
                    ),
                    new Column(
                        'codigo',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 32,
                            'after' => 'senhapabx'
                        ]
                    ),
                    new Column(
                        'administrador',
                        [
                            'type' => Column::TYPE_BOOLEAN,
                            'size' => 1,
                            'after' => 'codigo'
                        ]
                    ),
                    new Column(
                        'televendas',
                        [
                            'type' => Column::TYPE_BOOLEAN,
                            'size' => 1,
                            'after' => 'administrador'
                        ]
                    ),
                    new Column(
                        'televendasmultilojas',
                        [
                            'type' => Column::TYPE_BOOLEAN,
                            'size' => 1,
                            'after' => 'televendas'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('codigo_pk', ['codigo'], null),
                    new Index('usuario_nome_key', ['nome'], null),
                    new Index('usuario_username_key', ['username'], null)
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
