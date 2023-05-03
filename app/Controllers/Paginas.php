<?php

class Paginas extends Controller 
{

     //Construtor do model do Usuário que fará o acesso ao banco
     public function __construct()
     {
        $this->paginaDinamicaModel = $this->model('PaginaDinamica');
     }

    public function contatos(){

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'contatos',
            'paginas' => $paginas
        ];

        //Chamada do novo objeto PAGINAS 
        $this->view('paginas/contatos', $dados);

        
    }
}