<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class CatmongrMigration_100
 */
class CatmongrMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('catmongr', [
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
                        'pro_emp',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 2,
                            'after' => 'recnum'
                        ]
                    ),
                    new Column(
                        'pro_for',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 8,
                            'after' => 'pro_emp'
                        ]
                    ),
                    new Column(
                        'produto',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => " ",
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'pro_for'
                        ]
                    ),
                    new Column(
                        'grupo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'produto'
                        ]
                    ),
                    new Column(
                        'sub_grupo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'grupo'
                        ]
                    ),
                    new Column(
                        'montadora',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'sub_grupo'
                        ]
                    ),
                    new Column(
                        'veiculo',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'montadora'
                        ]
                    ),
                    new Column(
                        'versao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'veiculo'
                        ]
                    ),
                    new Column(
                        'construcao',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'versao'
                        ]
                    ),
                    new Column(
                        'motor',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'construcao'
                        ]
                    ),
                    new Column(
                        'combustivel',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'motor'
                        ]
                    ),
                    new Column(
                        'anoi',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'combustivel'
                        ]
                    ),
                    new Column(
                        'mesi',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'anoi'
                        ]
                    ),
                    new Column(
                        'anof',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'mesi'
                        ]
                    ),
                    new Column(
                        'mesf',
                        [
                            'type' => Column::TYPE_DECIMAL,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 4,
                            'after' => 'anof'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('catmongr_index00', ['recnum'], null),
                    new Index('catmongr_index01', ['produto', 'grupo', 'sub_grupo', 'montadora', 'pro_emp', 'pro_for', 'versao', 'construcao', 'motor', 'combustivel', 'veiculo'], null),
                    new Index('catmongr_index02', ['montadora', 'pro_emp', 'pro_for', 'produto', 'grupo', 'sub_grupo', 'veiculo', 'versao', 'construcao', 'motor', 'combustivel'], null),
                    new Index('catmongr_index03', ['pro_emp', 'pro_for', 'produto', 'grupo', 'sub_grupo', 'montadora', 'veiculo', 'versao', 'construcao', 'motor', 'combustivel'], null)
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
