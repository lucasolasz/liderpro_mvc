<?php

class LiderPro extends Controller
{

    //Construtor do model do Usuário que fará o acesso ao banco
    public function __construct()
    {
        $this->paginasModel = $this->model("Pagina");
    }

    public function lider_pro()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'lider_pro',
            'paginas' => $paginas,
            'paginasLiderPro' => $paginasLiderPro
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/lider_pro', $dados);
    }

    public function valores()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'valores',
            'paginas' => $paginas,
            'paginasLiderPro' => $paginasLiderPro
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/valores', $dados);
    }

    public function parcerias()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'parcerias',
            'paginas' => $paginas,
            'paginasLiderPro' => $paginasLiderPro
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/parcerias', $dados);
    }

    public function informacoes_gerais()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'informacoes_gerais',
            'paginas' => $paginas,
            'paginasLiderPro' => $paginasLiderPro
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/informacoes_gerais', $dados);
    }

    public function termos_de_uso()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'termos_de_uso',
            'paginas' => $paginas,
            'paginasLiderPro' => $paginasLiderPro
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/termos_de_uso', $dados);
    }

    public function politica_de_privacidade()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'politica_de_privacidade',
            'paginas' => $paginas,
            'paginasLiderPro' => $paginasLiderPro
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/politica_de_privacidade', $dados);
    }

    public function informacoes_legais()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'informacoes_legais',
            'paginas' => $paginas,
            'paginasLiderPro' => $paginasLiderPro
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('lider_pro/informacoes_legais', $dados);
    }
}
