<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class WebCertificadoLogadoMigration_100
 */
class WebCertificadoLogadoMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('web_certificado_logado', [
                'columns' => [
                    new Column(
                        'usuario',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 15,
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
                            'after' => 'usuario'
                        ]
                    ),
                    new Column(
                        'caixa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'filial'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('web_certificado_logado_index_01', ['filial'], null),
                    new Index('web_certificado_logado_primary', ['usuario'], null)
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
