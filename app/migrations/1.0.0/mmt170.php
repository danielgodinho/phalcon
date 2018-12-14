<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Mmt170Migration_100
 */
class Mmt170Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('mmt170', [
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
                        'num_ativo_mix',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'desconto_com',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'num_ativo_mix'
                        ]
                    ),
                    new Column(
                        'ipi_com',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'desconto_com'
                        ]
                    ),
                    new Column(
                        'frete_com',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'ipi_com'
                        ]
                    ),
                    new Column(
                        'perda_com',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'frete_com'
                        ]
                    ),
                    new Column(
                        'icms',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'perda_com'
                        ]
                    ),
                    new Column(
                        'opcao_etq',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'icms'
                        ]
                    ),
                    new Column(
                        'opcao_imp',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'opcao_etq'
                        ]
                    ),
                    new Column(
                        'icms_retido_com',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'opcao_imp'
                        ]
                    ),
                    new Column(
                        'adicional_com',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'icms_retido_com'
                        ]
                    ),
                    new Column(
                        'desconto_emb',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'adicional_com'
                        ]
                    ),
                    new Column(
                        'ipi_emb',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'desconto_emb'
                        ]
                    ),
                    new Column(
                        'frete_emb',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'ipi_emb'
                        ]
                    ),
                    new Column(
                        'perda_emb',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'frete_emb'
                        ]
                    ),
                    new Column(
                        'adicional_emb',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'perda_emb'
                        ]
                    ),
                    new Column(
                        'mensa_etq',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'adicional_emb'
                        ]
                    ),
                    new Column(
                        'telefone',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'mensa_etq'
                        ]
                    ),
                    new Column(
                        'estoque_base',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'telefone'
                        ]
                    ),
                    new Column(
                        'perc_seguranca',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'estoque_base'
                        ]
                    ),
                    new Column(
                        'perc_pesagem',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'perc_seguranca'
                        ]
                    ),
                    new Column(
                        'acumulado',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'perc_pesagem'
                        ]
                    ),
                    new Column(
                        'lingua',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'acumulado'
                        ]
                    ),
                    new Column(
                        'margem_com',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'lingua'
                        ]
                    ),
                    new Column(
                        'margem_emb',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'scale' => 2,
                            'after' => 'margem_com'
                        ]
                    ),
                    new Column(
                        'flag_pintor',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'margem_emb'
                        ]
                    ),
                    new Column(
                        'flag_dadonovo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'flag_pintor'
                        ]
                    ),
                    new Column(
                        'flag_calc_ipi',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'flag_dadonovo'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('mmt170_index00', ['recnum'], null),
                    new Index('mmt170_index01', ['num_ativo_mix'], null)
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
