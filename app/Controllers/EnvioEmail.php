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
                $this->armazenaFotoAnexoEmail($dados['fileAnexoContato'], $idPasta);
                $pathArquivoZip = Zip::ziparPastaRetornaPathZip($idPasta);
            }


            if (Email::EnviarEmailInterno($nome, $emailRemetente, $telefone, $emailEscolhidoDestinatario, $assunto, $mensagem, $area, $flagEnviaCopia, $pathArquivoZip)) {
                if (Email::EnviarEmailCliente($nome, $emailRemetente, $area)) {
                    ApagaPasta::apagar($pathArquivoZip);
                    Alertas::mensagem('email', 'E-mail Enviado com sucesso');
                    Redirecionamento::redirecionar('Paginas/contatos');
                } else {
                    ApagaPasta::apagar($pathArquivoZip);
                    Alertas::mensagem('email', 'Não foi possível enviar o e-mail', 'alert alert-danger');
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

    public function enviarEmailAssistenciaComputador(){

        $assunto = "Avaliação - Computador";
        $nomeRota = "computador_opc";
        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {
        
            $nome = trim($formulario['txtNome']);
            $emailRemetente = trim($formulario['txtEmail']);
            $telefone = trim($formulario['txtTelefone']);
            // $emailEscolhidoDestinatario = trim($formulario['cboDestinatario']);
            $equipamento = trim($formulario['txtEquipamento']);
            $marcaModelo = trim($formulario['txtMarcaModelo']);
            $mensagem = trim($formulario['txtMensagemEmail']);
            isset($formulario['enviarCopia']) ? $flagEnviaCopia = true : $flagEnviaCopia = false;

            $dados['fileAnexoAssistencia'] = isset($_FILES['fileAnexoAssistencia']) ? $_FILES['fileAnexoAssistencia'] : "";

            $this->enviarEmailAssistenciaGenerico($assunto, $nome, $emailRemetente, $telefone, $equipamento, $marcaModelo, $mensagem, $flagEnviaCopia, $dados['fileAnexoAssistencia'], $nomeRota);
        }
    
    }

    public function enviarEmailAssistenciaNotebook(){

        $assunto = "Avaliação - Notebook";
        $nomeRota = "notebook_opc";

        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {
        
            $nome = trim($formulario['txtNome']);
            $emailRemetente = trim($formulario['txtEmail']);
            $telefone = trim($formulario['txtTelefone']);
            // $emailEscolhidoDestinatario = trim($formulario['cboDestinatario']);
            $equipamento = trim($formulario['txtEquipamento']);
            $marcaModelo = trim($formulario['txtMarcaModelo']);
            $mensagem = trim($formulario['txtMensagemEmail']);
            isset($formulario['enviarCopia']) ? $flagEnviaCopia = true : $flagEnviaCopia = false;

            $dados['fileAnexoAssistencia'] = isset($_FILES['fileAnexoAssistencia']) ? $_FILES['fileAnexoAssistencia'] : "";

            $this->enviarEmailAssistenciaGenerico($assunto, $nome, $emailRemetente, $telefone, $equipamento, $marcaModelo, $mensagem, $flagEnviaCopia, $dados['fileAnexoAssistencia'], $nomeRota);
        }
    
    }

    public function enviarEmailAssistenciaTabletCelular(){

        $assunto = "Avaliação - Tablet Celular";
        $nomeRota = "tablet_celular_opc";

        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {
        
            $nome = trim($formulario['txtNome']);
            $emailRemetente = trim($formulario['txtEmail']);
            $telefone = trim($formulario['txtTelefone']);
            // $emailEscolhidoDestinatario = trim($formulario['cboDestinatario']);
            $equipamento = trim($formulario['txtEquipamento']);
            $marcaModelo = trim($formulario['txtMarcaModelo']);
            $mensagem = trim($formulario['txtMensagemEmail']);
            isset($formulario['enviarCopia']) ? $flagEnviaCopia = true : $flagEnviaCopia = false;

            $dados['fileAnexoAssistencia'] = isset($_FILES['fileAnexoAssistencia']) ? $_FILES['fileAnexoAssistencia'] : "";

            $this->enviarEmailAssistenciaGenerico($assunto, $nome, $emailRemetente, $telefone, $equipamento, $marcaModelo, $mensagem, $flagEnviaCopia, $dados['fileAnexoAssistencia'], $nomeRota);
        }
    
    }

    public function enviarEmailAssistenciaProjetor(){

        $assunto = "Avaliação - Projetor";
        $nomeRota = "projetor_opc";

        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {
        
            $nome = trim($formulario['txtNome']);
            $emailRemetente = trim($formulario['txtEmail']);
            $telefone = trim($formulario['txtTelefone']);
            // $emailEscolhidoDestinatario = trim($formulario['cboDestinatario']);
            $equipamento = trim($formulario['txtEquipamento']);
            $marcaModelo = trim($formulario['txtMarcaModelo']);
            $mensagem = trim($formulario['txtMensagemEmail']);
            isset($formulario['enviarCopia']) ? $flagEnviaCopia = true : $flagEnviaCopia = false;

            $dados['fileAnexoAssistencia'] = isset($_FILES['fileAnexoAssistencia']) ? $_FILES['fileAnexoAssistencia'] : "";

            $this->enviarEmailAssistenciaGenerico($assunto, $nome, $emailRemetente, $telefone, $equipamento, $marcaModelo, $mensagem, $flagEnviaCopia, $dados['fileAnexoAssistencia'], $nomeRota);
        }
    
    }

    public function enviarEmailAssistenciaFonte(){

        $assunto = "Avaliação - Fonte";
        $nomeRota = "fonte_alimentacao_opc";

        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {
        
            $nome = trim($formulario['txtNome']);
            $emailRemetente = trim($formulario['txtEmail']);
            $telefone = trim($formulario['txtTelefone']);
            // $emailEscolhidoDestinatario = trim($formulario['cboDestinatario']);
            $equipamento = trim($formulario['txtEquipamento']);
            $marcaModelo = trim($formulario['txtMarcaModelo']);
            $mensagem = trim($formulario['txtMensagemEmail']);
            isset($formulario['enviarCopia']) ? $flagEnviaCopia = true : $flagEnviaCopia = false;

            $dados['fileAnexoAssistencia'] = isset($_FILES['fileAnexoAssistencia']) ? $_FILES['fileAnexoAssistencia'] : "";

            $this->enviarEmailAssistenciaGenerico($assunto, $nome, $emailRemetente, $telefone, $equipamento, $marcaModelo, $mensagem, $flagEnviaCopia, $dados['fileAnexoAssistencia'], $nomeRota);
        }
    
    }

    public function enviarEmailAssistenciaTvMonitor(){

        $assunto = "Avaliação - Tv/Monitor";
        $nomeRota = "tv_monitor_opc";

        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {
        
            $nome = trim($formulario['txtNome']);
            $emailRemetente = trim($formulario['txtEmail']);
            $telefone = trim($formulario['txtTelefone']);
            // $emailEscolhidoDestinatario = trim($formulario['cboDestinatario']);
            $equipamento = trim($formulario['txtEquipamento']);
            $marcaModelo = trim($formulario['txtMarcaModelo']);
            $mensagem = trim($formulario['txtMensagemEmail']);
            isset($formulario['enviarCopia']) ? $flagEnviaCopia = true : $flagEnviaCopia = false;

            $dados['fileAnexoAssistencia'] = isset($_FILES['fileAnexoAssistencia']) ? $_FILES['fileAnexoAssistencia'] : "";

            $this->enviarEmailAssistenciaGenerico($assunto, $nome, $emailRemetente, $telefone, $equipamento, $marcaModelo, $mensagem, $flagEnviaCopia, $dados['fileAnexoAssistencia'], $nomeRota);
        }
    
    }

    public function enviarEmailAssistenciaImpressora(){

        $assunto = "Avaliação - Impressora";
        $nomeRota = "impressora_opc";

        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {
        
            $nome = trim($formulario['txtNome']);
            $emailRemetente = trim($formulario['txtEmail']);
            $telefone = trim($formulario['txtTelefone']);
            // $emailEscolhidoDestinatario = trim($formulario['cboDestinatario']);
            $equipamento = trim($formulario['txtEquipamento']);
            $marcaModelo = trim($formulario['txtMarcaModelo']);
            $mensagem = trim($formulario['txtMensagemEmail']);
            isset($formulario['enviarCopia']) ? $flagEnviaCopia = true : $flagEnviaCopia = false;

            $dados['fileAnexoAssistencia'] = isset($_FILES['fileAnexoAssistencia']) ? $_FILES['fileAnexoAssistencia'] : "";

            $this->enviarEmailAssistenciaGenerico($assunto, $nome, $emailRemetente, $telefone, $equipamento, $marcaModelo, $mensagem, $flagEnviaCopia, $dados['fileAnexoAssistencia'], $nomeRota);
        }
    
    }

    public function enviarEmailAssistenciaNobreak(){

        $assunto = "Avaliação - No-Break";
        $nomeRota = "nobreak_opc";

        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {
        
            $nome = trim($formulario['txtNome']);
            $emailRemetente = trim($formulario['txtEmail']);
            $telefone = trim($formulario['txtTelefone']);
            // $emailEscolhidoDestinatario = trim($formulario['cboDestinatario']);
            $equipamento = trim($formulario['txtEquipamento']);
            $marcaModelo = trim($formulario['txtMarcaModelo']);
            $mensagem = trim($formulario['txtMensagemEmail']);
            isset($formulario['enviarCopia']) ? $flagEnviaCopia = true : $flagEnviaCopia = false;

            $dados['fileAnexoAssistencia'] = isset($_FILES['fileAnexoAssistencia']) ? $_FILES['fileAnexoAssistencia'] : "";

            $this->enviarEmailAssistenciaGenerico($assunto, $nome, $emailRemetente, $telefone, $equipamento, $marcaModelo, $mensagem, $flagEnviaCopia, $dados['fileAnexoAssistencia'], $nomeRota);
        }
    
    }

    public function enviarEmailAssistenciaApple(){

        $assunto = "Avaliação - Apple";
        $nomeRota = "apple_opc";

        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {
        
            $nome = trim($formulario['txtNome']);
            $emailRemetente = trim($formulario['txtEmail']);
            $telefone = trim($formulario['txtTelefone']);
            // $emailEscolhidoDestinatario = trim($formulario['cboDestinatario']);
            $equipamento = trim($formulario['txtEquipamento']);
            $marcaModelo = trim($formulario['txtMarcaModelo']);
            $mensagem = trim($formulario['txtMensagemEmail']);
            isset($formulario['enviarCopia']) ? $flagEnviaCopia = true : $flagEnviaCopia = false;

            $dados['fileAnexoAssistencia'] = isset($_FILES['fileAnexoAssistencia']) ? $_FILES['fileAnexoAssistencia'] : "";

            $this->enviarEmailAssistenciaGenerico($assunto, $nome, $emailRemetente, $telefone, $equipamento, $marcaModelo, $mensagem, $flagEnviaCopia, $dados['fileAnexoAssistencia'], $nomeRota);
        }
    
    }

    public function enviarEmailAssistenciaGenerico($assunto, $nome, $emailRemetente, $telefone, $equipamento, $marcaModelo, $mensagem, $flagEnviaCopia, $anexo, $nomeRota){
        
        $area = "Assistência - Liderpro";
        $pathArquivoZip = "";

        if (!$anexo['name'][0] == "") {
            $idPasta = uniqid();
            $this->armazenaFotoAnexoEmail($anexo, $idPasta);
            $pathArquivoZip = Zip::ziparPastaRetornaPathZip($idPasta);
        }

        if (Email::EnviarEmailInternoAssistencia($nome, $emailRemetente, $telefone, $equipamento, $marcaModelo, $assunto, $mensagem, $area, $flagEnviaCopia, $pathArquivoZip)) {
            if (Email::EnviarEmailCliente($nome, $emailRemetente, $area)) {
                ApagaPasta::apagar($pathArquivoZip);
                Alertas::mensagem('email', 'E-mail Enviado com sucesso');
                Redirecionamento::redirecionar('AssistenciaOpcao/' . $nomeRota);
            } else {
                ApagaPasta::apagar($pathArquivoZip);
                Alertas::mensagem('email', 'Não foi possível enviar o e-mail', 'alert alert-danger');
                Redirecionamento::redirecionar('AssistenciaOpcao/' . $nomeRota);
            }
        }
    }


    public function armazenaFotoAnexoEmail($anexo, $idPasta)
    {

        $pastaArquivo = "anexos/anexo_" . $idPasta;
        $upload = new Upload();
        $tamanhoArray = count($anexo['name']);

        for ($i = 0; $i < $tamanhoArray; $i++) {

            $arrayImagem = [
                'name' => $anexo['name'][$i],
                'type' => $anexo['type'][$i],
                'tmp_name' => $anexo['tmp_name'][$i],
                'error' => $anexo['error'][$i],
                'size' => $anexo['size'][$i],
            ];

            $upload->imagem($arrayImagem, NULL, $pastaArquivo);
        }
    }
}
