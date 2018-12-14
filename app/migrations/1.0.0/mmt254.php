<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Mmt254Migration_100
 */
class Mmt254Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('mmt254', [
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
                        'nome_cliente',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 25,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'versao',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 5,
                            'after' => 'nome_cliente'
                        ]
                    ),
                    new Column(
                        'flag_instala',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'versao'
                        ]
                    ),
                    new Column(
                        'cor_menprin',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'flag_instala'
                        ]
                    ),
                    new Column(
                        'cor_menaux',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cor_menprin'
                        ]
                    ),
                    new Column(
                        'cor_avisos',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cor_menaux'
                        ]
                    ),
                    new Column(
                        'cor_cursor',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cor_avisos'
                        ]
                    ),
                    new Column(
                        'cor_pgs',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cor_cursor'
                        ]
                    ),
                    new Column(
                        'cor_prjan',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cor_pgs'
                        ]
                    ),
                    new Column(
                        'cor_prlet',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cor_prjan'
                        ]
                    ),
                    new Column(
                        'cor_sejan',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cor_prlet'
                        ]
                    ),
                    new Column(
                        'cor_selet',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cor_sejan'
                        ]
                    ),
                    new Column(
                        'cor_curmen',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cor_selet'
                        ]
                    ),
                    new Column(
                        'num_ativo_mix',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'cor_curmen'
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
                            'after' => 'num_ativo_mix'
                        ]
                    ),
                    new Column(
                        'nome_fantasia',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 25,
                            'after' => 'icms'
                        ]
                    ),
                    new Column(
                        'cor_separa',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'nome_fantasia'
                        ]
                    ),
                    new Column(
                        'cor_sem_estoque',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cor_separa'
                        ]
                    ),
                    new Column(
                        'cor_min_estoque',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'cor_sem_estoque'
                        ]
                    ),
                    new Column(
                        'tel_tecnico',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 17,
                            'after' => 'cor_min_estoque'
                        ]
                    ),
                    new Column(
                        'tel_informatica',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 17,
                            'after' => 'tel_tecnico'
                        ]
                    ),
                    new Column(
                        'tel_atendimento',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 17,
                            'after' => 'tel_informatica'
                        ]
                    ),
                    new Column(
                        'num_disco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 9,
                            'after' => 'tel_atendimento'
                        ]
                    ),
                    new Column(
                        'validade',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'num_disco'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('mmt254_index00', ['recnum'], null)
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
