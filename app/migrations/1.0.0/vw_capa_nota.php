<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class VwCapaNotaMigration_100
 */
class VwCapaNotaMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('vw_capa_nota', [
                'columns' => [
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 2,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'vendedor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'numero'
                        ]
                    ),
                    new Column(
                        'autorizacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'vendedor'
                        ]
                    ),
                    new Column(
                        'os_numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'autorizacao'
                        ]
                    ),
                    new Column(
                        'cliente_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 2,
                            'after' => 'os_numero'
                        ]
                    ),
                    new Column(
                        'cliente_cod',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 8,
                            'after' => 'cliente_emp'
                        ]
                    ),
                    new Column(
                        'observacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'cliente_cod'
                        ]
                    ),
                    new Column(
                        'observacao1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'observacao'
                        ]
                    ),
                    new Column(
                        'observacao2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'observacao1'
                        ]
                    ),
                    new Column(
                        'numorcorigem',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'observacao2'
                        ]
                    ),
                    new Column(
                        'condicao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'numorcorigem'
                        ]
                    ),
                    new Column(
                        'operacao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'condicao'
                        ]
                    ),
                    new Column(
                        'transportador',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'operacao'
                        ]
                    ),
                    new Column(
                        'peso_bruto',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'transportador'
                        ]
                    ),
                    new Column(
                        'peso_liquido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'peso_bruto'
                        ]
                    ),
                    new Column(
                        'filial_destino',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 1,
                            'after' => 'peso_liquido'
                        ]
                    ),
                    new Column(
                        'modelo',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 32,
                            'after' => 'filial_destino'
                        ]
                    ),
                    new Column(
                        'fil_uf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 2,
                            'after' => 'modelo'
                        ]
                    ),
                    new Column(
                        'cli_uf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 2,
                            'after' => 'fil_uf'
                        ]
                    ),
                    new Column(
                        'cli_contribuinte',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'cli_uf'
                        ]
                    ),
                    new Column(
                        'cli_industria',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'cli_contribuinte'
                        ]
                    ),
                    new Column(
                        'emissao_pedido',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'cli_industria'
                        ]
                    ),
                    new Column(
                        'tpreg',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'emissao_pedido'
                        ]
                    ),
                    new Column(
                        'fil_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 2,
                            'after' => 'tpreg'
                        ]
                    ),
                    new Column(
                        'numcliente',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'fil_emp'
                        ]
                    ),
                    new Column(
                        'fil_oper_isenta',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'numcliente'
                        ]
                    ),
                    new Column(
                        'cli_oper_isenta',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'fil_oper_isenta'
                        ]
                    ),
                    new Column(
                        'uf_livre_comercio',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'cli_oper_isenta'
                        ]
                    ),
                    new Column(
                        'coligada',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'uf_livre_comercio'
                        ]
                    ),
                    new Column(
                        'desc_piscof',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'coligada'
                        ]
                    ),
                    new Column(
                        'produtor_rural',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'desc_piscof'
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
