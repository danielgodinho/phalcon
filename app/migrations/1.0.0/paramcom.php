<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class ParamcomMigration_100
 */
class ParamcomMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('paramcom', [
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
                        'caminho_exp',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'caminho_imp',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'caminho_exp'
                        ]
                    ),
                    new Column(
                        'caminho_exp_bkp',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'caminho_imp'
                        ]
                    ),
                    new Column(
                        'caminho_imp_bkp',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'caminho_exp_bkp'
                        ]
                    ),
                    new Column(
                        'make_dir',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'caminho_imp_bkp'
                        ]
                    ),
                    new Column(
                        'remove_dir',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'make_dir'
                        ]
                    ),
                    new Column(
                        'comprimir',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'remove_dir'
                        ]
                    ),
                    new Column(
                        'descomprimir',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'comprimir'
                        ]
                    ),
                    new Column(
                        'copiar_arq',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'descomprimir'
                        ]
                    ),
                    new Column(
                        'excluir_arq',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'copiar_arq'
                        ]
                    ),
                    new Column(
                        'mover_arq',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'excluir_arq'
                        ]
                    ),
                    new Column(
                        'listar_arq',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'mover_arq'
                        ]
                    ),
                    new Column(
                        'sufixo1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'listar_arq'
                        ]
                    ),
                    new Column(
                        'sufixo2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'sufixo1'
                        ]
                    ),
                    new Column(
                        'sufixo_juncao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'sufixo2'
                        ]
                    ),
                    new Column(
                        'todos_arq',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'sufixo_juncao'
                        ]
                    ),
                    new Column(
                        'compactar',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'todos_arq'
                        ]
                    ),
                    new Column(
                        'descompactar',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'compactar'
                        ]
                    ),
                    new Column(
                        'arquivao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'descompactar'
                        ]
                    ),
                    new Column(
                        'ult_exportacao',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'arquivao'
                        ]
                    ),
                    new Column(
                        'qtd_exp_dia',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'ult_exportacao'
                        ]
                    ),
                    new Column(
                        'comando_disco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'qtd_exp_dia'
                        ]
                    ),
                    new Column(
                        'comando_fita',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'comando_disco'
                        ]
                    ),
                    new Column(
                        'comando_modem',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'comando_fita'
                        ]
                    ),
                    new Column(
                        'com_ler_disco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'comando_modem'
                        ]
                    ),
                    new Column(
                        'com_ler_fita',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'com_ler_disco'
                        ]
                    ),
                    new Column(
                        'com_bx_disco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'com_ler_fita'
                        ]
                    ),
                    new Column(
                        'com_bx_fita',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'com_bx_disco'
                        ]
                    ),
                    new Column(
                        'com_bx_modem',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'com_bx_fita'
                        ]
                    ),
                    new Column(
                        'com_ler_compac',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'com_bx_modem'
                        ]
                    ),
                    new Column(
                        'cam_doc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'com_ler_compac'
                        ]
                    ),
                    new Column(
                        'cam_err',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'cam_doc'
                        ]
                    ),
                    new Column(
                        'cam_arq_id',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'cam_err'
                        ]
                    ),
                    new Column(
                        'arq_idreg',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'cam_arq_id'
                        ]
                    ),
                    new Column(
                        'arq_idexp',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'arq_idreg'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('paramcom_index00', ['recnum'], null)
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
