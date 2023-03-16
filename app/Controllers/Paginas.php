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

    public function gestaoInformatica(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'GESTÃO INFORMÁTICA',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('Paginas/gestaoInformatica', $dados);

        
    }

    public function cabeamentoEstruturado(){

        $paginas = $this->paginasModel->listarMenu();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'CABEAMENTO ESTRUTURADO',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('Paginas/cabeamentoEstruturado', $dados);

        
    }
}