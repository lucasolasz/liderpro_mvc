<?php

class Painel extends Controller
{

    public function __construct()
    {

        //Redireciona para tela de login caso usuario nao esteja logado
        if (!IsLoged::estaLogado()) {
            //Está vazio, para retornar ao diretorio raiz
            Redirecionamento::redirecionar('UsuariosController/login');
        }

        $this->paginasModel = $this->model("Pagina");
    }


    public function index()
    {

        $paginas = $this->paginasModel->listarMenu();

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => ''
        ];

        //Retorna para a view
        $this->view('painel/index', $dados);
    }


    public function visualizar()
    {
        $paginas = $this->paginasModel->listarMenu();

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => ''
        ];

        //Retorna para a view
        $this->view('painel/visualizar', $dados);
    }
}
