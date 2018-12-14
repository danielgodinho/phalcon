<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class SerasacpfMigration_100
 */
class SerasacpfMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('serasacpf', [
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
                            'size' => 3,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'id_serasa_cpf',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'cad_cpf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'id_serasa_cpf'
                        ]
                    ),
                    new Column(
                        'cad_nome',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'cad_cpf'
                        ]
                    ),
                    new Column(
                        'data_inclusao',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cad_nome'
                        ]
                    ),
                    new Column(
                        'data_expiracao',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'data_inclusao'
                        ]
                    ),
                    new Column(
                        'cad_estado_civil',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'data_expiracao'
                        ]
                    ),
                    new Column(
                        'cad_sexo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'cad_estado_civil'
                        ]
                    ),
                    new Column(
                        'cad_email',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 60,
                            'after' => 'cad_sexo'
                        ]
                    ),
                    new Column(
                        'cad_nome_mae',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'cad_email'
                        ]
                    ),
                    new Column(
                        'cad_codigo_mosaic',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 13,
                            'after' => 'cad_nome_mae'
                        ]
                    ),
                    new Column(
                        'cad_codigo_profissao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'cad_codigo_mosaic'
                        ]
                    ),
                    new Column(
                        'cad_profissao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 150,
                            'after' => 'cad_codigo_profissao'
                        ]
                    ),
                    new Column(
                        'cad_renda_resumida',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'cad_profissao'
                        ]
                    ),
                    new Column(
                        'sit_situacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'cad_renda_resumida'
                        ]
                    ),
                    new Column(
                        'sit_codigo_controle',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'sit_situacao'
                        ]
                    ),
                    new Column(
                        'sit_data',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'sit_codigo_controle'
                        ]
                    ),
                    new Column(
                        'sit_hora',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'sit_data'
                        ]
                    ),
                    new Column(
                        'sit_fonte_pesquisada',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'sit_hora'
                        ]
                    ),
                    new Column(
                        'ccf_quantidade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 5,
                            'after' => 'sit_fonte_pesquisada'
                        ]
                    ),
                    new Column(
                        'ccf_periodo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'ccf_quantidade'
                        ]
                    ),
                    new Column(
                        'ccf_ocor_mais_recente_valor',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'ccf_periodo'
                        ]
                    ),
                    new Column(
                        'ccf_ocor_mais_recente_origem',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'ccf_ocor_mais_recente_valor'
                        ]
                    ),
                    new Column(
                        'pep_flag',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'ccf_ocor_mais_recente_origem'
                        ]
                    ),
                    new Column(
                        'triagemrisco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'pep_flag'
                        ]
                    ),
                    new Column(
                        'escolaridade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'triagemrisco'
                        ]
                    ),
                    new Column(
                        'afinidadecartaodecredito',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'escolaridade'
                        ]
                    ),
                    new Column(
                        'afinidadecreditoconsignado',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'afinidadecartaodecredito'
                        ]
                    ),
                    new Column(
                        'afinidadeartigoluxo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'afinidadecreditoconsignado'
                        ]
                    ),
                    new Column(
                        'afinidadecelularpospago',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'afinidadeartigoluxo'
                        ]
                    ),
                    new Column(
                        'afinidadeimobiliario',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'afinidadecelularpospago'
                        ]
                    ),
                    new Column(
                        'afinidadetvassinatura',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'afinidadeimobiliario'
                        ]
                    ),
                    new Column(
                        'afinidadebandalarga',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'afinidadetvassinatura'
                        ]
                    ),
                    new Column(
                        'afinidadepacoteturistico',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'afinidadebandalarga'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'afinidadepacoteturistico'
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
                    )
                ],
                'indexes' => [
                    new Index('serasacpf_index00', ['recnum'], null),
                    new Index('serasacpf_index01', ['id_serasa_cpf'], null)
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
