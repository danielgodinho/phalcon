<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class DigitacaoEstoquistaMigration_100
 */
class DigitacaoEstoquistaMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('digitacao_estoquista', [
                'columns' => [
                    new Column(
                        'recnum',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "nextval(('"public"."digitacao_estoquista_dfseq"'::text)::regclass)",
                            'notNull' => true,
                            'size' => 28,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'id_digitacao_estoquista',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 28,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'filial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'id_digitacao_estoquista'
                        ]
                    ),
                    new Column(
                        'nome_classe',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 70,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'codigo_separador',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'nome_classe'
                        ]
                    ),
                    new Column(
                        'data_inicio',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'codigo_separador'
                        ]
                    ),
                    new Column(
                        'data_fim',
                        [
                            'type' => Column::TYPE_TIMESTAMP,
                            'size' => 1,
                            'after' => 'data_inicio'
                        ]
                    ),
                    new Column(
                        'texto_digitado',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 100,
                            'after' => 'data_fim'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 15,
                            'after' => 'texto_digitado'
                        ]
                    ),
                    new Column(
                        'log_hora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'log'
                        ]
                    ),
                    new Column(
                        'log_data',
                        [
                            'type' => Column::TYPE_DATE,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'log_hora'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('digitacao_estoquista_index00', ['recnum'], null),
                    new Index('digitacao_estoquista_pkey', ['id_digitacao_estoquista'], null)
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
