<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class ConfiguracaosistemaMigration_100
 */
class ConfiguracaosistemaMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('configuracaosistema', [
                'columns' => [
                    new Column(
                        'nomeremetentepadrao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 100,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'emailpadrao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'nomeremetentepadrao'
                        ]
                    ),
                    new Column(
                        'senha',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 64,
                            'after' => 'emailpadrao'
                        ]
                    ),
                    new Column(
                        'username',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 40,
                            'after' => 'senha'
                        ]
                    ),
                    new Column(
                        'smtppadrao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 100,
                            'after' => 'username'
                        ]
                    ),
                    new Column(
                        'codigo',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 32,
                            'after' => 'smtppadrao'
                        ]
                    ),
                    new Column(
                        'mensagemnotificacaofinalizacaoprazohomologacao',
                        [
                            'type' => Column::TYPE_TEXT,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'codigo'
                        ]
                    ),
                    new Column(
                        'mensagemnotificacaohomologacao',
                        [
                            'type' => Column::TYPE_TEXT,
                            'default' => "",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'mensagemnotificacaofinalizacaoprazohomologacao'
                        ]
                    ),
                    new Column(
                        'mensagemnotificacaoprazofinalizacaohomologacao',
                        [
                            'type' => Column::TYPE_TEXT,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'mensagemnotificacaohomologacao'
                        ]
                    ),
                    new Column(
                        'mensagemnotificacaoespecificacoesaguardandodefinicaohoras',
                        [
                            'type' => Column::TYPE_TEXT,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'mensagemnotificacaoprazofinalizacaohomologacao'
                        ]
                    ),
                    new Column(
                        'mensagemnotificacaoatividadesrealizadas',
                        [
                            'type' => Column::TYPE_TEXT,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'mensagemnotificacaoespecificacoesaguardandodefinicaohoras'
                        ]
                    ),
                    new Column(
                        'mensagemnotificacaoosautorizada',
                        [
                            'type' => Column::TYPE_TEXT,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'mensagemnotificacaoatividadesrealizadas'
                        ]
                    ),
                    new Column(
                        'mensagemnotificacaoosaguardandoautorizacao',
                        [
                            'type' => Column::TYPE_TEXT,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'mensagemnotificacaoosautorizada'
                        ]
                    ),
                    new Column(
                        'mensagemcriacaochamado',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'mensagemnotificacaoosaguardandoautorizacao'
                        ]
                    ),
                    new Column(
                        'mensagemalteracaointeracaochamado',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'mensagemcriacaochamado'
                        ]
                    ),
                    new Column(
                        'mensagemexclusaochamado',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'mensagemalteracaointeracaochamado'
                        ]
                    ),
                    new Column(
                        'mensagemfinalizacaochamado',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'mensagemexclusaochamado'
                        ]
                    ),
                    new Column(
                        'mensagemcriacaoespecificacao',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'mensagemfinalizacaochamado'
                        ]
                    ),
                    new Column(
                        'mensageminicializacaoespecificacao',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'mensagemcriacaoespecificacao'
                        ]
                    ),
                    new Column(
                        'mensagemfinalizacaoespecificacao',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'mensageminicializacaoespecificacao'
                        ]
                    ),
                    new Column(
                        'portaemail',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 50,
                            'after' => 'mensagemfinalizacaoespecificacao'
                        ]
                    ),
                    new Column(
                        'turnoconferencia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'portaemail'
                        ]
                    ),
                    new Column(
                        'filialpossuiestoquefechado',
                        [
                            'type' => Column::TYPE_BOOLEAN,
                            'size' => 1,
                            'after' => 'turnoconferencia'
                        ]
                    ),
                    new Column(
                        'minutosbloqueiovenda',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'scale' => 2,
                            'after' => 'filialpossuiestoquefechado'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('ch_configuracaosistema_emailpadrao', ['emailpadrao'], null),
                    new Index('ch_configuracaosistema_nomeremetentepadrao', ['nomeremetentepadrao'], null),
                    new Index('ch_configuracaosistema_smtppadrao', ['smtppadrao'], null),
                    new Index('ch_configuracaosistema_username', ['username'], null),
                    new Index('configuracaosistema_pkey', ['codigo'], null)
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
