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


    public function visualizarPaginas()
    {
        $paginas = $this->paginasModel->listarMenu();

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => ''
        ];

        //Retorna para a view
        $this->view('painel/visualizar', $dados);
    }


    public function cadastrarPagina()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {



            $dados = [
                'txtTitutoPagina' => trim($formulario['txtTitutoPagina']),
                'txtTextPrincipal' => trim($formulario['txtTextPrincipal']),
                'txtNomeTab1' => trim($formulario['txtNomeTab1']),
                'txtTopico1Tab1' => trim($formulario['txtTopico1Tab1']),
                'txtTopico2Tab1' => trim($formulario['txtTopico2Tab1']),
                'txtTopico3Tab1' => trim($formulario['txtTopico3Tab1']),
                'txtTopico4Tab1' => trim($formulario['txtTopico4Tab1']),
                'txtTopico5Tab1' => trim($formulario['txtTopico5Tab1']),
                'txtTopico6Tab1' => trim($formulario['txtTopico6Tab1']),
                'txtTopico7Tab1' => trim($formulario['txtTopico7Tab1']),
                'txtTopico8Tab1' => trim($formulario['txtTopico8Tab1']),
                'txtNomeTab2' => trim($formulario['txtNomeTab2']),
                'txtTopico1Tab2' => trim($formulario['txtTopico1Tab2']),
                'txtTopico2Tab2' => trim($formulario['txtTopico2Tab2']),
                'txtTopico3Tab2' => trim($formulario['txtTopico3Tab2']),
                'txtTopico4Tab2' => trim($formulario['txtTopico4Tab2']),
                'txtTopico5Tab2' => trim($formulario['txtTopico5Tab2']),
                'txtTopico6Tab2' => trim($formulario['txtTopico6Tab2']),
                'txtTopico7Tab2' => trim($formulario['txtTopico7Tab2']),
                'txtTopico8Tab2' => trim($formulario['txtTopico8Tab2']),
                'txtNomeTab3' => trim($formulario['txtNomeTab3']),
                'txtTopico1Tab3' => trim($formulario['txtTopico1Tab3']),
                'txtTopico2Tab3' => trim($formulario['txtTopico2Tab3']),
                'txtTopico3Tab3' => trim($formulario['txtTopico3Tab3']),
                'txtTopico4Tab3' => trim($formulario['txtTopico4Tab3']),
                'txtTopico5Tab3' => trim($formulario['txtTopico5Tab3']),
                'txtTopico6Tab3' => trim($formulario['txtTopico6Tab3']),
                'txtTopico7Tab3' => trim($formulario['txtTopico7Tab3']),
                'txtTopico8Tab3' => trim($formulario['txtTopico8Tab3']),
                'txtNomeTab4' => trim($formulario['txtNomeTab4']),
                'txtTopico1Tab4' => trim($formulario['txtTopico1Tab4']),
                'txtTopico2Tab4' => trim($formulario['txtTopico2Tab4']),
                'txtTopico3Tab4' => trim($formulario['txtTopico3Tab4']),
                'txtTopico4Tab4' => trim($formulario['txtTopico4Tab4']),
                'txtTopico5Tab4' => trim($formulario['txtTopico5Tab4']),
                'txtTopico6Tab4' => trim($formulario['txtTopico6Tab4']),
                'txtTopico7Tab4' => trim($formulario['txtTopico7Tab4']),
                'txtTopico8Tab4' => trim($formulario['txtTopico8Tab4']),
                'chkPaginaAtiva' => $formulario['chkPaginaAtiva']

            ];
            

            $dados['fileBannerPrincipal'] = isset($_FILES['fileBannerPrincipal']) ? $_FILES['fileBannerPrincipal'] : "";
            $dados['filePerguntas'] = isset($_FILES['filePerguntas']) ? $_FILES['filePerguntas'] : "";
            $dados['fileFotoTexto'] = isset($_FILES['fileFotoTexto']) ? $_FILES['fileFotoTexto'] : "";
            $dados['fileFotosServico'] = isset($_FILES['fileFotosServico']) ? $_FILES['fileFotosServico'] : "";

            if ($this->paginasModel->armazenarPagina($dados)) {

                //Para exibir mensagem success , não precisa informar o tipo de classe
                Alertas::mensagem('paginas', 'Página cadastrada com sucesso');
                Redirecionamento::redirecionar('Painel/Painel/visualizarPaginas');
            } else {
                Alertas::mensagem('paginas', 'Não foi possível cadastrar a página', 'alert alert-danger');
                Redirecionamento::redirecionar('Painel/Painel/visualizarPaginas');
            }

        } else {
            $paginas = $this->paginasModel->listarMenu();

            $dados = [
                'paginas' => $paginas,
                'tituloBreadcrumb' => ''
            ];

            $this->view('painel/cadastrar', $dados);
        }
    }


    public function editarPagina()
    {

        $paginas = $this->paginasModel->listarMenu();

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => ''
        ];

        $this->view('painel/editar', $dados);
    }


    public function deletarPagina()
    {

        $paginas = $this->paginasModel->listarMenu();

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => ''
        ];

        $this->view('painel/visualizar', $dados);
    }
}