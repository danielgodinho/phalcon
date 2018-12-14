<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Ags022Migration_100
 */
class Ags022Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('ags022', [
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
                        'codigo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'nome_fantasia',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'codigo'
                        ]
                    ),
                    new Column(
                        'razao_social',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'nome_fantasia'
                        ]
                    ),
                    new Column(
                        'endereco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 40,
                            'after' => 'razao_social'
                        ]
                    ),
                    new Column(
                        'bairro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'endereco'
                        ]
                    ),
                    new Column(
                        'cidade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'bairro'
                        ]
                    ),
                    new Column(
                        'estado',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'cidade'
                        ]
                    ),
                    new Column(
                        'cep',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'estado'
                        ]
                    ),
                    new Column(
                        'cgc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'cep'
                        ]
                    ),
                    new Column(
                        'ddd',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'cgc'
                        ]
                    ),
                    new Column(
                        'telefone',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'ddd'
                        ]
                    ),
                    new Column(
                        'fax',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'telefone'
                        ]
                    ),
                    new Column(
                        'inscricao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'fax'
                        ]
                    ),
                    new Column(
                        'inscricao_munic',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'inscricao'
                        ]
                    ),
                    new Column(
                        'nf_numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'inscricao_munic'
                        ]
                    ),
                    new Column(
                        'nf_modelo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'nf_numero'
                        ]
                    ),
                    new Column(
                        'nf_online',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'nf_modelo'
                        ]
                    ),
                    new Column(
                        'os_numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'nf_online'
                        ]
                    ),
                    new Column(
                        'os_modelo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'os_numero'
                        ]
                    ),
                    new Column(
                        'fatura_numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'os_modelo'
                        ]
                    ),
                    new Column(
                        'localpagto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'fatura_numero'
                        ]
                    ),
                    new Column(
                        'cadastro_client',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'localpagto'
                        ]
                    ),
                    new Column(
                        'cadastro_fornec',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'cadastro_client'
                        ]
                    ),
                    new Column(
                        'regjuntacom',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'cadastro_fornec'
                        ]
                    ),
                    new Column(
                        'fatura_modelo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'regjuntacom'
                        ]
                    ),
                    new Column(
                        'empresa',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'fatura_modelo'
                        ]
                    ),
                    new Column(
                        'folha_mensagem',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'empresa'
                        ]
                    ),
                    new Column(
                        'folha_mensagem1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'folha_mensagem'
                        ]
                    ),
                    new Column(
                        'folha_mensagem2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'folha_mensagem1'
                        ]
                    ),
                    new Column(
                        'fator_preco',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 8,
                            'after' => 'folha_mensagem2'
                        ]
                    ),
                    new Column(
                        'fgts',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 7,
                            'after' => 'fator_preco'
                        ]
                    ),
                    new Column(
                        'pedido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'fgts'
                        ]
                    ),
                    new Column(
                        'modelo1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'pedido'
                        ]
                    ),
                    new Column(
                        'modelo2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'modelo1'
                        ]
                    ),
                    new Column(
                        'modelo3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'modelo2'
                        ]
                    ),
                    new Column(
                        'modelo4',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'modelo3'
                        ]
                    ),
                    new Column(
                        'modelo5',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'modelo4'
                        ]
                    ),
                    new Column(
                        'modelo6',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'modelo5'
                        ]
                    ),
                    new Column(
                        'modelo7',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'modelo6'
                        ]
                    ),
                    new Column(
                        'modelo8',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'modelo7'
                        ]
                    ),
                    new Column(
                        'modelo9',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'modelo8'
                        ]
                    ),
                    new Column(
                        'uucp',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'modelo9'
                        ]
                    ),
                    new Column(
                        'uucp_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'uucp'
                        ]
                    ),
                    new Column(
                        'uucp_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'uucp_data'
                        ]
                    ),
                    new Column(
                        'pedido_compra',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'uucp_hora'
                        ]
                    ),
                    new Column(
                        'cliente',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'pedido_compra'
                        ]
                    ),
                    new Column(
                        'fornecedor',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'cliente'
                        ]
                    ),
                    new Column(
                        'fornecedor_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'fornecedor'
                        ]
                    ),
                    new Column(
                        'fornecedor_cod',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'fornecedor_emp'
                        ]
                    ),
                    new Column(
                        'cliente_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'fornecedor_cod'
                        ]
                    ),
                    new Column(
                        'cliente_cod',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'cliente_emp'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'cliente_cod'
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
                        'destinario',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 42,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'x',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'destinario'
                        ]
                    ),
                    new Column(
                        'y',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'x'
                        ]
                    ),
                    new Column(
                        'distancia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'y'
                        ]
                    ),
                    new Column(
                        'suframa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'distancia'
                        ]
                    ),
                    new Column(
                        'pedido_obs',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 77,
                            'after' => 'suframa'
                        ]
                    ),
                    new Column(
                        'm1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'pedido_obs'
                        ]
                    ),
                    new Column(
                        'm2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'm1'
                        ]
                    ),
                    new Column(
                        'm3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'm2'
                        ]
                    ),
                    new Column(
                        'm4',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'm3'
                        ]
                    ),
                    new Column(
                        'm5',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'm4'
                        ]
                    ),
                    new Column(
                        'm6',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'm5'
                        ]
                    ),
                    new Column(
                        'm7',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'm6'
                        ]
                    ),
                    new Column(
                        'm8',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'm7'
                        ]
                    ),
                    new Column(
                        'm9',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'm8'
                        ]
                    ),
                    new Column(
                        'informatizada',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'm9'
                        ]
                    ),
                    new Column(
                        'cgc_1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'informatizada'
                        ]
                    ),
                    new Column(
                        'nf1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'cgc_1'
                        ]
                    ),
                    new Column(
                        'nf2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'nf1'
                        ]
                    ),
                    new Column(
                        'nf3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'nf2'
                        ]
                    ),
                    new Column(
                        'nf4',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'nf3'
                        ]
                    ),
                    new Column(
                        'nf5',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'nf4'
                        ]
                    ),
                    new Column(
                        'nf6',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'nf5'
                        ]
                    ),
                    new Column(
                        'nf7',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'nf6'
                        ]
                    ),
                    new Column(
                        'nf8',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'nf7'
                        ]
                    ),
                    new Column(
                        'nf9',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'nf8'
                        ]
                    ),
                    new Column(
                        'oc1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'nf9'
                        ]
                    ),
                    new Column(
                        'oc2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'oc1'
                        ]
                    ),
                    new Column(
                        'oc3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'oc2'
                        ]
                    ),
                    new Column(
                        'oc4',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'oc3'
                        ]
                    ),
                    new Column(
                        'oc5',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'oc4'
                        ]
                    ),
                    new Column(
                        'oc6',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'oc5'
                        ]
                    ),
                    new Column(
                        'oc7',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'oc6'
                        ]
                    ),
                    new Column(
                        'oc8',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'oc7'
                        ]
                    ),
                    new Column(
                        'oc9',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'oc8'
                        ]
                    ),
                    new Column(
                        'cheque',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'oc9'
                        ]
                    ),
                    new Column(
                        'bloqueio_nf',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cheque'
                        ]
                    ),
                    new Column(
                        'bloqueio_fatura',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'bloqueio_nf'
                        ]
                    ),
                    new Column(
                        'bloqueio_compra',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'bloqueio_fatura'
                        ]
                    ),
                    new Column(
                        'recibo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'bloqueio_compra'
                        ]
                    ),
                    new Column(
                        'fator_pedido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'recibo'
                        ]
                    ),
                    new Column(
                        'cpd',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'fator_pedido'
                        ]
                    ),
                    new Column(
                        'gerente',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'cpd'
                        ]
                    ),
                    new Column(
                        'tesoreiro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'gerente'
                        ]
                    ),
                    new Column(
                        'dias_malote',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'tesoreiro'
                        ]
                    ),
                    new Column(
                        'caf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'dias_malote'
                        ]
                    ),
                    new Column(
                        'cafil',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'caf'
                        ]
                    ),
                    new Column(
                        'ender_numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'cafil'
                        ]
                    ),
                    new Column(
                        'mult_med_mensal',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ender_numero'
                        ]
                    ),
                    new Column(
                        'possui_selofisc',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'mult_med_mensal'
                        ]
                    ),
                    new Column(
                        'inst_banc_jur',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'possui_selofisc'
                        ]
                    ),
                    new Column(
                        'inst_banc_fis',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'inst_banc_jur'
                        ]
                    ),
                    new Column(
                        'id_reg',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'inst_banc_fis'
                        ]
                    ),
                    new Column(
                        'oper_isenta',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'id_reg'
                        ]
                    ),
                    new Column(
                        'dtregjuntacom',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'oper_isenta'
                        ]
                    ),
                    new Column(
                        'cod_municipio',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'dtregjuntacom'
                        ]
                    ),
                    new Column(
                        'cod_uf',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'cod_municipio'
                        ]
                    ),
                    new Column(
                        'cod_pais',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'cod_uf'
                        ]
                    ),
                    new Column(
                        'desc_pais',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 60,
                            'after' => 'cod_pais'
                        ]
                    ),
                    new Column(
                        'ind_perfil',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'desc_pais'
                        ]
                    ),
                    new Column(
                        'ind_atividade',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ind_perfil'
                        ]
                    ),
                    new Column(
                        'cod_receita',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'ind_atividade'
                        ]
                    ),
                    new Column(
                        'campo_md5_registro',
                        [
                            'type' => Column::TYPE_CHAR,
                            'size' => 32,
                            'after' => 'cod_receita'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('ags022_index00', ['recnum'], null),
                    new Index('ags022_index01', ['codigo'], null),
                    new Index('ags022_index02', ['codigo', 'razao_social'], null),
                    new Index('ags022_index03', ['codigo', 'empresa'], null),
                    new Index('ags022_index04', ['recnum', 'codigo', 'pedido'], null),
                    new Index('ags022_index05', ['fornecedor_emp', 'fornecedor_cod'], null),
                    new Index('ags022_index06', ['cliente', 'recnum'], null),
                    new Index('ags022_index07', ['recnum', 'codigo', 'distancia'], null),
                    new Index('ags022_index08', ['recnum', 'cliente_emp', 'cliente_cod'], null),
                    new Index('ags022_index09', ['recnum', 'caf'], null),
                    new Index('ags022_index10', ['codigo', 'nome_fantasia'], null),
                    new Index('ags022_index11', ['codigo', 'estado'], null)
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
