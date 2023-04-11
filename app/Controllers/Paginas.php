<?php

class Paginas extends Controller 
{

     //Construtor do model do Usuário que fará o acesso ao banco
     public function __construct()
     {
        $this->paginasModel = $this->model("Pagina");
     }

    public function index(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'HOME',
            'paginas' => $paginas
            
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('paginas/home', $dados);
    }

    public function assistencia_tecnica(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'assistencia_tecnica',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('paginas/assistencia_tecnica', $dados);

        
    }

    public function gestao_informatica(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'gestao_informatica',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('paginas/gestao_informatica', $dados);

        
    }

    public function cabeamento_estruturado(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'cabeamento_estruturado',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('paginas/cabeamento_estruturado', $dados);

        
    }


    public function solucoes_nobreak(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'solucoes_nobreak',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('paginas/solucoes_nobreak', $dados);

        
    }


    public function solucoes_em_nuvem(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'solucoes_em_nuvem',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('paginas/solucoes_em_nuvem', $dados);

        
    }

    public function contatos(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'contatos',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('paginas/contatos', $dados);

        
    }
}