<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Sfpa187Migration_100
 */
class Sfpa187Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('sfpa187', [
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
                        'filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'funcionario',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'tipo_folha',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'funcionario'
                        ]
                    ),
                    new Column(
                        'codigo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'tipo_folha'
                        ]
                    ),
                    new Column(
                        'ano',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'codigo'
                        ]
                    ),
                    new Column(
                        'ano_invd',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'ano'
                        ]
                    ),
                    new Column(
                        'mes',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ano_invd'
                        ]
                    ),
                    new Column(
                        'mes_invd',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'mes'
                        ]
                    ),
                    new Column(
                        'quantidade',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 18,
                            'scale' => 4,
                            'after' => 'mes_invd'
                        ]
                    ),
                    new Column(
                        'valor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 16,
                            'scale' => 2,
                            'after' => 'quantidade'
                        ]
                    ),
                    new Column(
                        'calculado',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 16,
                            'scale' => 2,
                            'after' => 'valor'
                        ]
                    ),
                    new Column(
                        'data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'calculado'
                        ]
                    ),
                    new Column(
                        'hora',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'data'
                        ]
                    ),
                    new Column(
                        'ordem',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'hora'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('sfpa187_index00', ['recnum'], null),
                    new Index('sfpa187_index01', ['codigo', 'ano', 'tipo_folha', 'filial', 'mes', 'funcionario'], null),
                    new Index('sfpa187_index02', ['codigo', 'filial', 'funcionario', 'tipo_folha', 'ano', 'mes'], null),
                    new Index('sfpa187_index03', ['recnum', 'filial', 'funcionario', 'tipo_folha', 'codigo', 'ano', 'mes', 'ordem'], null),
                    new Index('sfpa187_index04', ['codigo', 'recnum', 'filial', 'funcionario', 'tipo_folha', 'ano', 'mes', 'ordem'], null),
                    new Index('sfpa187_index05', ['recnum', 'funcionario', 'tipo_folha', 'codigo', 'ano', 'mes', 'ordem'], null),
                    new Index('sfpa187_index06', ['recnum', 'funcionario', 'tipo_folha', 'codigo', 'ano_invd', 'mes_invd', 'ordem'], null),
                    new Index('sfpa187_index07', ['recnum', 'funcionario', 'tipo_folha', 'codigo', 'ano', 'mes', 'ordem'], null)
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
