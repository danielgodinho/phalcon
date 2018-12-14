<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class SerasacnpjMigration_100
 */
class SerasacnpjMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('serasacnpj', [
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
                        'id_serasa_cnpj',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'sn_cnpj',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 18,
                            'after' => 'id_serasa_cnpj'
                        ]
                    ),
                    new Column(
                        'sn_razaosocial',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 155,
                            'after' => 'sn_cnpj'
                        ]
                    ),
                    new Column(
                        'sn_situacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 150,
                            'after' => 'sn_razaosocial'
                        ]
                    ),
                    new Column(
                        'data_inclusao',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'sn_situacao'
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
                        'ibgd_codibge',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'data_expiracao'
                        ]
                    ),
                    new Column(
                        'ibge_codufibge',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'ibgd_codibge'
                        ]
                    ),
                    new Column(
                        'sint_numero_consulta',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'ibge_codufibge'
                        ]
                    ),
                    new Column(
                        'sint_data_situacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'sint_numero_consulta'
                        ]
                    ),
                    new Column(
                        'sint_cod_atividade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'sint_data_situacao'
                        ]
                    ),
                    new Column(
                        'sint_numero',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'sint_cod_atividade'
                        ]
                    ),
                    new Column(
                        'sint_data_baixa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'sint_numero'
                        ]
                    ),
                    new Column(
                        'sint_cnpj',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'sint_data_baixa'
                        ]
                    ),
                    new Column(
                        'sint_uf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'sint_cnpj'
                        ]
                    ),
                    new Column(
                        'sint_telefone',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'sint_uf'
                        ]
                    ),
                    new Column(
                        'sint_nome_fantasia',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 200,
                            'after' => 'sint_telefone'
                        ]
                    ),
                    new Column(
                        'sint_regime_pagamento',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 200,
                            'after' => 'sint_nome_fantasia'
                        ]
                    ),
                    new Column(
                        'sint_bairro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 200,
                            'after' => 'sint_regime_pagamento'
                        ]
                    ),
                    new Column(
                        'sint_motivo_baixa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 200,
                            'after' => 'sint_bairro'
                        ]
                    ),
                    new Column(
                        'sint_municipio',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 150,
                            'after' => 'sint_motivo_baixa'
                        ]
                    ),
                    new Column(
                        'sint_ativ_economica',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 200,
                            'after' => 'sint_municipio'
                        ]
                    ),
                    new Column(
                        'sint_logradouro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 200,
                            'after' => 'sint_ativ_economica'
                        ]
                    ),
                    new Column(
                        'sint_cep',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'sint_logradouro'
                        ]
                    ),
                    new Column(
                        'sint_situacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'sint_cep'
                        ]
                    ),
                    new Column(
                        'sint_inscr_estadual',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'sint_situacao'
                        ]
                    ),
                    new Column(
                        'sint_data_consulta',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'sint_inscr_estadual'
                        ]
                    ),
                    new Column(
                        'sint_apuracao_icms',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 80,
                            'after' => 'sint_data_consulta'
                        ]
                    ),
                    new Column(
                        'sint_complemento',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'sint_apuracao_icms'
                        ]
                    ),
                    new Column(
                        'sint_razao_social',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'sint_complemento'
                        ]
                    ),
                    new Column(
                        'rf_cnpj',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 18,
                            'after' => 'sint_razao_social'
                        ]
                    ),
                    new Column(
                        'rf_dataabertura',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'rf_cnpj'
                        ]
                    ),
                    new Column(
                        'rf_nome',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'rf_dataabertura'
                        ]
                    ),
                    new Column(
                        'rf_nomefantasia',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'rf_nome'
                        ]
                    ),
                    new Column(
                        'rf_cod_ativ_principal',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'rf_nomefantasia'
                        ]
                    ),
                    new Column(
                        'rf_desc_ativ_principal',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'rf_cod_ativ_principal'
                        ]
                    ),
                    new Column(
                        'rf_cod_ativ_secund',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'rf_desc_ativ_principal'
                        ]
                    ),
                    new Column(
                        'rf_desc_ativ_secund',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'rf_cod_ativ_secund'
                        ]
                    ),
                    new Column(
                        'rf_cod_ativ_juri',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'rf_desc_ativ_secund'
                        ]
                    ),
                    new Column(
                        'rf_desc_ativ_juri',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'rf_cod_ativ_juri'
                        ]
                    ),
                    new Column(
                        'rf_cod_natureza_juri',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'rf_desc_ativ_juri'
                        ]
                    ),
                    new Column(
                        'rf_desc_natureza_juri',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'rf_cod_natureza_juri'
                        ]
                    ),
                    new Column(
                        'rf_logradouro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 130,
                            'after' => 'rf_desc_natureza_juri'
                        ]
                    ),
                    new Column(
                        'rf_numero',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'rf_logradouro'
                        ]
                    ),
                    new Column(
                        'rf_complemento',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 70,
                            'after' => 'rf_numero'
                        ]
                    ),
                    new Column(
                        'rf_cep',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'rf_complemento'
                        ]
                    ),
                    new Column(
                        'rf_bairro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'rf_cep'
                        ]
                    ),
                    new Column(
                        'rf_municipio',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'rf_bairro'
                        ]
                    ),
                    new Column(
                        'rf_uf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'rf_municipio'
                        ]
                    ),
                    new Column(
                        'rf_situacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'rf_uf'
                        ]
                    ),
                    new Column(
                        'rf_datasituacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'rf_situacao'
                        ]
                    ),
                    new Column(
                        'rf_situacaoespecial',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'rf_datasituacao'
                        ]
                    ),
                    new Column(
                        'rf_dataespecial',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'rf_situacaoespecial'
                        ]
                    ),
                    new Column(
                        'rf_motivosituacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 80,
                            'after' => 'rf_dataespecial'
                        ]
                    ),
                    new Column(
                        'rf_data',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'rf_motivosituacao'
                        ]
                    ),
                    new Column(
                        'rf_hora',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'rf_data'
                        ]
                    ),
                    new Column(
                        'rf_consulta',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'rf_hora'
                        ]
                    ),
                    new Column(
                        'ccf_quantidade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 5,
                            'after' => 'rf_consulta'
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
                        'porte',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
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
                            'after' => 'porte'
                        ]
                    ),
                    new Column(
                        'indicadoroperacionalidade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'triagemrisco'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'indicadoroperacionalidade'
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
                    new Index('serasacnpj_index00', ['recnum'], null),
                    new Index('serasacnpj_index01', ['id_serasa_cnpj'], null),
                    new Index('serasacnpj_index02', ['sn_cnpj'], null)
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
