<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class Cfma002Controller extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for cfma002
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'Cfma002', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "recnum";

        $cfma002 = Cfma002::find($parameters);
        if (count($cfma002) == 0) {
            $this->flash->notice("The search did not find any cfma002");

            $this->dispatcher->forward([
                "controller" => "cfma002",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $cfma002,
            'limit'=> 10,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displays the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a cfma002
     *
     * @param string $recnum
     */
    public function editAction($recnum)
    {
        if (!$this->request->isPost()) {

            $cfma002 = Cfma002::findFirstByrecnum($recnum);
            if (!$cfma002) {
                $this->flash->error("cfma002 was not found");

                $this->dispatcher->forward([
                    'controller' => "cfma002",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->recnum = $cfma002->recnum;

            $this->tag->setDefault("recnum", $cfma002->recnum);
            $this->tag->setDefault("id_palete", $cfma002->id_palete);
            $this->tag->setDefault("codpatrimonio", $cfma002->codpatrimonio);
            $this->tag->setDefault("descricao", $cfma002->descricao);
            $this->tag->setDefault("codigo_barra", $cfma002->codigo_barra);
            $this->tag->setDefault("situacao", $cfma002->situacao);
            $this->tag->setDefault("filial_local", $cfma002->filial_local);
            $this->tag->setDefault("log", $cfma002->log);
            $this->tag->setDefault("log_hora", $cfma002->log_hora);
            $this->tag->setDefault("log_data", $cfma002->log_data);
            $this->tag->setDefault("id_ordem", $cfma002->id_ordem);
            
        }
    }

    /**
     * Creates a new cfma002
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "cfma002",
                'action' => 'index'
            ]);

            return;
        }

        $cfma002 = new Cfma002();
        $cfma002->recnum = $this->request->getPost("recnum");
        $cfma002->idPalete = $this->request->getPost("id_palete");
        $cfma002->codpatrimonio = $this->request->getPost("codpatrimonio");
        $cfma002->descricao = $this->request->getPost("descricao");
        $cfma002->codigoBarra = $this->request->getPost("codigo_barra");
        $cfma002->situacao = $this->request->getPost("situacao");
        $cfma002->filialLocal = $this->request->getPost("filial_local");
        $cfma002->log = $this->request->getPost("log");
        $cfma002->logHora = $this->request->getPost("log_hora");
        $cfma002->logData = $this->request->getPost("log_data");
        $cfma002->idOrdem = $this->request->getPost("id_ordem");
        

        if (!$cfma002->save()) {
            foreach ($cfma002->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "cfma002",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("cfma002 was created successfully");

        $this->dispatcher->forward([
            'controller' => "cfma002",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a cfma002 edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "cfma002",
                'action' => 'index'
            ]);

            return;
        }

        $recnum = $this->request->getPost("recnum");
        $cfma002 = Cfma002::findFirstByrecnum($recnum);

        if (!$cfma002) {
            $this->flash->error("cfma002 does not exist " . $recnum);

            $this->dispatcher->forward([
                'controller' => "cfma002",
                'action' => 'index'
            ]);

            return;
        }

        $cfma002->recnum = $this->request->getPost("recnum");
        $cfma002->idPalete = $this->request->getPost("id_palete");
        $cfma002->codpatrimonio = $this->request->getPost("codpatrimonio");
        $cfma002->descricao = $this->request->getPost("descricao");
        $cfma002->codigoBarra = $this->request->getPost("codigo_barra");
        $cfma002->situacao = $this->request->getPost("situacao");
        $cfma002->filialLocal = $this->request->getPost("filial_local");
        $cfma002->log = $this->request->getPost("log");
        $cfma002->logHora = $this->request->getPost("log_hora");
        $cfma002->logData = $this->request->getPost("log_data");
        $cfma002->idOrdem = $this->request->getPost("id_ordem");
        

        if (!$cfma002->save()) {

            foreach ($cfma002->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "cfma002",
                'action' => 'edit',
                'params' => [$cfma002->recnum]
            ]);

            return;
        }

        $this->flash->success("cfma002 was updated successfully");

        $this->dispatcher->forward([
            'controller' => "cfma002",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a cfma002
     *
     * @param string $recnum
     */
    public function deleteAction($recnum)
    {
        $cfma002 = Cfma002::findFirstByrecnum($recnum);
        if (!$cfma002) {
            $this->flash->error("cfma002 was not found");

            $this->dispatcher->forward([
                'controller' => "cfma002",
                'action' => 'index'
            ]);

            return;
        }

        if (!$cfma002->delete()) {

            foreach ($cfma002->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "cfma002",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("cfma002 was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "cfma002",
            'action' => "index"
        ]);
    }

}
