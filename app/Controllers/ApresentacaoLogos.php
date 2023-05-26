<?php

class ApresentacaoLogos extends Controller
{
    public function __construct()
    {
        //Redireciona para tela de login caso usuario nao esteja logado
        if (!IsLoged::estaLogado()) {
            //Está vazio, para retornar ao diretorio raiz
            Redirecionamento::redirecionar('UsuariosController/login');
        }

        $this->configLogo = $this->model("ApresentacaoLogo");
        $this->paginaDinamicaModel = $this->model("PaginaDinamica");
    }

    public function visualizarApresentacaoLogo()
    {
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $configLogo = $this->configLogo->listarConfiguracaoLogo();

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => '',
            'configLogo' => $configLogo
        ];

        //Retorna para a view
        $this->view('painel/apresentacao_logo/visualizar', $dados);
    }


    public function cadastrarApresentacaoLogo()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {

            $dados = [
                'txtNomeConfiguracao' => trim($formulario['txtNomeConfiguracao']),
                'numSegundos' => trim($formulario['numSegundos'])
            ];

            if ($this->configLogo->armazenarApresentacaoLogo($dados)) {

                //Para exibir mensagem success , não precisa informar o tipo de classe
                Alertas::mensagem('apresentacaoLogo', 'Configuração cadastrada com sucesso');
                Redirecionamento::redirecionar('ApresentacaoLogos/visualizarApresentacaoLogo');
            } else {
                Alertas::mensagem('apresentacaoLogo', 'Não foi possível cadastrar a configuração', 'alert alert-danger');
                Redirecionamento::redirecionar('ApresentacaoLogos/visualizarApresentacaoLogo');
            }
        } else {
            $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

            $dados = [
                'paginas' => $paginas,
                'tituloBreadcrumb' => ''
            ];

            $this->view('painel/apresentacao_logo/cadastrar', $dados);
        }
    }

    public function editarApresentacaoLogo($id)
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $configLogo = $this->configLogo->listarConfiguracaoLogoPorId($id);


        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {

            $dados = [
                'txtNomeConfiguracao' => trim($formulario['txtNomeConfiguracao']),
                'numSegundos' => trim($formulario['numSegundos']),
                'id_conf_logo' => $id
            ];

            if ($this->configLogo->editarApresentacaoLogo($dados)) {

                //Para exibir mensagem success , não precisa informar o tipo de classe
                Alertas::mensagem('apresentacaoLogo', 'Configuração atualizada com sucesso');
                Redirecionamento::redirecionar('ApresentacaoLogos/visualizarApresentacaoLogo');
            } else {
                Alertas::mensagem('apresentacaoLogo', 'Não foi possível atualizar a configuração', 'alert alert-danger');
                Redirecionamento::redirecionar('ApresentacaoLogos/visualizarApresentacaoLogo');
            }
        } else {

            $dados = [
                'paginas' => $paginas,
                'tituloBreadcrumb' => '',
                'configLogo' => $configLogo
            ];

            $this->view('painel/apresentacao_logo/editar', $dados);
        }
    }


    public function deletarApresentacaoLogo($id){

        if ($this->configLogo->deletarCliente($id)) {

            //Para exibir mensagem success , não precisa informar o tipo de classe
            Alertas::mensagem('apresentacaoLogo', 'Configuração deletada com sucesso');
            Redirecionamento::redirecionar('ApresentacaoLogos/visualizarApresentacaoLogo');
        } else {
            Alertas::mensagem('apresentacaoLogo', 'Não foi possível deletar a configuração', 'alert alert-danger');
            Redirecionamento::redirecionar('ApresentacaoLogos/visualizarApresentacaoLogo');
        }
    }
}
