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
        $this->view('Paginas/home', $dados);
    }

    public function gestao_informatica(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'gestao_informatica',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('Paginas/gestao_informatica', $dados);

        
    }

    public function cabeamento_estruturado(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'cabeamento_estruturado',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('Paginas/cabeamento_estruturado', $dados);

        
    }


    public function solucoes_nobreak(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'solucoes_nobreak',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('Paginas/solucoes_nobreak', $dados);

        
    }


    public function solucoes_em_nuvem(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'solucoes_em_nuvem',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('Paginas/solucoes_em_nuvem', $dados);

        
    }
}