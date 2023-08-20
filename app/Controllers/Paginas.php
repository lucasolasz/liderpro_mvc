<?php

class Paginas extends Controller
{

    //Construtor do model do Usuário que fará o acesso ao banco
    public function __construct()
    {
        $this->paginaDinamicaModel = $this->model('PaginaDinamica');
        $this->paginasModel = $this->model("Pagina");
        $this->clienteModel = $this->model("Cliente");
        $this->segmentoModel = $this->model("Segmento");
    }

    public function contatos()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'contatos',
            'contatoActive' => 'active',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('painel/paginas/contatos', $dados);
    }

    public function clientes()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $visualizaClientes = $this->clienteModel->listarClientes();
        $fotosLogomarca = $this->clienteModel->listarFotosLogomarca();

        $dados = [
            'paginas' => $paginas,
            'visualizaClientes' => $visualizaClientes,
            'tituloBreadcrumb' => 'clientes',
            'clienteActive' => 'active',
            'fotosLogomarca' => $fotosLogomarca
        ];

        //Retorna para a view
        $this->view('painel/paginas/clientes', $dados);
    }

    public function pesquisaAvancadaClienteAlfabetica()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $letrasAlfabeto = range('A', 'Z');

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => 'ordemAlfabetica',
            'clienteActive' => 'active',
            'letrasAlfabeto' => $letrasAlfabeto
        ];

        //Retorna para a view
        $this->view('painel/paginas/pesquisaAvancadaClienteAlfabetica', $dados);
    }

    public function buscaAjaxTabelaClientesAlfabetica()
    {

        //Retorna o valor da direita caso o valor da esquerda esteja ou não esteja settado (null coalesce operator)
        $dados['letra_alfabeto'] = $_POST['letra_alfabeto'] ?? "";
        $letra_alfabeto = $dados['letra_alfabeto'];
        $resultado = $this->clienteModel->listarClientesComFiltro($letra_alfabeto);

        $dados = [
            'resultado' => $resultado
        ];

        $this->viewSemTopoRodapeParaAjax('painel/paginas/ajax/buscaAjaxTabelaClientesAlfabetica', $dados);
    }

    public function buscaAjaxTabelaClientesAlfabeticaPesquisa()
    {
        $dados['ds_nome_cliente'] = $_POST['ds_nome_cliente'] ?? "";
        if ($dados['ds_nome_cliente'] != "") {
            $ds_nome_cliente = $dados['ds_nome_cliente'];
            $resultado = $this->clienteModel->listarClientesComFiltro($ds_nome_cliente);

            $dados = [
                'resultado' => $resultado
            ];
        } else {
            $dados = [
                'resultado' => null
            ];
        }

        $this->viewSemTopoRodapeParaAjax('painel/paginas/ajax/buscaAjaxTabelaClientesAlfabeticaPesquisa', $dados);
    }

    public function buscaAjaxTabelaClientesSegmentoPesquisa()
    {
        $dados['ds_nome_cliente'] = $_POST['ds_nome_cliente'] ?? "";
        if ($dados['ds_nome_cliente'] != "") {
            $ds_nome_cliente = $dados['ds_nome_cliente'];
            $resultado = $this->clienteModel->listarClientesComFiltro($ds_nome_cliente);

            $dados = [
                'resultado' => $resultado
            ];
        } else {
            $dados = [
                'resultado' => null
            ];
        }

        $this->viewSemTopoRodapeParaAjax('painel/paginas/ajax/buscaAjaxTabelaClientesPorSegmentoPesquisa', $dados);
    }

    public function pesquisaAvancadaClientePorSegmento()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $visualizarSegmentos = $this->segmentoModel->listarSegmentos();

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => 'ordemSegmento',
            'clienteActive' => 'active',
            'segmentos' => $visualizarSegmentos
        ];

        //Retorna para a view
        $this->view('painel/paginas/pesquisaAvancadaClientePorSegmento', $dados);
    }

    public function buscaAjaxTabelaClientesPorSegmento()
    {

        //Retorna o valor da direita caso o valor da esquerda esteja ou não esteja settado (null coalesce operator)
        $dados['id_segmento'] = $_POST['id_segmento'] ?? "";
        $id_segmento = $dados['id_segmento'];
        $resultado = $this->segmentoModel->listarClienteSegmento($id_segmento);

        $dados = [
            'resultado' => $resultado
        ];

        $this->viewSemTopoRodapeParaAjax('painel/paginas/ajax/buscaAjaxTabelaClientesPorSegmento', $dados);
    }

    public function buscaAjaxAlteraCorSegmentos()
    {

        //Retorna o valor da direita caso o valor da esquerda esteja ou não esteja settado (null coalesce operator)
        $dados['id_segmento'] = $_POST['id_segmento'] ?? "";
        $id_segmento = $dados['id_segmento'];
        $resultado = $this->segmentoModel->listarSegmentos();

        $dados = [
            'resultado' => $resultado,
            'id_segmento' => $id_segmento
        ];

        $this->viewSemTopoRodapeParaAjax('painel/paginas/ajax/buscaAjaxAlteraCorSegmentos', $dados);
    }


    public function buscaAjaxAlteraCorLetraSelecionada()
    {
        $dados['letra_alfabeto'] = $_POST['letra_alfabeto'] ?? "";
        $letra_alfabeto_selecionada = $dados['letra_alfabeto'];
        $letrasAlfabeto = range('A', 'Z');
        $dados = [
            'letra_alfabeto_selecionada' => $letra_alfabeto_selecionada,
            'letrasAlfabeto' => $letrasAlfabeto
        ];

        $this->viewSemTopoRodapeParaAjax('painel/paginas/ajax/buscaAjaxAlteraCorLetraSelecionada', $dados);
    }

    public function lider_pro()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'lider_pro',
            'liderproActive' => 'active',
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/lider_pro', $dados);
    }

    public function valores()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'valores',
            'liderproActive' => 'active',
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/valores', $dados);
    }

    public function parcerias()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'parcerias',
            'liderproActive' => 'active',
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/parcerias', $dados);
    }

    public function informacoes_gerais()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'informacoes_gerais',
            'liderproActive' => 'active',
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/informacoes_gerais', $dados);
    }

    public function termos_de_uso()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'termos_de_uso',
            'liderproActive' => 'active',
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/termos_de_uso', $dados);
    }

    public function politica_de_privacidade()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'politica_de_privacidade',
            'liderproActive' => 'active',
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/politica_de_privacidade', $dados);
    }

    public function informacoes_legais()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'informacoes_legais',
            'liderproActive' => 'active',
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/informacoes_legais', $dados);
    }

    public function pesquisarHome()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {
            
        } else {
            $dados = [
                'paginas' => $paginas,
                'tituloBreadcrumb' => 'HOME',
            ];

            $this->view('painel/paginas/home', $dados);
        }
    }
}
