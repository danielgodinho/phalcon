<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class Ags022Controller extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    public function danielAction(){
        $data = array('nome'=>'daniel Godinho');

        echo json_encode($data);
        exit;
    }

    /**
     * Searches for ags022
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'Ags022', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "recnum";

        $ags022 = Ags022::find($parameters);
        if (count($ags022) == 0) {
            $this->flash->notice("The search did not find any ags022");

            $this->dispatcher->forward([
                "controller" => "ags022",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $ags022,
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
     * Edits a ags022
     *
     * @param string $recnum
     */
    public function editAction($recnum)
    {
        if (!$this->request->isPost()) {

            $ags022 = Ags022::findFirstByrecnum($recnum);
            if (!$ags022) {
                $this->flash->error("ags022 was not found");

                $this->dispatcher->forward([
                    'controller' => "ags022",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->recnum = $ags022->recnum;

            $this->tag->setDefault("recnum", $ags022->recnum);
            $this->tag->setDefault("codigo", $ags022->codigo);
            $this->tag->setDefault("nome_fantasia", $ags022->nome_fantasia);
            $this->tag->setDefault("razao_social", $ags022->razao_social);
            $this->tag->setDefault("endereco", $ags022->endereco);
            $this->tag->setDefault("bairro", $ags022->bairro);
            $this->tag->setDefault("cidade", $ags022->cidade);
            $this->tag->setDefault("estado", $ags022->estado);
            $this->tag->setDefault("cep", $ags022->cep);
            $this->tag->setDefault("cgc", $ags022->cgc);
            $this->tag->setDefault("ddd", $ags022->ddd);
            $this->tag->setDefault("telefone", $ags022->telefone);
            $this->tag->setDefault("fax", $ags022->fax);
            $this->tag->setDefault("inscricao", $ags022->inscricao);
            $this->tag->setDefault("inscricao_munic", $ags022->inscricao_munic);
            $this->tag->setDefault("nf_numero", $ags022->nf_numero);
            $this->tag->setDefault("nf_modelo", $ags022->nf_modelo);
            $this->tag->setDefault("nf_online", $ags022->nf_online);
            $this->tag->setDefault("os_numero", $ags022->os_numero);
            $this->tag->setDefault("os_modelo", $ags022->os_modelo);
            $this->tag->setDefault("fatura_numero", $ags022->fatura_numero);
            $this->tag->setDefault("localpagto", $ags022->localpagto);
            $this->tag->setDefault("cadastro_client", $ags022->cadastro_client);
            $this->tag->setDefault("cadastro_fornec", $ags022->cadastro_fornec);
            $this->tag->setDefault("regjuntacom", $ags022->regjuntacom);
            $this->tag->setDefault("fatura_modelo", $ags022->fatura_modelo);
            $this->tag->setDefault("empresa", $ags022->empresa);
            $this->tag->setDefault("folha_mensagem", $ags022->folha_mensagem);
            $this->tag->setDefault("folha_mensagem1", $ags022->folha_mensagem1);
            $this->tag->setDefault("folha_mensagem2", $ags022->folha_mensagem2);
            $this->tag->setDefault("fator_preco", $ags022->fator_preco);
            $this->tag->setDefault("fgts", $ags022->fgts);
            $this->tag->setDefault("pedido", $ags022->pedido);
            $this->tag->setDefault("modelo1", $ags022->modelo1);
            $this->tag->setDefault("modelo2", $ags022->modelo2);
            $this->tag->setDefault("modelo3", $ags022->modelo3);
            $this->tag->setDefault("modelo4", $ags022->modelo4);
            $this->tag->setDefault("modelo5", $ags022->modelo5);
            $this->tag->setDefault("modelo6", $ags022->modelo6);
            $this->tag->setDefault("modelo7", $ags022->modelo7);
            $this->tag->setDefault("modelo8", $ags022->modelo8);
            $this->tag->setDefault("modelo9", $ags022->modelo9);
            $this->tag->setDefault("uucp", $ags022->uucp);
            $this->tag->setDefault("uucp_data", $ags022->uucp_data);
            $this->tag->setDefault("uucp_hora", $ags022->uucp_hora);
            $this->tag->setDefault("pedido_compra", $ags022->pedido_compra);
            $this->tag->setDefault("cliente", $ags022->cliente);
            $this->tag->setDefault("fornecedor", $ags022->fornecedor);
            $this->tag->setDefault("fornecedor_emp", $ags022->fornecedor_emp);
            $this->tag->setDefault("fornecedor_cod", $ags022->fornecedor_cod);
            $this->tag->setDefault("cliente_emp", $ags022->cliente_emp);
            $this->tag->setDefault("cliente_cod", $ags022->cliente_cod);
            $this->tag->setDefault("log", $ags022->log);
            $this->tag->setDefault("log_data", $ags022->log_data);
            $this->tag->setDefault("log_hora", $ags022->log_hora);
            $this->tag->setDefault("destinario", $ags022->destinario);
            $this->tag->setDefault("x", $ags022->x);
            $this->tag->setDefault("y", $ags022->y);
            $this->tag->setDefault("distancia", $ags022->distancia);
            $this->tag->setDefault("suframa", $ags022->suframa);
            $this->tag->setDefault("pedido_obs", $ags022->pedido_obs);
            $this->tag->setDefault("m1", $ags022->m1);
            $this->tag->setDefault("m2", $ags022->m2);
            $this->tag->setDefault("m3", $ags022->m3);
            $this->tag->setDefault("m4", $ags022->m4);
            $this->tag->setDefault("m5", $ags022->m5);
            $this->tag->setDefault("m6", $ags022->m6);
            $this->tag->setDefault("m7", $ags022->m7);
            $this->tag->setDefault("m8", $ags022->m8);
            $this->tag->setDefault("m9", $ags022->m9);
            $this->tag->setDefault("informatizada", $ags022->informatizada);
            $this->tag->setDefault("cgc_1", $ags022->cgc_1);
            $this->tag->setDefault("nf1", $ags022->nf1);
            $this->tag->setDefault("nf2", $ags022->nf2);
            $this->tag->setDefault("nf3", $ags022->nf3);
            $this->tag->setDefault("nf4", $ags022->nf4);
            $this->tag->setDefault("nf5", $ags022->nf5);
            $this->tag->setDefault("nf6", $ags022->nf6);
            $this->tag->setDefault("nf7", $ags022->nf7);
            $this->tag->setDefault("nf8", $ags022->nf8);
            $this->tag->setDefault("nf9", $ags022->nf9);
            $this->tag->setDefault("oc1", $ags022->oc1);
            $this->tag->setDefault("oc2", $ags022->oc2);
            $this->tag->setDefault("oc3", $ags022->oc3);
            $this->tag->setDefault("oc4", $ags022->oc4);
            $this->tag->setDefault("oc5", $ags022->oc5);
            $this->tag->setDefault("oc6", $ags022->oc6);
            $this->tag->setDefault("oc7", $ags022->oc7);
            $this->tag->setDefault("oc8", $ags022->oc8);
            $this->tag->setDefault("oc9", $ags022->oc9);
            $this->tag->setDefault("cheque", $ags022->cheque);
            $this->tag->setDefault("bloqueio_nf", $ags022->bloqueio_nf);
            $this->tag->setDefault("bloqueio_fatura", $ags022->bloqueio_fatura);
            $this->tag->setDefault("bloqueio_compra", $ags022->bloqueio_compra);
            $this->tag->setDefault("recibo", $ags022->recibo);
            $this->tag->setDefault("fator_pedido", $ags022->fator_pedido);
            $this->tag->setDefault("cpd", $ags022->cpd);
            $this->tag->setDefault("gerente", $ags022->gerente);
            $this->tag->setDefault("tesoreiro", $ags022->tesoreiro);
            $this->tag->setDefault("dias_malote", $ags022->dias_malote);
            $this->tag->setDefault("caf", $ags022->caf);
            $this->tag->setDefault("cafil", $ags022->cafil);
            $this->tag->setDefault("ender_numero", $ags022->ender_numero);
            $this->tag->setDefault("mult_med_mensal", $ags022->mult_med_mensal);
            $this->tag->setDefault("possui_selofisc", $ags022->possui_selofisc);
            $this->tag->setDefault("inst_banc_jur", $ags022->inst_banc_jur);
            $this->tag->setDefault("inst_banc_fis", $ags022->inst_banc_fis);
            $this->tag->setDefault("id_reg", $ags022->id_reg);
            $this->tag->setDefault("oper_isenta", $ags022->oper_isenta);
            $this->tag->setDefault("dtregjuntacom", $ags022->dtregjuntacom);
            $this->tag->setDefault("cod_municipio", $ags022->cod_municipio);
            $this->tag->setDefault("cod_uf", $ags022->cod_uf);
            $this->tag->setDefault("cod_pais", $ags022->cod_pais);
            $this->tag->setDefault("desc_pais", $ags022->desc_pais);
            $this->tag->setDefault("ind_perfil", $ags022->ind_perfil);
            $this->tag->setDefault("ind_atividade", $ags022->ind_atividade);
            $this->tag->setDefault("cod_receita", $ags022->cod_receita);
            $this->tag->setDefault("campo_md5_registro", $ags022->campo_md5_registro);
            
        }
    }

    /**
     * Creates a new ags022
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "ags022",
                'action' => 'index'
            ]);

            return;
        }

        $ags022 = new Ags022();
        $ags022->codigo = $this->request->getPost("codigo");
        $ags022->nomeFantasia = $this->request->getPost("nome_fantasia");
        $ags022->razaoSocial = $this->request->getPost("razao_social");
        $ags022->endereco = $this->request->getPost("endereco");
        $ags022->bairro = $this->request->getPost("bairro");
        $ags022->cidade = $this->request->getPost("cidade");
        $ags022->estado = $this->request->getPost("estado");
        $ags022->cep = $this->request->getPost("cep");
        $ags022->cgc = $this->request->getPost("cgc");
        $ags022->ddd = $this->request->getPost("ddd");
        $ags022->telefone = $this->request->getPost("telefone");
        $ags022->fax = $this->request->getPost("fax");
        $ags022->inscricao = $this->request->getPost("inscricao");
        $ags022->inscricaoMunic = $this->request->getPost("inscricao_munic");
        $ags022->nfNumero = $this->request->getPost("nf_numero");
        $ags022->nfModelo = $this->request->getPost("nf_modelo");
        $ags022->nfOnline = $this->request->getPost("nf_online");
        $ags022->osNumero = $this->request->getPost("os_numero");
        $ags022->osModelo = $this->request->getPost("os_modelo");
        $ags022->faturaNumero = $this->request->getPost("fatura_numero");
        $ags022->localpagto = $this->request->getPost("localpagto");
        $ags022->cadastroClient = $this->request->getPost("cadastro_client");
        $ags022->cadastroFornec = $this->request->getPost("cadastro_fornec");
        $ags022->regjuntacom = $this->request->getPost("regjuntacom");
        $ags022->faturaModelo = $this->request->getPost("fatura_modelo");
        $ags022->empresa = $this->request->getPost("empresa");
        $ags022->folhaMensagem = $this->request->getPost("folha_mensagem");
        $ags022->folhaMensagem1 = $this->request->getPost("folha_mensagem1");
        $ags022->folhaMensagem2 = $this->request->getPost("folha_mensagem2");
        $ags022->fatorPreco = $this->request->getPost("fator_preco");
        $ags022->fgts = $this->request->getPost("fgts");
        $ags022->pedido = $this->request->getPost("pedido");
        $ags022->modelo1 = $this->request->getPost("modelo1");
        $ags022->modelo2 = $this->request->getPost("modelo2");
        $ags022->modelo3 = $this->request->getPost("modelo3");
        $ags022->modelo4 = $this->request->getPost("modelo4");
        $ags022->modelo5 = $this->request->getPost("modelo5");
        $ags022->modelo6 = $this->request->getPost("modelo6");
        $ags022->modelo7 = $this->request->getPost("modelo7");
        $ags022->modelo8 = $this->request->getPost("modelo8");
        $ags022->modelo9 = $this->request->getPost("modelo9");
        $ags022->uucp = $this->request->getPost("uucp");
        $ags022->uucpData = $this->request->getPost("uucp_data");
        $ags022->uucpHora = $this->request->getPost("uucp_hora");
        $ags022->pedidoCompra = $this->request->getPost("pedido_compra");
        $ags022->cliente = $this->request->getPost("cliente");
        $ags022->fornecedor = $this->request->getPost("fornecedor");
        $ags022->fornecedorEmp = $this->request->getPost("fornecedor_emp");
        $ags022->fornecedorCod = $this->request->getPost("fornecedor_cod");
        $ags022->clienteEmp = $this->request->getPost("cliente_emp");
        $ags022->clienteCod = $this->request->getPost("cliente_cod");
        $ags022->log = $this->request->getPost("log");
        $ags022->logData = $this->request->getPost("log_data");
        $ags022->logHora = $this->request->getPost("log_hora");
        $ags022->destinario = $this->request->getPost("destinario");
        $ags022->x = $this->request->getPost("x");
        $ags022->y = $this->request->getPost("y");
        $ags022->distancia = $this->request->getPost("distancia");
        $ags022->suframa = $this->request->getPost("suframa");
        $ags022->pedidoObs = $this->request->getPost("pedido_obs");
        $ags022->m1 = $this->request->getPost("m1");
        $ags022->m2 = $this->request->getPost("m2");
        $ags022->m3 = $this->request->getPost("m3");
        $ags022->m4 = $this->request->getPost("m4");
        $ags022->m5 = $this->request->getPost("m5");
        $ags022->m6 = $this->request->getPost("m6");
        $ags022->m7 = $this->request->getPost("m7");
        $ags022->m8 = $this->request->getPost("m8");
        $ags022->m9 = $this->request->getPost("m9");
        $ags022->informatizada = $this->request->getPost("informatizada");
        $ags022->cgc1 = $this->request->getPost("cgc_1");
        $ags022->nf1 = $this->request->getPost("nf1");
        $ags022->nf2 = $this->request->getPost("nf2");
        $ags022->nf3 = $this->request->getPost("nf3");
        $ags022->nf4 = $this->request->getPost("nf4");
        $ags022->nf5 = $this->request->getPost("nf5");
        $ags022->nf6 = $this->request->getPost("nf6");
        $ags022->nf7 = $this->request->getPost("nf7");
        $ags022->nf8 = $this->request->getPost("nf8");
        $ags022->nf9 = $this->request->getPost("nf9");
        $ags022->oc1 = $this->request->getPost("oc1");
        $ags022->oc2 = $this->request->getPost("oc2");
        $ags022->oc3 = $this->request->getPost("oc3");
        $ags022->oc4 = $this->request->getPost("oc4");
        $ags022->oc5 = $this->request->getPost("oc5");
        $ags022->oc6 = $this->request->getPost("oc6");
        $ags022->oc7 = $this->request->getPost("oc7");
        $ags022->oc8 = $this->request->getPost("oc8");
        $ags022->oc9 = $this->request->getPost("oc9");
        $ags022->cheque = $this->request->getPost("cheque");
        $ags022->bloqueioNf = $this->request->getPost("bloqueio_nf");
        $ags022->bloqueioFatura = $this->request->getPost("bloqueio_fatura");
        $ags022->bloqueioCompra = $this->request->getPost("bloqueio_compra");
        $ags022->recibo = $this->request->getPost("recibo");
        $ags022->fatorPedido = $this->request->getPost("fator_pedido");
        $ags022->cpd = $this->request->getPost("cpd");
        $ags022->gerente = $this->request->getPost("gerente");
        $ags022->tesoreiro = $this->request->getPost("tesoreiro");
        $ags022->diasMalote = $this->request->getPost("dias_malote");
        $ags022->caf = $this->request->getPost("caf");
        $ags022->cafil = $this->request->getPost("cafil");
        $ags022->enderNumero = $this->request->getPost("ender_numero");
        $ags022->multMedMensal = $this->request->getPost("mult_med_mensal");
        $ags022->possuiSelofisc = $this->request->getPost("possui_selofisc");
        $ags022->instBancJur = $this->request->getPost("inst_banc_jur");
        $ags022->instBancFis = $this->request->getPost("inst_banc_fis");
        $ags022->idReg = $this->request->getPost("id_reg");
        $ags022->operIsenta = $this->request->getPost("oper_isenta");
        $ags022->dtregjuntacom = $this->request->getPost("dtregjuntacom");
        $ags022->codMunicipio = $this->request->getPost("cod_municipio");
        $ags022->codUf = $this->request->getPost("cod_uf");
        $ags022->codPais = $this->request->getPost("cod_pais");
        $ags022->descPais = $this->request->getPost("desc_pais");
        $ags022->indPerfil = $this->request->getPost("ind_perfil");
        $ags022->indAtividade = $this->request->getPost("ind_atividade");
        $ags022->codReceita = $this->request->getPost("cod_receita");
        $ags022->campoMd5Registro = $this->request->getPost("campo_md5_registro");
        

        if (!$ags022->save()) {
            foreach ($ags022->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "ags022",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("ags022 was created successfully");

        $this->dispatcher->forward([
            'controller' => "ags022",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a ags022 edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "ags022",
                'action' => 'index'
            ]);

            return;
        }

        $recnum = $this->request->getPost("recnum");
        $ags022 = Ags022::findFirstByrecnum($recnum);

        if (!$ags022) {
            $this->flash->error("ags022 does not exist " . $recnum);

            $this->dispatcher->forward([
                'controller' => "ags022",
                'action' => 'index'
            ]);

            return;
        }

        $ags022->codigo = $this->request->getPost("codigo");
        $ags022->nomeFantasia = $this->request->getPost("nome_fantasia");
        $ags022->razaoSocial = $this->request->getPost("razao_social");
        $ags022->endereco = $this->request->getPost("endereco");
        $ags022->bairro = $this->request->getPost("bairro");
        $ags022->cidade = $this->request->getPost("cidade");
        $ags022->estado = $this->request->getPost("estado");
        $ags022->cep = $this->request->getPost("cep");
        $ags022->cgc = $this->request->getPost("cgc");
        $ags022->ddd = $this->request->getPost("ddd");
        $ags022->telefone = $this->request->getPost("telefone");
        $ags022->fax = $this->request->getPost("fax");
        $ags022->inscricao = $this->request->getPost("inscricao");
        $ags022->inscricaoMunic = $this->request->getPost("inscricao_munic");
        $ags022->nfNumero = $this->request->getPost("nf_numero");
        $ags022->nfModelo = $this->request->getPost("nf_modelo");
        $ags022->nfOnline = $this->request->getPost("nf_online");
        $ags022->osNumero = $this->request->getPost("os_numero");
        $ags022->osModelo = $this->request->getPost("os_modelo");
        $ags022->faturaNumero = $this->request->getPost("fatura_numero");
        $ags022->localpagto = $this->request->getPost("localpagto");
        $ags022->cadastroClient = $this->request->getPost("cadastro_client");
        $ags022->cadastroFornec = $this->request->getPost("cadastro_fornec");
        $ags022->regjuntacom = $this->request->getPost("regjuntacom");
        $ags022->faturaModelo = $this->request->getPost("fatura_modelo");
        $ags022->empresa = $this->request->getPost("empresa");
        $ags022->folhaMensagem = $this->request->getPost("folha_mensagem");
        $ags022->folhaMensagem1 = $this->request->getPost("folha_mensagem1");
        $ags022->folhaMensagem2 = $this->request->getPost("folha_mensagem2");
        $ags022->fatorPreco = $this->request->getPost("fator_preco");
        $ags022->fgts = $this->request->getPost("fgts");
        $ags022->pedido = $this->request->getPost("pedido");
        $ags022->modelo1 = $this->request->getPost("modelo1");
        $ags022->modelo2 = $this->request->getPost("modelo2");
        $ags022->modelo3 = $this->request->getPost("modelo3");
        $ags022->modelo4 = $this->request->getPost("modelo4");
        $ags022->modelo5 = $this->request->getPost("modelo5");
        $ags022->modelo6 = $this->request->getPost("modelo6");
        $ags022->modelo7 = $this->request->getPost("modelo7");
        $ags022->modelo8 = $this->request->getPost("modelo8");
        $ags022->modelo9 = $this->request->getPost("modelo9");
        $ags022->uucp = $this->request->getPost("uucp");
        $ags022->uucpData = $this->request->getPost("uucp_data");
        $ags022->uucpHora = $this->request->getPost("uucp_hora");
        $ags022->pedidoCompra = $this->request->getPost("pedido_compra");
        $ags022->cliente = $this->request->getPost("cliente");
        $ags022->fornecedor = $this->request->getPost("fornecedor");
        $ags022->fornecedorEmp = $this->request->getPost("fornecedor_emp");
        $ags022->fornecedorCod = $this->request->getPost("fornecedor_cod");
        $ags022->clienteEmp = $this->request->getPost("cliente_emp");
        $ags022->clienteCod = $this->request->getPost("cliente_cod");
        $ags022->log = $this->request->getPost("log");
        $ags022->logData = $this->request->getPost("log_data");
        $ags022->logHora = $this->request->getPost("log_hora");
        $ags022->destinario = $this->request->getPost("destinario");
        $ags022->x = $this->request->getPost("x");
        $ags022->y = $this->request->getPost("y");
        $ags022->distancia = $this->request->getPost("distancia");
        $ags022->suframa = $this->request->getPost("suframa");
        $ags022->pedidoObs = $this->request->getPost("pedido_obs");
        $ags022->m1 = $this->request->getPost("m1");
        $ags022->m2 = $this->request->getPost("m2");
        $ags022->m3 = $this->request->getPost("m3");
        $ags022->m4 = $this->request->getPost("m4");
        $ags022->m5 = $this->request->getPost("m5");
        $ags022->m6 = $this->request->getPost("m6");
        $ags022->m7 = $this->request->getPost("m7");
        $ags022->m8 = $this->request->getPost("m8");
        $ags022->m9 = $this->request->getPost("m9");
        $ags022->informatizada = $this->request->getPost("informatizada");
        $ags022->cgc1 = $this->request->getPost("cgc_1");
        $ags022->nf1 = $this->request->getPost("nf1");
        $ags022->nf2 = $this->request->getPost("nf2");
        $ags022->nf3 = $this->request->getPost("nf3");
        $ags022->nf4 = $this->request->getPost("nf4");
        $ags022->nf5 = $this->request->getPost("nf5");
        $ags022->nf6 = $this->request->getPost("nf6");
        $ags022->nf7 = $this->request->getPost("nf7");
        $ags022->nf8 = $this->request->getPost("nf8");
        $ags022->nf9 = $this->request->getPost("nf9");
        $ags022->oc1 = $this->request->getPost("oc1");
        $ags022->oc2 = $this->request->getPost("oc2");
        $ags022->oc3 = $this->request->getPost("oc3");
        $ags022->oc4 = $this->request->getPost("oc4");
        $ags022->oc5 = $this->request->getPost("oc5");
        $ags022->oc6 = $this->request->getPost("oc6");
        $ags022->oc7 = $this->request->getPost("oc7");
        $ags022->oc8 = $this->request->getPost("oc8");
        $ags022->oc9 = $this->request->getPost("oc9");
        $ags022->cheque = $this->request->getPost("cheque");
        $ags022->bloqueioNf = $this->request->getPost("bloqueio_nf");
        $ags022->bloqueioFatura = $this->request->getPost("bloqueio_fatura");
        $ags022->bloqueioCompra = $this->request->getPost("bloqueio_compra");
        $ags022->recibo = $this->request->getPost("recibo");
        $ags022->fatorPedido = $this->request->getPost("fator_pedido");
        $ags022->cpd = $this->request->getPost("cpd");
        $ags022->gerente = $this->request->getPost("gerente");
        $ags022->tesoreiro = $this->request->getPost("tesoreiro");
        $ags022->diasMalote = $this->request->getPost("dias_malote");
        $ags022->caf = $this->request->getPost("caf");
        $ags022->cafil = $this->request->getPost("cafil");
        $ags022->enderNumero = $this->request->getPost("ender_numero");
        $ags022->multMedMensal = $this->request->getPost("mult_med_mensal");
        $ags022->possuiSelofisc = $this->request->getPost("possui_selofisc");
        $ags022->instBancJur = $this->request->getPost("inst_banc_jur");
        $ags022->instBancFis = $this->request->getPost("inst_banc_fis");
        $ags022->idReg = $this->request->getPost("id_reg");
        $ags022->operIsenta = $this->request->getPost("oper_isenta");
        $ags022->dtregjuntacom = $this->request->getPost("dtregjuntacom");
        $ags022->codMunicipio = $this->request->getPost("cod_municipio");
        $ags022->codUf = $this->request->getPost("cod_uf");
        $ags022->codPais = $this->request->getPost("cod_pais");
        $ags022->descPais = $this->request->getPost("desc_pais");
        $ags022->indPerfil = $this->request->getPost("ind_perfil");
        $ags022->indAtividade = $this->request->getPost("ind_atividade");
        $ags022->codReceita = $this->request->getPost("cod_receita");
        $ags022->campoMd5Registro = $this->request->getPost("campo_md5_registro");
        

        if (!$ags022->save()) {

            foreach ($ags022->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "ags022",
                'action' => 'edit',
                'params' => [$ags022->recnum]
            ]);

            return;
        }

        $this->flash->success("ags022 was updated successfully");

        $this->dispatcher->forward([
            'controller' => "ags022",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a ags022
     *
     * @param string $recnum
     */
    public function deleteAction($recnum)
    {
        $ags022 = Ags022::findFirstByrecnum($recnum);
        if (!$ags022) {
            $this->flash->error("ags022 was not found");

            $this->dispatcher->forward([
                'controller' => "ags022",
                'action' => 'index'
            ]);

            return;
        }

        if (!$ags022->delete()) {

            foreach ($ags022->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "ags022",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("ags022 was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "ags022",
            'action' => "index"
        ]);
    }

}
