<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Fata060Migration_100
 */
class Fata060Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('fata060', [
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
                        'numero',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'numero1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'numero'
                        ]
                    ),
                    new Column(
                        'duplicata',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'numero1'
                        ]
                    ),
                    new Column(
                        'cliente',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 10,
                            'scale' => 2,
                            'after' => 'duplicata'
                        ]
                    ),
                    new Column(
                        'cliente_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'cliente'
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
                        'emissao',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cliente_cod'
                        ]
                    ),
                    new Column(
                        'pago',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 16,
                            'scale' => 2,
                            'after' => 'emissao'
                        ]
                    ),
                    new Column(
                        'total',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 16,
                            'scale' => 2,
                            'after' => 'pago'
                        ]
                    ),
                    new Column(
                        'liquido',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 16,
                            'scale' => 2,
                            'after' => 'total'
                        ]
                    ),
                    new Column(
                        'acrescimo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'liquido'
                        ]
                    ),
                    new Column(
                        'desconto',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'acrescimo'
                        ]
                    ),
                    new Column(
                        'desc_venc_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'desconto'
                        ]
                    ),
                    new Column(
                        'desc_venc',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'desc_venc_data'
                        ]
                    ),
                    new Column(
                        'desc_venc_sn',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'desc_venc'
                        ]
                    ),
                    new Column(
                        'vencimento',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'desc_venc_sn'
                        ]
                    ),
                    new Column(
                        'situacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'vencimento'
                        ]
                    ),
                    new Column(
                        'status',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 7,
                            'after' => 'situacao'
                        ]
                    ),
                    new Column(
                        'banco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'status'
                        ]
                    ),
                    new Column(
                        'banco_agencia',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'banco'
                        ]
                    ),
                    new Column(
                        'cobranca',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 7,
                            'after' => 'banco_agencia'
                        ]
                    ),
                    new Column(
                        'cliente_filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'cobranca'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'cliente_filial'
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
                        'observacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 21,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'juros',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'observacao'
                        ]
                    ),
                    new Column(
                        'cobrador',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'juros'
                        ]
                    ),
                    new Column(
                        'data_base',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cobrador'
                        ]
                    ),
                    new Column(
                        'cliente_rs',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 27,
                            'after' => 'data_base'
                        ]
                    ),
                    new Column(
                        'devolucao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'cliente_rs'
                        ]
                    ),
                    new Column(
                        'baixab',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'devolucao'
                        ]
                    ),
                    new Column(
                        'baixan',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'baixab'
                        ]
                    ),
                    new Column(
                        'referencia',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'baixan'
                        ]
                    ),
                    new Column(
                        'caf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'referencia'
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
                        'dt_envio',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'cafil'
                        ]
                    ),
                    new Column(
                        'dt_retorno',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'dt_envio'
                        ]
                    ),
                    new Column(
                        'nosso_numero',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 13,
                            'after' => 'dt_retorno'
                        ]
                    ),
                    new Column(
                        'id_reg',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'nosso_numero'
                        ]
                    ),
                    new Column(
                        'itens',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'id_reg'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('fata060_index00', ['recnum'], null),
                    new Index('fata060_index01', ['duplicata', 'numero1', 'numero', 'filial'], null),
                    new Index('fata060_index02', ['cliente_cod', 'vencimento', 'situacao', 'duplicata', 'numero', 'filial', 'recnum', 'cliente_emp'], null),
                    new Index('fata060_index03', ['filial', 'numero', 'numero1', 'duplicata', 'cliente', 'vencimento', 'cliente_rs', 'recnum'], null),
                    new Index('fata060_index04', ['cliente_emp', 'situacao', 'vencimento', 'cliente_cod', 'duplicata', 'numero1', 'numero', 'filial', 'recnum'], null),
                    new Index('fata060_index05', ['filial', 'recnum', 'cliente_rs', 'vencimento', 'duplicata', 'numero'], null),
                    new Index('fata060_index06', ['numero', 'filial', 'vencimento', 'cliente_cod', 'cliente_emp', 'duplicata', 'numero1'], null),
                    new Index('fata060_index07', ['numero1', 'filial', 'vencimento', 'cliente_cod', 'cliente_emp', 'duplicata', 'numero'], null),
                    new Index('fata060_index08', ['cliente_emp', 'recnum', 'cliente_cod', 'referencia'], null),
                    new Index('fata060_index09', ['filial', 'referencia', 'recnum'], null),
                    new Index('fata060_index10', ['filial', 'recnum', 'situacao'], null),
                    new Index('fata060_index11', ['numero', 'filial', 'cliente', 'duplicata', 'numero1'], null),
                    new Index('fata060_index12', ['numero1', 'numero', 'filial', 'recnum', 'emissao', 'cliente_cod', 'cliente_emp'], null),
                    new Index('fata060_index13', ['status', 'duplicata', 'numero1', 'numero', 'filial', 'cliente'], null),
                    new Index('fata060_index14', ['numero1', 'filial', 'duplicata', 'numero', 'emissao'], null),
                    new Index('fata060_index15', ['log_data', 'recnum'], null)
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
