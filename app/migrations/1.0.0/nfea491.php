<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Nfea491Migration_100
 */
class Nfea491Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('nfea491', [
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
                        'serie',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'nota',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'serie'
                        ]
                    ),
                    new Column(
                        'nota1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'nota'
                        ]
                    ),
                    new Column(
                        'ref_cli_fil',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'nota1'
                        ]
                    ),
                    new Column(
                        'ref_cli_ser',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'ref_cli_fil'
                        ]
                    ),
                    new Column(
                        'ref_cli_nota',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'ref_cli_ser'
                        ]
                    ),
                    new Column(
                        'ref_cli_nota1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ref_cli_nota'
                        ]
                    ),
                    new Column(
                        'ref_tipo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ref_cli_nota1'
                        ]
                    ),
                    new Column(
                        'nfe_chv_atual',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 44,
                            'after' => 'ref_tipo'
                        ]
                    ),
                    new Column(
                        'nfe_chv_ref',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 44,
                            'after' => 'nfe_chv_atual'
                        ]
                    ),
                    new Column(
                        'nfe_uf_emit',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'nfe_chv_ref'
                        ]
                    ),
                    new Column(
                        'nfe_emissao',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nfe_uf_emit'
                        ]
                    ),
                    new Column(
                        'nfe_cgc_emit',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'nfe_emissao'
                        ]
                    ),
                    new Column(
                        'nfe_modelo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'nfe_cgc_emit'
                        ]
                    ),
                    new Column(
                        'nfe_serie',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'nfe_modelo'
                        ]
                    ),
                    new Column(
                        'nfe_numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'nfe_serie'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'nfe_numero'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'log_data'
                        ]
                    ),
                    new Column(
                        'tipo_devol',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'log_hora'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('nfea491_index00', ['recnum'], null),
                    new Index('nfea491_index01', ['nota', 'filial', 'nota1', 'serie', 'ref_cli_ser', 'ref_cli_nota', 'ref_cli_nota1', 'ref_cli_fil'], null),
                    new Index('nfea491_index02', ['nota', 'filial', 'serie', 'nota1'], null),
                    new Index('nfea491_index03', ['filial', 'serie', 'nota', 'nota1', 'ref_cli_fil', 'ref_cli_ser', 'ref_cli_nota', 'ref_cli_nota1'], null),
                    new Index('nfea491_index04', ['recnum', 'log_data'], null)
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
