<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class Cpa077Controller extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for cpa077
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'Cpa077', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "recnum";

        $cpa077 = Cpa077::find($parameters);
        if (count($cpa077) == 0) {
            $this->flash->notice("The search did not find any cpa077");

            $this->dispatcher->forward([
                "controller" => "cpa077",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $cpa077,
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
     * Edits a cpa077
     *
     * @param string $recnum
     */
    public function editAction($recnum)
    {
        if (!$this->request->isPost()) {

            $cpa077 = Cpa077::findFirstByrecnum($recnum);
            if (!$cpa077) {
                $this->flash->error("cpa077 was not found");

                $this->dispatcher->forward([
                    'controller' => "cpa077",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->recnum = $cpa077->recnum;

            $this->tag->setDefault("recnum", $cpa077->recnum);
            $this->tag->setDefault("empresa", $cpa077->empresa);
            $this->tag->setDefault("fornecedor", $cpa077->fornecedor);
            $this->tag->setDefault("codigo", $cpa077->codigo);
            $this->tag->setDefault("codigo_invc", $cpa077->codigo_invc);
            $this->tag->setDefault("codigo_barra", $cpa077->codigo_barra);
            $this->tag->setDefault("codigo_fornec", $cpa077->codigo_fornec);
            $this->tag->setDefault("descricao", $cpa077->descricao);
            $this->tag->setDefault("descricao1", $cpa077->descricao1);
            $this->tag->setDefault("descricao2", $cpa077->descricao2);
            $this->tag->setDefault("descricao3", $cpa077->descricao3);
            $this->tag->setDefault("descricao4", $cpa077->descricao4);
            $this->tag->setDefault("desc_maximo", $cpa077->desc_maximo);
            $this->tag->setDefault("grupo_preco", $cpa077->grupo_preco);
            $this->tag->setDefault("peso_liquido", $cpa077->peso_liquido);
            $this->tag->setDefault("peso_bruto", $cpa077->peso_bruto);
            $this->tag->setDefault("desconto_prod", $cpa077->desconto_prod);
            $this->tag->setDefault("imposto_codigo", $cpa077->imposto_codigo);
            $this->tag->setDefault("imposto_tipo", $cpa077->imposto_tipo);
            $this->tag->setDefault("embalagem", $cpa077->embalagem);
            $this->tag->setDefault("margem_prod", $cpa077->margem_prod);
            $this->tag->setDefault("peso_prod", $cpa077->peso_prod);
            $this->tag->setDefault("observacao", $cpa077->observacao);
            $this->tag->setDefault("ativo", $cpa077->ativo);
            $this->tag->setDefault("cadastro_data", $cpa077->cadastro_data);
            $this->tag->setDefault("cadastro_user", $cpa077->cadastro_user);
            $this->tag->setDefault("cadastro_hora", $cpa077->cadastro_hora);
            $this->tag->setDefault("alteracao_data", $cpa077->alteracao_data);
            $this->tag->setDefault("alteracao_user", $cpa077->alteracao_user);
            $this->tag->setDefault("alteracao_hora", $cpa077->alteracao_hora);
            $this->tag->setDefault("unidade_venda", $cpa077->unidade_venda);
            $this->tag->setDefault("unidade_compra", $cpa077->unidade_compra);
            $this->tag->setDefault("conversao_vd_cp", $cpa077->conversao_vd_cp);
            $this->tag->setDefault("descricao_compl", $cpa077->descricao_compl);
            $this->tag->setDefault("descricao_compl_invc", $cpa077->descricao_compl_invc);
            $this->tag->setDefault("visivel_filial", $cpa077->visivel_filial);
            $this->tag->setDefault("estoque", $cpa077->estoque);
            $this->tag->setDefault("preco_lista", $cpa077->preco_lista);
            $this->tag->setDefault("preco_lista1", $cpa077->preco_lista1);
            $this->tag->setDefault("preco_lista2", $cpa077->preco_lista2);
            $this->tag->setDefault("preco_lista_dt", $cpa077->preco_lista_dt);
            $this->tag->setDefault("preco_lista_dt1", $cpa077->preco_lista_dt1);
            $this->tag->setDefault("preco_lista_dt2", $cpa077->preco_lista_dt2);
            $this->tag->setDefault("composto_emp", $cpa077->composto_emp);
            $this->tag->setDefault("composto_forn", $cpa077->composto_forn);
            $this->tag->setDefault("composto_prod", $cpa077->composto_prod);
            $this->tag->setDefault("equivalente_emp", $cpa077->equivalente_emp);
            $this->tag->setDefault("equivalente_for", $cpa077->equivalente_for);
            $this->tag->setDefault("equivalente_pro", $cpa077->equivalente_pro);
            $this->tag->setDefault("semelhante_emp", $cpa077->semelhante_emp);
            $this->tag->setDefault("semelhante_for", $cpa077->semelhante_for);
            $this->tag->setDefault("semelhante_pro", $cpa077->semelhante_pro);
            $this->tag->setDefault("composto_qtde", $cpa077->composto_qtde);
            $this->tag->setDefault("minimo", $cpa077->minimo);
            $this->tag->setDefault("maximo", $cpa077->maximo);
            $this->tag->setDefault("embalagem_venda", $cpa077->embalagem_venda);
            $this->tag->setDefault("conv_com_ven", $cpa077->conv_com_ven);
            $this->tag->setDefault("vendedor", $cpa077->vendedor);
            $this->tag->setDefault("comp_emp", $cpa077->comp_emp);
            $this->tag->setDefault("comp_for", $cpa077->comp_for);
            $this->tag->setDefault("comp_pro", $cpa077->comp_pro);
            $this->tag->setDefault("medida", $cpa077->medida);
            $this->tag->setDefault("medida_desc", $cpa077->medida_desc);
            $this->tag->setDefault("cb", $cpa077->cb);
            $this->tag->setDefault("decimais", $cpa077->decimais);
            $this->tag->setDefault("ipi", $cpa077->ipi);
            $this->tag->setDefault("aplicacao", $cpa077->aplicacao);
            $this->tag->setDefault("medida_un", $cpa077->medida_un);
            $this->tag->setDefault("caf", $cpa077->caf);
            $this->tag->setDefault("cafil", $cpa077->cafil);
            $this->tag->setDefault("abandonado", $cpa077->abandonado);
            $this->tag->setDefault("id_reg", $cpa077->id_reg);
            $this->tag->setDefault("indice_compra", $cpa077->indice_compra);
            $this->tag->setDefault("coefreducao", $cpa077->coefreducao);
            $this->tag->setDefault("codigo_forn", $cpa077->codigo_forn);
            $this->tag->setDefault("descricao_forn", $cpa077->descricao_forn);
            $this->tag->setDefault("coefsubst", $cpa077->coefsubst);
            $this->tag->setDefault("icms_proprio", $cpa077->icms_proprio);
            $this->tag->setDefault("unidade_transf", $cpa077->unidade_transf);
            $this->tag->setDefault("classfiscal", $cpa077->classfiscal);
            $this->tag->setDefault("ipi_venda", $cpa077->ipi_venda);
            $this->tag->setDefault("grupo_comissao", $cpa077->grupo_comissao);
            $this->tag->setDefault("id_produto", $cpa077->id_produto);
            $this->tag->setDefault("substituido", $cpa077->substituido);
            $this->tag->setDefault("old_codbar", $cpa077->old_codbar);
            $this->tag->setDefault("emb_sep", $cpa077->emb_sep);
            $this->tag->setDefault("extipi", $cpa077->extipi);
            $this->tag->setDefault("complemento", $cpa077->complemento);
            $this->tag->setDefault("cest", $cpa077->cest);
            
        }
    }

    /**
     * Creates a new cpa077
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "cpa077",
                'action' => 'index'
            ]);

            return;
        }

        $cpa077 = new Cpa077();
        $cpa077->empresa = $this->request->getPost("empresa");
        $cpa077->fornecedor = $this->request->getPost("fornecedor");
        $cpa077->codigo = $this->request->getPost("codigo");
        $cpa077->codigoInvc = $this->request->getPost("codigo_invc");
        $cpa077->codigoBarra = $this->request->getPost("codigo_barra");
        $cpa077->codigoFornec = $this->request->getPost("codigo_fornec");
        $cpa077->descricao = $this->request->getPost("descricao");
        $cpa077->descricao1 = $this->request->getPost("descricao1");
        $cpa077->descricao2 = $this->request->getPost("descricao2");
        $cpa077->descricao3 = $this->request->getPost("descricao3");
        $cpa077->descricao4 = $this->request->getPost("descricao4");
        $cpa077->descMaximo = $this->request->getPost("desc_maximo");
        $cpa077->grupoPreco = $this->request->getPost("grupo_preco");
        $cpa077->pesoLiquido = $this->request->getPost("peso_liquido");
        $cpa077->pesoBruto = $this->request->getPost("peso_bruto");
        $cpa077->descontoProd = $this->request->getPost("desconto_prod");
        $cpa077->impostoCodigo = $this->request->getPost("imposto_codigo");
        $cpa077->impostoTipo = $this->request->getPost("imposto_tipo");
        $cpa077->embalagem = $this->request->getPost("embalagem");
        $cpa077->margemProd = $this->request->getPost("margem_prod");
        $cpa077->pesoProd = $this->request->getPost("peso_prod");
        $cpa077->observacao = $this->request->getPost("observacao");
        $cpa077->ativo = $this->request->getPost("ativo");
        $cpa077->cadastroData = $this->request->getPost("cadastro_data");
        $cpa077->cadastroUser = $this->request->getPost("cadastro_user");
        $cpa077->cadastroHora = $this->request->getPost("cadastro_hora");
        $cpa077->alteracaoData = $this->request->getPost("alteracao_data");
        $cpa077->alteracaoUser = $this->request->getPost("alteracao_user");
        $cpa077->alteracaoHora = $this->request->getPost("alteracao_hora");
        $cpa077->unidadeVenda = $this->request->getPost("unidade_venda");
        $cpa077->unidadeCompra = $this->request->getPost("unidade_compra");
        $cpa077->conversaoVdCp = $this->request->getPost("conversao_vd_cp");
        $cpa077->descricaoCompl = $this->request->getPost("descricao_compl");
        $cpa077->descricaoComplInvc = $this->request->getPost("descricao_compl_invc");
        $cpa077->visivelFilial = $this->request->getPost("visivel_filial");
        $cpa077->estoque = $this->request->getPost("estoque");
        $cpa077->precoLista = $this->request->getPost("preco_lista");
        $cpa077->precoLista1 = $this->request->getPost("preco_lista1");
        $cpa077->precoLista2 = $this->request->getPost("preco_lista2");
        $cpa077->precoListaDt = $this->request->getPost("preco_lista_dt");
        $cpa077->precoListaDt1 = $this->request->getPost("preco_lista_dt1");
        $cpa077->precoListaDt2 = $this->request->getPost("preco_lista_dt2");
        $cpa077->compostoEmp = $this->request->getPost("composto_emp");
        $cpa077->compostoForn = $this->request->getPost("composto_forn");
        $cpa077->compostoProd = $this->request->getPost("composto_prod");
        $cpa077->equivalenteEmp = $this->request->getPost("equivalente_emp");
        $cpa077->equivalenteFor = $this->request->getPost("equivalente_for");
        $cpa077->equivalentePro = $this->request->getPost("equivalente_pro");
        $cpa077->semelhanteEmp = $this->request->getPost("semelhante_emp");
        $cpa077->semelhanteFor = $this->request->getPost("semelhante_for");
        $cpa077->semelhantePro = $this->request->getPost("semelhante_pro");
        $cpa077->compostoQtde = $this->request->getPost("composto_qtde");
        $cpa077->minimo = $this->request->getPost("minimo");
        $cpa077->maximo = $this->request->getPost("maximo");
        $cpa077->embalagemVenda = $this->request->getPost("embalagem_venda");
        $cpa077->convComVen = $this->request->getPost("conv_com_ven");
        $cpa077->vendedor = $this->request->getPost("vendedor");
        $cpa077->compEmp = $this->request->getPost("comp_emp");
        $cpa077->compFor = $this->request->getPost("comp_for");
        $cpa077->compPro = $this->request->getPost("comp_pro");
        $cpa077->medida = $this->request->getPost("medida");
        $cpa077->medidaDesc = $this->request->getPost("medida_desc");
        $cpa077->cb = $this->request->getPost("cb");
        $cpa077->decimais = $this->request->getPost("decimais");
        $cpa077->ipi = $this->request->getPost("ipi");
        $cpa077->aplicacao = $this->request->getPost("aplicacao");
        $cpa077->medidaUn = $this->request->getPost("medida_un");
        $cpa077->caf = $this->request->getPost("caf");
        $cpa077->cafil = $this->request->getPost("cafil");
        $cpa077->abandonado = $this->request->getPost("abandonado");
        $cpa077->idReg = $this->request->getPost("id_reg");
        $cpa077->indiceCompra = $this->request->getPost("indice_compra");
        $cpa077->coefreducao = $this->request->getPost("coefreducao");
        $cpa077->codigoForn = $this->request->getPost("codigo_forn");
        $cpa077->descricaoForn = $this->request->getPost("descricao_forn");
        $cpa077->coefsubst = $this->request->getPost("coefsubst");
        $cpa077->icmsProprio = $this->request->getPost("icms_proprio");
        $cpa077->unidadeTransf = $this->request->getPost("unidade_transf");
        $cpa077->classfiscal = $this->request->getPost("classfiscal");
        $cpa077->ipiVenda = $this->request->getPost("ipi_venda");
        $cpa077->grupoComissao = $this->request->getPost("grupo_comissao");
        $cpa077->idProduto = $this->request->getPost("id_produto");
        $cpa077->substituido = $this->request->getPost("substituido");
        $cpa077->oldCodbar = $this->request->getPost("old_codbar");
        $cpa077->embSep = $this->request->getPost("emb_sep");
        $cpa077->extipi = $this->request->getPost("extipi");
        $cpa077->complemento = $this->request->getPost("complemento");
        $cpa077->cest = $this->request->getPost("cest");
        

        if (!$cpa077->save()) {
            foreach ($cpa077->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "cpa077",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("cpa077 was created successfully");

        $this->dispatcher->forward([
            'controller' => "cpa077",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a cpa077 edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "cpa077",
                'action' => 'index'
            ]);

            return;
        }

        $recnum = $this->request->getPost("recnum");
        $cpa077 = Cpa077::findFirstByrecnum($recnum);

        if (!$cpa077) {
            $this->flash->error("cpa077 does not exist " . $recnum);

            $this->dispatcher->forward([
                'controller' => "cpa077",
                'action' => 'index'
            ]);

            return;
        }

        $cpa077->empresa = $this->request->getPost("empresa");
        $cpa077->fornecedor = $this->request->getPost("fornecedor");
        $cpa077->codigo = $this->request->getPost("codigo");
        $cpa077->codigoInvc = $this->request->getPost("codigo_invc");
        $cpa077->codigoBarra = $this->request->getPost("codigo_barra");
        $cpa077->codigoFornec = $this->request->getPost("codigo_fornec");
        $cpa077->descricao = $this->request->getPost("descricao");
        $cpa077->descricao1 = $this->request->getPost("descricao1");
        $cpa077->descricao2 = $this->request->getPost("descricao2");
        $cpa077->descricao3 = $this->request->getPost("descricao3");
        $cpa077->descricao4 = $this->request->getPost("descricao4");
        $cpa077->descMaximo = $this->request->getPost("desc_maximo");
        $cpa077->grupoPreco = $this->request->getPost("grupo_preco");
        $cpa077->pesoLiquido = $this->request->getPost("peso_liquido");
        $cpa077->pesoBruto = $this->request->getPost("peso_bruto");
        $cpa077->descontoProd = $this->request->getPost("desconto_prod");
        $cpa077->impostoCodigo = $this->request->getPost("imposto_codigo");
        $cpa077->impostoTipo = $this->request->getPost("imposto_tipo");
        $cpa077->embalagem = $this->request->getPost("embalagem");
        $cpa077->margemProd = $this->request->getPost("margem_prod");
        $cpa077->pesoProd = $this->request->getPost("peso_prod");
        $cpa077->observacao = $this->request->getPost("observacao");
        $cpa077->ativo = $this->request->getPost("ativo");
        $cpa077->cadastroData = $this->request->getPost("cadastro_data");
        $cpa077->cadastroUser = $this->request->getPost("cadastro_user");
        $cpa077->cadastroHora = $this->request->getPost("cadastro_hora");
        $cpa077->alteracaoData = $this->request->getPost("alteracao_data");
        $cpa077->alteracaoUser = $this->request->getPost("alteracao_user");
        $cpa077->alteracaoHora = $this->request->getPost("alteracao_hora");
        $cpa077->unidadeVenda = $this->request->getPost("unidade_venda");
        $cpa077->unidadeCompra = $this->request->getPost("unidade_compra");
        $cpa077->conversaoVdCp = $this->request->getPost("conversao_vd_cp");
        $cpa077->descricaoCompl = $this->request->getPost("descricao_compl");
        $cpa077->descricaoComplInvc = $this->request->getPost("descricao_compl_invc");
        $cpa077->visivelFilial = $this->request->getPost("visivel_filial");
        $cpa077->estoque = $this->request->getPost("estoque");
        $cpa077->precoLista = $this->request->getPost("preco_lista");
        $cpa077->precoLista1 = $this->request->getPost("preco_lista1");
        $cpa077->precoLista2 = $this->request->getPost("preco_lista2");
        $cpa077->precoListaDt = $this->request->getPost("preco_lista_dt");
        $cpa077->precoListaDt1 = $this->request->getPost("preco_lista_dt1");
        $cpa077->precoListaDt2 = $this->request->getPost("preco_lista_dt2");
        $cpa077->compostoEmp = $this->request->getPost("composto_emp");
        $cpa077->compostoForn = $this->request->getPost("composto_forn");
        $cpa077->compostoProd = $this->request->getPost("composto_prod");
        $cpa077->equivalenteEmp = $this->request->getPost("equivalente_emp");
        $cpa077->equivalenteFor = $this->request->getPost("equivalente_for");
        $cpa077->equivalentePro = $this->request->getPost("equivalente_pro");
        $cpa077->semelhanteEmp = $this->request->getPost("semelhante_emp");
        $cpa077->semelhanteFor = $this->request->getPost("semelhante_for");
        $cpa077->semelhantePro = $this->request->getPost("semelhante_pro");
        $cpa077->compostoQtde = $this->request->getPost("composto_qtde");
        $cpa077->minimo = $this->request->getPost("minimo");
        $cpa077->maximo = $this->request->getPost("maximo");
        $cpa077->embalagemVenda = $this->request->getPost("embalagem_venda");
        $cpa077->convComVen = $this->request->getPost("conv_com_ven");
        $cpa077->vendedor = $this->request->getPost("vendedor");
        $cpa077->compEmp = $this->request->getPost("comp_emp");
        $cpa077->compFor = $this->request->getPost("comp_for");
        $cpa077->compPro = $this->request->getPost("comp_pro");
        $cpa077->medida = $this->request->getPost("medida");
        $cpa077->medidaDesc = $this->request->getPost("medida_desc");
        $cpa077->cb = $this->request->getPost("cb");
        $cpa077->decimais = $this->request->getPost("decimais");
        $cpa077->ipi = $this->request->getPost("ipi");
        $cpa077->aplicacao = $this->request->getPost("aplicacao");
        $cpa077->medidaUn = $this->request->getPost("medida_un");
        $cpa077->caf = $this->request->getPost("caf");
        $cpa077->cafil = $this->request->getPost("cafil");
        $cpa077->abandonado = $this->request->getPost("abandonado");
        $cpa077->idReg = $this->request->getPost("id_reg");
        $cpa077->indiceCompra = $this->request->getPost("indice_compra");
        $cpa077->coefreducao = $this->request->getPost("coefreducao");
        $cpa077->codigoForn = $this->request->getPost("codigo_forn");
        $cpa077->descricaoForn = $this->request->getPost("descricao_forn");
        $cpa077->coefsubst = $this->request->getPost("coefsubst");
        $cpa077->icmsProprio = $this->request->getPost("icms_proprio");
        $cpa077->unidadeTransf = $this->request->getPost("unidade_transf");
        $cpa077->classfiscal = $this->request->getPost("classfiscal");
        $cpa077->ipiVenda = $this->request->getPost("ipi_venda");
        $cpa077->grupoComissao = $this->request->getPost("grupo_comissao");
        $cpa077->idProduto = $this->request->getPost("id_produto");
        $cpa077->substituido = $this->request->getPost("substituido");
        $cpa077->oldCodbar = $this->request->getPost("old_codbar");
        $cpa077->embSep = $this->request->getPost("emb_sep");
        $cpa077->extipi = $this->request->getPost("extipi");
        $cpa077->complemento = $this->request->getPost("complemento");
        $cpa077->cest = $this->request->getPost("cest");
        

        if (!$cpa077->save()) {

            foreach ($cpa077->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "cpa077",
                'action' => 'edit',
                'params' => [$cpa077->recnum]
            ]);

            return;
        }

        $this->flash->success("cpa077 was updated successfully");

        $this->dispatcher->forward([
            'controller' => "cpa077",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a cpa077
     *
     * @param string $recnum
     */
    public function deleteAction($recnum)
    {
        $cpa077 = Cpa077::findFirstByrecnum($recnum);
        if (!$cpa077) {
            $this->flash->error("cpa077 was not found");

            $this->dispatcher->forward([
                'controller' => "cpa077",
                'action' => 'index'
            ]);

            return;
        }

        if (!$cpa077->delete()) {

            foreach ($cpa077->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "cpa077",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("cpa077 was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "cpa077",
            'action' => "index"
        ]);
    }

}
