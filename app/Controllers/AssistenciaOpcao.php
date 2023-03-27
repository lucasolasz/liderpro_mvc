<?php

class AssistenciaOpcao extends Controller 
{

     //Construtor do model do Usuário que fará o acesso ao banco
     public function __construct()
     {
        $this->paginasModel = $this->model("Pagina");
     }


    public function computador_opc(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'computador_opc',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('assistencia_tecnicas_opcao/computador_opc', $dados);
    }

    public function notebook_opc(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'notebook_opc',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('assistencia_tecnicas_opcao/notebook_opc', $dados); 
    }

    public function tablet_celular_opc(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'tablet_celular_opc',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('assistencia_tecnicas_opcao/tablet_celular_opc', $dados);
    }

    public function projetor_opc(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'projetor_opc',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('assistencia_tecnicas_opcao/projetor_opc', $dados);
    }
    
    public function fonte_alimentacao_opc(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'fonte_alimentacao_opc',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('assistencia_tecnicas_opcao/fonte_alimentacao_opc', $dados);
    }

    public function tv_monitor_opc(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'tv_monitor_opc',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('assistencia_tecnicas_opcao/tv_monitor_opc', $dados);
    }

    public function impressora_opc(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'impressora_opc',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('assistencia_tecnicas_opcao/impressora_opc', $dados);
    }

    public function nobreak_opc(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'nobreak_opc',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('assistencia_tecnicas_opcao/nobreak_opc', $dados);
    }

}