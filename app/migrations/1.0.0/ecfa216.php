<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class Ecfa216Migration_100
 */
class Ecfa216Migration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('ecfa216', [
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
                        'if',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'filial'
                        ]
                    ),
                    new Column(
                        'data',
                        [
                            'type' => Column::TYPE_DATE,
                            'default' => "01/01/0001",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'if'
                        ]
                    ),
                    new Column(
                        'chave_ident',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'data'
                        ]
                    ),
                    new Column(
                        'seq_oper',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'chave_ident'
                        ]
                    ),
                    new Column(
                        'centavos',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'seq_oper'
                        ]
                    ),
                    new Column(
                        'treinamento',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'centavos'
                        ]
                    ),
                    new Column(
                        'gt',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 16,
                            'scale' => 2,
                            'after' => 'treinamento'
                        ]
                    ),
                    new Column(
                        'c_cf_canc',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'gt'
                        ]
                    ),
                    new Column(
                        'reducoes',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'c_cf_canc'
                        ]
                    ),
                    new Column(
                        'vda_bruta_dia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'reducoes'
                        ]
                    ),
                    new Column(
                        'c_item_canc_dia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'vda_bruta_dia'
                        ]
                    ),
                    new Column(
                        't_item_canc_dia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_item_canc_dia'
                        ]
                    ),
                    new Column(
                        'c_vda_canc_dia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_item_canc_dia'
                        ]
                    ),
                    new Column(
                        't_vda_canc_dia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_vda_canc_dia'
                        ]
                    ),
                    new Column(
                        'c_desc_dia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_vda_canc_dia'
                        ]
                    ),
                    new Column(
                        't_desc_dia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_desc_dia'
                        ]
                    ),
                    new Column(
                        't_liq_dia',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 't_desc_dia'
                        ]
                    ),
                    new Column(
                        'c_cnf',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_liq_dia'
                        ]
                    ),
                    new Column(
                        'c_cf',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'c_cnf'
                        ]
                    ),
                    new Column(
                        'modelo_ecf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'c_cf'
                        ]
                    ),
                    new Column(
                        'ident_ecf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'modelo_ecf'
                        ]
                    ),
                    new Column(
                        't_isento',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'ident_ecf'
                        ]
                    ),
                    new Column(
                        't_ntrib',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 't_isento'
                        ]
                    ),
                    new Column(
                        't_subst',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 't_ntrib'
                        ]
                    ),
                    new Column(
                        't_issqn',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 't_subst'
                        ]
                    ),
                    new Column(
                        'c_issqn',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_issqn'
                        ]
                    ),
                    new Column(
                        'i_trib1',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'c_issqn'
                        ]
                    ),
                    new Column(
                        't_trib1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib1'
                        ]
                    ),
                    new Column(
                        'i_trib2',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib1'
                        ]
                    ),
                    new Column(
                        't_trib2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib2'
                        ]
                    ),
                    new Column(
                        'i_trib3',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib2'
                        ]
                    ),
                    new Column(
                        't_trib3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib3'
                        ]
                    ),
                    new Column(
                        'i_trib4',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib3'
                        ]
                    ),
                    new Column(
                        't_trib4',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib4'
                        ]
                    ),
                    new Column(
                        'i_trib5',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib4'
                        ]
                    ),
                    new Column(
                        't_trib5',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib5'
                        ]
                    ),
                    new Column(
                        'i_trib6',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib5'
                        ]
                    ),
                    new Column(
                        't_trib6',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib6'
                        ]
                    ),
                    new Column(
                        'i_trib7',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib6'
                        ]
                    ),
                    new Column(
                        't_trib7',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib7'
                        ]
                    ),
                    new Column(
                        'i_trib8',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib7'
                        ]
                    ),
                    new Column(
                        't_trib8',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib8'
                        ]
                    ),
                    new Column(
                        'i_trib9',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib8'
                        ]
                    ),
                    new Column(
                        't_trib9',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib9'
                        ]
                    ),
                    new Column(
                        'i_trib10',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib9'
                        ]
                    ),
                    new Column(
                        't_trib10',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib10'
                        ]
                    ),
                    new Column(
                        'i_trib11',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib10'
                        ]
                    ),
                    new Column(
                        't_trib11',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib11'
                        ]
                    ),
                    new Column(
                        'i_trib12',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib11'
                        ]
                    ),
                    new Column(
                        't_trib12',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib12'
                        ]
                    ),
                    new Column(
                        'i_trib13',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib12'
                        ]
                    ),
                    new Column(
                        't_trib13',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib13'
                        ]
                    ),
                    new Column(
                        'i_trib14',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib13'
                        ]
                    ),
                    new Column(
                        't_trib14',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib14'
                        ]
                    ),
                    new Column(
                        'i_trib15',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib14'
                        ]
                    ),
                    new Column(
                        't_trib15',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib15'
                        ]
                    ),
                    new Column(
                        'i_trib16',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib15'
                        ]
                    ),
                    new Column(
                        't_trib16',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib16'
                        ]
                    ),
                    new Column(
                        'i_trib17',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib16'
                        ]
                    ),
                    new Column(
                        't_trib17',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib17'
                        ]
                    ),
                    new Column(
                        'i_trib18',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib17'
                        ]
                    ),
                    new Column(
                        't_trib18',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib18'
                        ]
                    ),
                    new Column(
                        'i_trib19',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib18'
                        ]
                    ),
                    new Column(
                        't_trib19',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'i_trib19'
                        ]
                    ),
                    new Column(
                        'c_mod1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_trib19'
                        ]
                    ),
                    new Column(
                        't_mod1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_mod1'
                        ]
                    ),
                    new Column(
                        'c_mod2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_mod1'
                        ]
                    ),
                    new Column(
                        't_mod2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_mod2'
                        ]
                    ),
                    new Column(
                        'c_mod3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_mod2'
                        ]
                    ),
                    new Column(
                        't_mod3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_mod3'
                        ]
                    ),
                    new Column(
                        'c_mod4',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_mod3'
                        ]
                    ),
                    new Column(
                        't_mod4',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_mod4'
                        ]
                    ),
                    new Column(
                        'c_mod5',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_mod4'
                        ]
                    ),
                    new Column(
                        't_mod5',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_mod5'
                        ]
                    ),
                    new Column(
                        'c_mod6',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_mod5'
                        ]
                    ),
                    new Column(
                        't_mod6',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_mod6'
                        ]
                    ),
                    new Column(
                        'c_mod7',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_mod6'
                        ]
                    ),
                    new Column(
                        't_mod7',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_mod7'
                        ]
                    ),
                    new Column(
                        'c_mod8',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_mod7'
                        ]
                    ),
                    new Column(
                        't_mod8',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_mod8'
                        ]
                    ),
                    new Column(
                        'c_mod9',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_mod8'
                        ]
                    ),
                    new Column(
                        't_mod9',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_mod9'
                        ]
                    ),
                    new Column(
                        'c_mod10',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_mod9'
                        ]
                    ),
                    new Column(
                        't_mod10',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_mod10'
                        ]
                    ),
                    new Column(
                        'c_legnf1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_mod10'
                        ]
                    ),
                    new Column(
                        't_legnf1',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf1'
                        ]
                    ),
                    new Column(
                        'c_legnf2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf1'
                        ]
                    ),
                    new Column(
                        't_legnf2',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf2'
                        ]
                    ),
                    new Column(
                        'c_legnf3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf2'
                        ]
                    ),
                    new Column(
                        't_legnf3',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf3'
                        ]
                    ),
                    new Column(
                        'c_legnf4',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf3'
                        ]
                    ),
                    new Column(
                        't_legnf4',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf4'
                        ]
                    ),
                    new Column(
                        'c_legnf5',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf4'
                        ]
                    ),
                    new Column(
                        't_legnf5',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf5'
                        ]
                    ),
                    new Column(
                        'c_legnf6',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf5'
                        ]
                    ),
                    new Column(
                        't_legnf6',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf6'
                        ]
                    ),
                    new Column(
                        'c_legnf7',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf6'
                        ]
                    ),
                    new Column(
                        't_legnf7',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf7'
                        ]
                    ),
                    new Column(
                        'c_legnf8',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf7'
                        ]
                    ),
                    new Column(
                        't_legnf8',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf8'
                        ]
                    ),
                    new Column(
                        'c_legnf9',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf8'
                        ]
                    ),
                    new Column(
                        't_legnf9',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf9'
                        ]
                    ),
                    new Column(
                        'c_legnf10',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf9'
                        ]
                    ),
                    new Column(
                        't_legnf10',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf10'
                        ]
                    ),
                    new Column(
                        'c_legnf11',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf10'
                        ]
                    ),
                    new Column(
                        't_legnf11',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf11'
                        ]
                    ),
                    new Column(
                        'c_legnf12',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf11'
                        ]
                    ),
                    new Column(
                        't_legnf12',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf12'
                        ]
                    ),
                    new Column(
                        'c_legnf13',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf12'
                        ]
                    ),
                    new Column(
                        't_legnf13',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf13'
                        ]
                    ),
                    new Column(
                        'c_legnf14',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf13'
                        ]
                    ),
                    new Column(
                        't_legnf14',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf14'
                        ]
                    ),
                    new Column(
                        'c_legnf15',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf14'
                        ]
                    ),
                    new Column(
                        't_legnf15',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf15'
                        ]
                    ),
                    new Column(
                        'c_legnf16',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf15'
                        ]
                    ),
                    new Column(
                        't_legnf16',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf16'
                        ]
                    ),
                    new Column(
                        'c_legnf17',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf16'
                        ]
                    ),
                    new Column(
                        't_legnf17',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf17'
                        ]
                    ),
                    new Column(
                        'c_legnf18',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf17'
                        ]
                    ),
                    new Column(
                        't_legnf18',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf18'
                        ]
                    ),
                    new Column(
                        'c_legnf19',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf18'
                        ]
                    ),
                    new Column(
                        't_legnf19',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf19'
                        ]
                    ),
                    new Column(
                        'c_legnf20',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf19'
                        ]
                    ),
                    new Column(
                        't_legnf20',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_legnf20'
                        ]
                    ),
                    new Column(
                        'c_gorjeta',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_legnf20'
                        ]
                    ),
                    new Column(
                        't_gorjeta',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_gorjeta'
                        ]
                    ),
                    new Column(
                        'c_servico',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_gorjeta'
                        ]
                    ),
                    new Column(
                        't_servico',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_servico'
                        ]
                    ),
                    new Column(
                        'c_acrescimo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_servico'
                        ]
                    ),
                    new Column(
                        't_acrescimo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_acrescimo'
                        ]
                    ),
                    new Column(
                        'c_acrescfin',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_acrescimo'
                        ]
                    ),
                    new Column(
                        't_acrescfin',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'scale' => 2,
                            'after' => 'c_acrescfin'
                        ]
                    ),
                    new Column(
                        'c_cheques',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 't_acrescfin'
                        ]
                    ),
                    new Column(
                        'seq_inicial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'c_cheques'
                        ]
                    ),
                    new Column(
                        'cf_inicial',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'seq_inicial'
                        ]
                    ),
                    new Column(
                        'c_reinicio_oper',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'cf_inicial'
                        ]
                    ),
                    new Column(
                        'caf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'c_reinicio_oper'
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
                        'log',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'cafil'
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
                        'id_reg',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 12,
                            'after' => 'log_hora'
                        ]
                    ),
                    new Column(
                        'serie_ecf',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 25,
                            'after' => 'id_reg'
                        ]
                    ),
                    new Column(
                        'campo_md5_registro',
                        [
                            'type' => Column::TYPE_CHAR,
                            'size' => 32,
                            'after' => 'serie_ecf'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('ecfa216_index00', ['recnum'], null),
                    new Index('ecfa216_index01', ['filial', 'data', 'chave_ident', 'if'], null),
                    new Index('ecfa216_index02', ['filial', 'if', 'data', 'chave_ident'], null),
                    new Index('ecfa216_index03', ['caf', 'recnum'], null),
                    new Index('ecfa216_index04', ['recnum', 'filial', 'if', 'data', 'chave_ident'], null),
                    new Index('ecfa216_index05', ['recnum', 'filial', 'if', 'data', 'chave_ident'], null)
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
