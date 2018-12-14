<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Cfma011Migration_100
 */
class Cfma011Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('cfma011', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "nextval(('"public"."cfma011_dfseq"'::text)::regclass)",
                            'notNull' => true,
                            'size' => 28,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_ordem',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'filial_cd',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'id_ordem'
                        ]
                    ),
                    new Column(
                        'filial_origem',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'filial_cd'
                        ]
                    ),
                    new Column(
                        'filial_destino',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'filial_origem'
                        ]
                    ),
                    new Column(
                        'id_produto',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'filial_destino'
                        ]
                    ),
                    new Column(
                        'forn_empresa',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'id_produto'
                        ]
                    ),
                    new Column(
                        'forn_fornecedor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'forn_empresa'
                        ]
                    ),
                    new Column(
                        'produto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'size' => 20,
                            'after' => 'forn_fornecedor'
                        ]
                    ),
                    new Column(
                        'locacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'size' => 14,
                            'after' => 'produto'
                        ]
                    ),
                    new Column(
                        'qtd_separada',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'locacao'
                        ]
                    ),
                    new Column(
                        'qtd_conferida',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'qtd_separada'
                        ]
                    ),
                    new Column(
                        'qtd_saida',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'qtd_conferida'
                        ]
                    ),
                    new Column(
                        'situacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'qtd_saida'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'situacao'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
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
                        'embalagem',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'situacao_espera',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'embalagem'
                        ]
                    ),
                    new Column(
                        'qtd_espera',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'situacao_espera'
                        ]
                    ),
                    new Column(
                        'observacao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => true,
                            'size' => 200,
                            'after' => 'qtd_espera'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('cfma011_index00', ['recnum'], null),
                    new Index('cfma011_index01', ['id_produto', 'id_ordem'], null),
                    new Index('cfma011_index02', ['id_ordem', 'filial_origem', 'filial_destino', 'forn_empresa', 'forn_fornecedor', 'produto', 'filial_cd'], null),
                    new Index('cfma011_index03', ['id_produto'], null)
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
