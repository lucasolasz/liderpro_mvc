<?php

class Segmentos extends Controller
{

    public function __construct()
    {

        //Redireciona para tela de login caso usuario nao esteja logado
        if (!IsLoged::estaLogado()) {
            //Está vazio, para retornar ao diretorio raiz
            Redirecionamento::redirecionar('UsuariosController/login');
        }

        $this->segmentoModel = $this->model("Segmento");
        $this->paginaDinamicaModel = $this->model("PaginaDinamica");
    }


    public function visualizarSegmentos()
    {
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $visualizarSegmentos = $this->segmentoModel->listarSegmentos();

        $dados = [
            'paginas' => $paginas,
            'visualizarSegmentos' => $visualizarSegmentos,
            'tituloBreadcrumb' => ''
        ];

        //Retorna para a view
        $this->view('painel/segmentos/visualizar', $dados);
    }


    public function cadastrarSegmento()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {

            $dados = [
                'txtNomeSegmento' => trim($formulario['txtNomeSegmento']),
            ];

            if ($this->segmentoModel->armazenarSegmento($dados)) {

                //Para exibir mensagem success , não precisa informar o tipo de classe
                Alertas::mensagem('segmento', 'Segmento cadastrado com sucesso');
                Redirecionamento::redirecionar('Segmentos/visualizarSegmentos');
            } else {
                Alertas::mensagem('segmento', 'Não foi possível cadastrar o segmento', 'alert alert-danger');
                Redirecionamento::redirecionar('Segmentos/visualizarSegmentos');
            }

        } else {
            $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
            $visualizarSegmentos = $this->segmentoModel->listarSegmentos();

            $dados = [
                'paginas' => $paginas,
                'tituloBreadcrumb' => '',
                'visualizarSegmentos' => $visualizarSegmentos
            ];

            $this->view('painel/segmentos/cadastrar', $dados);
        }
    }



    public function editarSegmento($id)
    {   
        $segmento = $this->segmentoModel->listarSegmentosporId($id);

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {

            $dados = [
                'txtNomeSegmento' => trim($formulario['txtNomeSegmento']),
                'id_segmento' => $id
            ];

            if ($this->segmentoModel->editarSegmento($dados)) {

                //Para exibir mensagem success , não precisa informar o tipo de classe
                Alertas::mensagem('segmento', 'Segmento cadastrado com sucesso');
                Redirecionamento::redirecionar('Segmentos/visualizarSegmentos');
            } else {
                Alertas::mensagem('segmento', 'Não foi possível cadastrar o segmento', 'alert alert-danger');
                Redirecionamento::redirecionar('Segmentos/visualizarSegmentos');
            }

        } else {
            $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
            $visualizarSegmentos = $this->segmentoModel->listarSegmentos();

            $dados = [
                'paginas' => $paginas,
                'tituloBreadcrumb' => '',
                'visualizarSegmentos' => $visualizarSegmentos,
                'segmento' => $segmento
            ];

            $this->view('painel/segmentos/editar', $dados);
        }
    }


    public function deletarSegmento($id)
    {
        if ($this->segmentoModel->deletarSegmento($id)) {

            Alertas::mensagem('segmento', 'Segmento deletado com sucesso');
            Redirecionamento::redirecionar('Segmentos/visualizarSegmentos');
        } else {
            Alertas::mensagem('segmento', 'Não foi possível deletar o segmento', 'alert alert-danger');
            Redirecionamento::redirecionar('Segmentos/visualizarSegmentos');
        }
    }
}
