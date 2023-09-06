<?php

class AssistenciaOpcao extends Controller
{

    //Construtor do model do Usuário que fará o acesso ao banco
    public function __construct()
    {
        $this->paginaDinamicaModel = $this->model('PaginaDinamica');
    }


    public function computador_opc()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'computador_opc',
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('assistencia_tecnicas_opcao/computador_opc', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('assistencia_tecnicas_opcao/computador_opc_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('assistencia_tecnicas_opcao/computador_opc_en', $dados);
        }
    }

    public function notebook_opc()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'notebook_opc',
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('assistencia_tecnicas_opcao/notebook_opc', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('assistencia_tecnicas_opcao/notebook_opc_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('assistencia_tecnicas_opcao/notebook_opc_en', $dados);
        }
    }

    public function tablet_celular_opc()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'tablet_celular_opc',
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('assistencia_tecnicas_opcao/tablet_celular_opc', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('assistencia_tecnicas_opcao/tablet_celular_opc_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('assistencia_tecnicas_opcao/tablet_celular_opc_en', $dados);
        }
    }

    public function projetor_opc()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'projetor_opc',
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('assistencia_tecnicas_opcao/projetor_opc', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('assistencia_tecnicas_opcao/projetor_opc_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('assistencia_tecnicas_opcao/projetor_opc_en', $dados);
        }
    }

    public function fonte_alimentacao_opc()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'fonte_alimentacao_opc',
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('assistencia_tecnicas_opcao/fonte_alimentacao_opc', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('assistencia_tecnicas_opcao/fonte_alimentacao_opc_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('assistencia_tecnicas_opcao/fonte_alimentacao_opc_en', $dados);
        }
    }

    public function tv_monitor_opc()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'tv_monitor_opc',
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('assistencia_tecnicas_opcao/tv_monitor_opc', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('assistencia_tecnicas_opcao/tv_monitor_opc_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('assistencia_tecnicas_opcao/tv_monitor_opc_en', $dados);
        }
    }

    public function impressora_opc()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'impressora_opc',
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('assistencia_tecnicas_opcao/impressora_opc', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('assistencia_tecnicas_opcao/impressora_opc_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('assistencia_tecnicas_opcao/impressora_opc_en', $dados);
        }
    }

    public function nobreak_opc()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'nobreak_opc',
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('assistencia_tecnicas_opcao/nobreak_opc', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('assistencia_tecnicas_opcao/nobreak_opc_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('assistencia_tecnicas_opcao/nobreak_opc_en', $dados);
        }
    }

    public function apple_opc()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'apple_opc',
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('assistencia_tecnicas_opcao/apple_opc', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('assistencia_tecnicas_opcao/apple_opc_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('assistencia_tecnicas_opcao/apple_opc_en', $dados);
        }
    }
}
