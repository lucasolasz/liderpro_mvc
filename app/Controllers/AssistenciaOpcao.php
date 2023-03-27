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

}