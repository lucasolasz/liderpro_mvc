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
        $area = "Contato - Liderpro";
        $pathArquivoZip = "";

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {

            $nome = trim($formulario['txtNome']);
            $emailRemetente = trim($formulario['txtEmail']);
            $telefone = trim($formulario['txtTelefone']);
            $emailEscolhidoDestinatario = trim($formulario['cboDestinatario']);
            $assunto = trim($formulario['txtAssunto']);
            $mensagem = trim($formulario['txtMensagem']);
            isset($formulario['enviarCopia']) ? $flagEnviaCopia = true : $flagEnviaCopia = false;

            $dados['fileAnexoContato'] = isset($_FILES['fileAnexoContato']) ? $_FILES['fileAnexoContato'] : "";

            if (!$dados['fileAnexoContato']['name'][0] == "") {
                $idPasta = uniqid();
                $this->armazenaFotoAnexoContato($dados['fileAnexoContato'], $idPasta);
                $pathArquivoZip = Zip::ziparPastaRetornaPathZip($idPasta);
            }


            if (Email::EnviarEmailInterno($nome, $emailRemetente, $telefone, $emailEscolhidoDestinatario, $assunto, $mensagem, $area, $flagEnviaCopia, $pathArquivoZip)) {
                if (Email::EnviarEmailCliente($nome, $emailRemetente, $area)) {
                    ApagaPasta::apagar($pathArquivoZip);
                    Alertas::mensagem('email', 'E-mail Enviado com sucesso');
                    Redirecionamento::redirecionar('Paginas/contatos');
                } else {
                    ApagaPasta::apagar($pathArquivoZip);
                    Alertas::mensagem('segmento', 'Não foi possível enviar o e-mail', 'alert alert-danger');
                    Redirecionamento::redirecionar('Paginas/contatos');
                }
            }
        } else {
            $dados = [
                'tituloBreadcrumb' => 'contatos',
                'contatoActive' => 'active',
                'paginas' => $paginas
            ];
            $this->view('painel/paginas/contatos', $dados);
        }
    }


    public function armazenaFotoAnexoContato($dados, $idPasta)
    {

        $pastaArquivo = "anexos/anexo_" . $idPasta;
        $upload = new Upload();
        $tamanhoArray = count($dados['name']);

        for ($i = 0; $i < $tamanhoArray; $i++) {

            $arrayImagem = [
                'name' => $dados['name'][$i],
                'type' => $dados['type'][$i],
                'tmp_name' => $dados['tmp_name'][$i],
                'error' => $dados['error'][$i],
                'size' => $dados['size'][$i],
            ];

            $upload->imagem($arrayImagem, NULL, $pastaArquivo);
        }
    }
}
