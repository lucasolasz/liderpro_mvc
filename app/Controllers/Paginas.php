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

    public function contatos(){

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'contatos',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('painel/paginas/contatos', $dados);

        
    }

    public function clientes(){

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $visualizaClientes = $this->clienteModel->listarClientes();
        $fotosLogomarca = $this->clienteModel->listarFotosLogomarca();

        $dados = [
            'paginas' => $paginas,
            'visualizaClientes' => $visualizaClientes,
            'tituloBreadcrumb' => '',
            'fotosLogomarca' => $fotosLogomarca
        ];
        
        //Retorna para a view
        $this->view('painel/paginas/clientes', $dados);
    }

    public function pesquisaAvancadaClienteAlfabetica(){

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $letrasAlfabeto = range('A', 'Z');

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => 'ordemAlfabetica',
            'letrasAlfabeto' => $letrasAlfabeto
        ];
        
        //Retorna para a view
        $this->view('painel/paginas/pesquisaAvancadaClienteAlfabetica', $dados);
    }

    public function buscaAjaxTabelaClientesAlfabetica(){

        //Retorna o valor da direita caso o valor da esquerda esteja ou não esteja settado (null coalesce operator)
        $dados['letra_alfabeto'] = $_POST['letra_alfabeto'] ?? "";
        $letra_alfabeto = $dados['letra_alfabeto'];
        $resultado = $this->clienteModel->listarClientesComFiltro($letra_alfabeto);
        
        $dados = [
            'resultado' => $resultado
        ];

        $this->viewSemTopoRodapeParaAjax('painel/paginas/ajax/buscaAjaxTabelaClientesAlfabetica', $dados);
    }

    public function pesquisaAvancadaClientePorSegmento(){

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $visualizarSegmentos = $this->segmentoModel->listarSegmentos();

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => 'ordemSegmento',
            'segmentos' => $visualizarSegmentos
        ];
        
        //Retorna para a view
        $this->view('painel/paginas/pesquisaAvancadaClientePorSegmento', $dados);
    }

    public function buscaAjaxTabelaClientesPorSegmento(){

        //Retorna o valor da direita caso o valor da esquerda esteja ou não esteja settado (null coalesce operator)
        $dados['id_segmento'] = $_POST['id_segmento'] ?? "";
        $id_segmento = $dados['id_segmento'];
        $resultado = $this->segmentoModel->listarClienteSegmento($id_segmento);
        
        $dados = [
            'resultado' => $resultado
        ];

        $this->viewSemTopoRodapeParaAjax('painel/paginas/ajax/buscaAjaxTabelaClientesPorSegmento', $dados);
    }

    public function buscaAjaxAlteraCorSegmentos(){

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



    public function lider_pro()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'lider_pro',
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
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/informacoes_legais', $dados);
    }
}