<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Fata575Migration_100
 */
class Fata575Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('fata575', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "nextval(('"public"."fata575_dfseq"'::text)::regclass)",
                            'notNull' => true,
                            'size' => 28,
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
                        'fatura',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'duplicata',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'fatura'
                        ]
                    ),
                    new Column(
                        'cliente_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'duplicata'
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
                        'tipo_prot',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cliente_cod'
                        ]
                    ),
                    new Column(
                        'envio',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'tipo_prot'
                        ]
                    ),
                    new Column(
                        'pagamento',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'envio'
                        ]
                    ),
                    new Column(
                        'retirada',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'pagamento'
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
                            'after' => 'retirada'
                        ]
                    ),
                    new Column(
                        'log_env',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'total'
                        ]
                    ),
                    new Column(
                        'log_pg',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'log_env'
                        ]
                    ),
                    new Column(
                        'log_ret',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'log_pg'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'log_ret'
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
                        'tipo_baixa',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'carta_anu',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'tipo_baixa'
                        ]
                    ),
                    new Column(
                        'control_ban',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 30,
                            'after' => 'carta_anu'
                        ]
                    ),
                    new Column(
                        'control_car',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'size' => 30,
                            'after' => 'control_ban'
                        ]
                    ),
                    new Column(
                        'status',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'control_car'
                        ]
                    ),
                    new Column(
                        'cod_erros',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 60,
                            'after' => 'status'
                        ]
                    ),
                    new Column(
                        'sequencia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'cod_erros'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "sys",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'sequencia'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('fata575_index00', ['recnum'], null),
                    new Index('fata575_index01', ['fatura', 'duplicata', 'tipo_prot', 'filial'], null),
                    new Index('fata575_index02', ['envio'], null),
                    new Index('fata575_index03', ['pagamento'], null),
                    new Index('fata575_index04', ['retirada'], null),
                    new Index('fata575_index05', ['tipo_prot', 'tipo_baixa'], null)
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
