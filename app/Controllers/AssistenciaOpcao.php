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

}