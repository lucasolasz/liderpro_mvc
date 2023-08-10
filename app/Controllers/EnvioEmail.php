<?php

class EnvioEmail extends Controller
{
    public function __construct()
    {
        $this->paginaDinamicaModel = $this->model('PaginaDinamica');
    }

    public function enviarEmailContatos()
    {
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $area = "Contato";

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {

            $nome = trim($formulario['txtNome']);
            $emailRemetente = "testelucas@liderweb.com.br";
            // $emailRemetente = trim($formulario['txtEmail']);
            $telefone = trim($formulario['txtTelefone']);
            $emailEscolhidoDestinatario = trim($formulario['cboDestinatario']);
            $assunto = trim($formulario['txtAssunto']);
            $mensagem = trim($formulario['txtMensagem']);

            if (Email::EnviarEmail($nome, $emailRemetente, $telefone, $emailEscolhidoDestinatario, $assunto, $mensagem, $area)) {
                Alertas::mensagem('email', 'E-mail Enviado com sucesso');
                Redirecionamento::redirecionar('Paginas/contatos');
            } else {
                Alertas::mensagem('segmento', 'Não foi possível enviar o e-mail', 'alert alert-danger');
                Redirecionamento::redirecionar('Paginas/contatos');
            }
        } else {
            $dados = [
                'tituloBreadcrumb' => 'contatos',
                'contatoActive' => 'active',
                'paginas' => $paginas
            ];
        }

        $this->view('painel/paginas/contatos', $dados);
    }
}
