<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class VarzeagMigration_100
 */
class VarzeagMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('varzeag', [
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
                        'ano',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'mes',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'ano'
                        ]
                    ),
                    new Column(
                        'lote',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'mes'
                        ]
                    ),
                    new Column(
                        'voucher',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'lote'
                        ]
                    ),
                    new Column(
                        'sequencia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'voucher'
                        ]
                    ),
                    new Column(
                        'dia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'sequencia'
                        ]
                    ),
                    new Column(
                        'documento',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 5,
                            'after' => 'dia'
                        ]
                    ),
                    new Column(
                        'documento_nro',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'documento'
                        ]
                    ),
                    new Column(
                        'grupo',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'documento_nro'
                        ]
                    ),
                    new Column(
                        'historico',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 6,
                            'after' => 'grupo'
                        ]
                    ),
                    new Column(
                        'historico1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'historico'
                        ]
                    ),
                    new Column(
                        'historico2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 60,
                            'after' => 'historico1'
                        ]
                    ),
                    new Column(
                        'empresa',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'historico2'
                        ]
                    ),
                    new Column(
                        'debito',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'empresa'
                        ]
                    ),
                    new Column(
                        'debito_classif',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'debito'
                        ]
                    ),
                    new Column(
                        'debito_cc',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'debito_classif'
                        ]
                    ),
                    new Column(
                        'debito_fil',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'debito_cc'
                        ]
                    ),
                    new Column(
                        'debito_flag',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'debito_fil'
                        ]
                    ),
                    new Column(
                        'credito',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'debito_flag'
                        ]
                    ),
                    new Column(
                        'credito_classif',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 14,
                            'after' => 'credito'
                        ]
                    ),
                    new Column(
                        'credito_cc',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'credito_classif'
                        ]
                    ),
                    new Column(
                        'credito_fil',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'credito_cc'
                        ]
                    ),
                    new Column(
                        'credito_flag',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'credito_fil'
                        ]
                    ),
                    new Column(
                        'valor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 18,
                            'scale' => 4,
                            'after' => 'credito_flag'
                        ]
                    ),
                    new Column(
                        'digitador',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'valor'
                        ]
                    ),
                    new Column(
                        'status',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'digitador'
                        ]
                    ),
                    new Column(
                        'flag',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'status'
                        ]
                    ),
                    new Column(
                        'complemento',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'flag'
                        ]
                    ),
                    new Column(
                        'debito_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'complemento'
                        ]
                    ),
                    new Column(
                        'credito_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'debito_emp'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('varzeag_index00', ['recnum'], null),
                    new Index('varzeag_index01', ['debito_fil', 'credito', 'credito_fil', 'ano', 'mes', 'lote', 'voucher', 'debito', 'recnum'], null),
                    new Index('varzeag_index02', ['debito', 'debito_cc', 'debito_fil', 'credito', 'credito_fil', 'recnum', 'ano', 'mes', 'dia', 'documento', 'documento_nro', 'grupo', 'historico2', 'empresa'], null),
                    new Index('varzeag_index03', ['recnum', 'ano', 'mes', 'dia', 'documento', 'documento_nro', 'grupo', 'historico2', 'empresa', 'debito', 'debito_fil', 'credito', 'credito_cc', 'credito_fil'], null),
                    new Index('varzeag_index04', ['recnum', 'ano', 'mes', 'lote', 'voucher', 'dia', 'debito', 'debito_fil', 'credito', 'credito_fil'], null),
                    new Index('varzeag_index05', ['recnum', 'ano', 'mes', 'lote', 'voucher', 'sequencia', 'dia'], null),
                    new Index('varzeag_index06', ['recnum', 'ano', 'mes', 'dia', 'documento_nro', 'empresa', 'credito', 'credito_fil'], null)
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
