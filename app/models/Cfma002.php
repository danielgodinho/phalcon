<?php

class Cfma002 extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var double
     */
    public $recnum;

    /**
     *
     * @var double
     */
    public $id_palete;

    /**
     *
     * @var string
     */
    public $codpatrimonio;

    /**
     *
     * @var string
     */
    public $descricao;

    /**
     *
     * @var string
     */
    public $codigo_barra;

    /**
     *
     * @var string
     */
    public $situacao;

    /**
     *
     * @var double
     */
    public $filial_local;

    /**
     *
     * @var string
     */
    public $log;

    /**
     *
     * @var string
     */
    public $log_hora;

    /**
     *
     * @var string
     */
    public $log_data;

    /**
     *
     * @var double
     */
    public $id_ordem;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource("cfma002");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cfma002';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cfma002[]|Cfma002|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cfma002|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
