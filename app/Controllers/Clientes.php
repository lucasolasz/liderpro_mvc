<?php

class Clientes extends Controller
{
    public function __construct()
    {
        //Redireciona para tela de login caso usuario nao esteja logado
        if (!IsLoged::estaLogado()) {
            //Está vazio, para retornar ao diretorio raiz
            Redirecionamento::redirecionar('UsuariosController/login');
        }

        $this->clienteModel = $this->model("Cliente");
        $this->paginaDinamicaModel = $this->model("PaginaDinamica");
    }

    public function visualizarClientes()
    {
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $visualizaClientes = $this->clienteModel->listarClientes();
        $segmento = $this->clienteModel->visualizarSegmentos();

        $dados = [
            'paginas' => $paginas,
            'visualizaClientes' => $visualizaClientes,
            'tituloBreadcrumb' => '',
            'segmento' => $segmento
        ];

        //Retorna para a view
        $this->view('painel/clientes/visualizar', $dados);
    }


    public function cadastrarCliente()
    {
 
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {

            $dados = [
                'txtNomeFantasia' => trim($formulario['txtNomeFantasia']),
                'txtUrl' => trim($formulario['txtUrl']),
                'chkApresentacaoImagem' => trim($formulario['chkApresentacaoImagem']),
            ];
            $dados['cboSegmento'] = $formulario['cboSegmento'] == "NULL" ? null : $formulario['cboSegmento'];
            $dados['fileLogomarcaCliente'] = isset($_FILES['fileLogomarcaCliente']) ? $_FILES['fileLogomarcaCliente'] : "";

            $dadosConfigLogo = [
                'numSegundosConfig1' => $formulario['numSegundosConfig1'],
                'numSegundosConfig2' => $formulario['numSegundosConfig2']
            ];
            $dadosConfigLogo['chkConfigFixo1'] = isset($formulario['chkConfigFixo1']) ? $formulario['chkConfigFixo1'] : "";
            $dadosConfigLogo['chkConfigFixo2'] = isset($formulario['chkConfigFixo2']) ? $formulario['chkConfigFixo2'] : "";

            if ($this->clienteModel->armazenarCliente($dados, $dadosConfigLogo)) {

                //Para exibir mensagem success , não precisa informar o tipo de classe
                Alertas::mensagem('cliente', 'Cliente cadastrado com sucesso');
                Redirecionamento::redirecionar('Clientes/visualizarClientes');
            } else {
                Alertas::mensagem('cliente', 'Não foi possível cadastrar o cliente', 'alert alert-danger');
                Redirecionamento::redirecionar('Clientes/visualizarClientes');
            }
        } else {
            $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
            $segmento = $this->clienteModel->visualizarSegmentos();
            $confLogo = $this->clienteModel->listaApresentaçãoLogo();

            $dados = [
                'paginas' => $paginas,
                'tituloBreadcrumb' => '',
                'segmento' => $segmento,
                'confLogo' => $confLogo
            ];

            $this->view('painel/clientes/cadastrar', $dados);
        }
    }


    public function editarCliente($id)
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $segmento = $this->clienteModel->visualizarSegmentos();
        $cliente = $this->clienteModel->listarClientesPorId($id);
        $logomarca = $this->clienteModel->listarFotoLogomarcaPorId($id);
        $confLogo = $this->clienteModel->listaApresentaçãoLogo();

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {

            $dados = [
                'txtNomeFantasia' => trim($formulario['txtNomeFantasia']),
                'txtUrl' => trim($formulario['txtUrl']),
                'chkApresentacaoImagem' => $formulario['chkApresentacaoImagem'],
                'id_cliente' => $id
            ];

            $dados['cboSegmento'] = $formulario['cboSegmento'] == "" ? NULL : $formulario['cboSegmento'];
            $dados['fileLogomarcaCliente'] = isset($_FILES['fileLogomarcaCliente']) ? $_FILES['fileLogomarcaCliente'] : "";

            $dadosConfigLogo = [
                'numSegundosConfig1' => $formulario['numSegundosConfig1'],
                'numSegundosConfig2' => $formulario['numSegundosConfig2']
            ];
            $dadosConfigLogo['chkConfigFixo1'] = isset($formulario['chkConfigFixo1']) ? $formulario['chkConfigFixo1'] : "";
            $dadosConfigLogo['chkConfigFixo2'] = isset($formulario['chkConfigFixo2']) ? $formulario['chkConfigFixo2'] : "";

            if ($this->clienteModel->atualizarCliente($dados, $dadosConfigLogo)) {

                //Para exibir mensagem success , não precisa informar o tipo de classe
                Alertas::mensagem('cliente', 'Cliente atualizado com sucesso');
                Redirecionamento::redirecionar('Clientes/visualizarClientes');
            } else {
                Alertas::mensagem('cliente', 'Não foi possível atualizar o cliente', 'alert alert-danger');
                Redirecionamento::redirecionar('Clientes/visualizarClientes');
            }
        } else {
            $dados = [
                'paginas' => $paginas,
                'tituloBreadcrumb' => '',
                'segmento' => $segmento,
                'cliente' => $cliente,
                'logomarca' => $logomarca,
                'confLogo' => $confLogo
            ];

            $this->view('painel/clientes/editar', $dados);
        }
    }


    public function deletarCliente($id)
    {
        if ($this->clienteModel->deletarCliente($id)) {

            Alertas::mensagem('cliente', 'Cliente deletado com sucesso');
            Redirecionamento::redirecionar('Clientes/visualizarClientes');
        } else {
            Alertas::mensagem('cliente', 'Não foi possível deletar o cliente', 'alert alert-danger');
            Redirecionamento::redirecionar('Clientes/visualizarClientes');
        }
    }
}
