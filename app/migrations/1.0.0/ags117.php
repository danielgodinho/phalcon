<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Ags117Migration_100
 */
class Ags117Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('ags117', [
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
                        'tipo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'razao_social',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'tipo'
                        ]
                    ),
                    new Column(
                        'assunto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'razao_social'
                        ]
                    ),
                    new Column(
                        'contato',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'assunto'
                        ]
                    ),
                    new Column(
                        'contato_cargo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 30,
                            'after' => 'contato'
                        ]
                    ),
                    new Column(
                        'ddd',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'contato_cargo'
                        ]
                    ),
                    new Column(
                        'fone',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 13,
                            'after' => 'ddd'
                        ]
                    ),
                    new Column(
                        'fone1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'fone'
                        ]
                    ),
                    new Column(
                        'fax',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'fone1'
                        ]
                    ),
                    new Column(
                        'telex',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'fax'
                        ]
                    ),
                    new Column(
                        'proprietario',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'telex'
                        ]
                    ),
                    new Column(
                        'endereco',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 35,
                            'after' => 'proprietario'
                        ]
                    ),
                    new Column(
                        'cidade',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 21,
                            'after' => 'endereco'
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
                        'observacao',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'estado'
                        ]
                    ),
                    new Column(
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'observacao'
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
                        'caf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'log_hora'
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
                    )
                ],
                'indexes' => [
                    new Index('ags117_index00', ['recnum'], null),
                    new Index('ags117_index01', ['razao_social', 'tipo'], null),
                    new Index('ags117_index02', ['tipo', 'razao_social', 'assunto'], null),
                    new Index('ags117_index03', ['tipo', 'razao_social', 'contato'], null),
                    new Index('ags117_index04', ['tipo', 'razao_social', 'contato_cargo'], null),
                    new Index('ags117_index05', ['razao_social', 'tipo', 'fone', 'fone1'], null),
                    new Index('ags117_index06', ['tipo', 'razao_social', 'fax'], null),
                    new Index('ags117_index07', ['tipo', 'razao_social', 'telex'], null),
                    new Index('ags117_index08', ['tipo', 'razao_social', 'proprietario'], null),
                    new Index('ags117_index09', ['recnum', 'caf'], null)
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
