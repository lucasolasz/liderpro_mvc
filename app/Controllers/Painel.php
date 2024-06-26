<?php

class Painel extends Controller
{

    public function __construct()
    {

        //Redireciona para tela de login caso usuario nao esteja logado
        if (!IsLoged::estaLogado()) {
            //Está vazio, para retornar ao diretorio raiz
            Redirecionamento::redirecionar('UsuariosController/login');
        }

        $this->paginasModel = $this->model("Pagina");
        $this->paginaDinamicaModel = $this->model("PaginaDinamica");
    }


    public function index()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => ''
        ];

        //Retorna para a view
        $this->view('painel/index', $dados);
    }

    public function visualizarPaginas()
    {
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $visualizaPaginas = $this->paginaDinamicaModel->listarPaginas();

        $dados = [
            'paginas' => $paginas,
            'visualizaPaginas' => $visualizaPaginas,
            'tituloBreadcrumb' => ''
        ];

        //Retorna para a view
        $this->view('painel/paginas/visualizar', $dados);
    }

    public function gerarPagina()
    {
        $paginasBanco = $this->paginaDinamicaModel->listarPaginas();
        GerarPagina::gerarPaginaDinamica($paginasBanco);
    }

    public function verificaSePaginaExiste($paginaNova) {
        $paginasBanco = $this->paginaDinamicaModel->listarPaginas();
        foreach($paginasBanco as $pagina) {
            if($pagina->ds_breadcrumb_menu === $paginaNova){
                return true;
            }
        }
        return false;
    }

    public function cadastrarPagina()
    {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {

            $dados = [
                'txtTitutoPagina' => trim($formulario['txtTitutoPagina']),
                'txtTextPrincipal' => trim($formulario['txtTextPrincipal']),
                'txtNomeTab1' => trim($formulario['txtNomeTab1']),
                'txtTopico1Tab1' => trim($formulario['txtTopico1Tab1']),
                'txtTopico2Tab1' => trim($formulario['txtTopico2Tab1']),
                'txtTopico3Tab1' => trim($formulario['txtTopico3Tab1']),
                'txtTopico4Tab1' => trim($formulario['txtTopico4Tab1']),
                'txtTopico5Tab1' => trim($formulario['txtTopico5Tab1']),
                'txtTopico6Tab1' => trim($formulario['txtTopico6Tab1']),
                'txtTopico7Tab1' => trim($formulario['txtTopico7Tab1']),
                'txtTopico8Tab1' => trim($formulario['txtTopico8Tab1']),
                'txtNomeTab2' => trim($formulario['txtNomeTab2']),
                'txtTopico1Tab2' => trim($formulario['txtTopico1Tab2']),
                'txtTopico2Tab2' => trim($formulario['txtTopico2Tab2']),
                'txtTopico3Tab2' => trim($formulario['txtTopico3Tab2']),
                'txtTopico4Tab2' => trim($formulario['txtTopico4Tab2']),
                'txtTopico5Tab2' => trim($formulario['txtTopico5Tab2']),
                'txtTopico6Tab2' => trim($formulario['txtTopico6Tab2']),
                'txtTopico7Tab2' => trim($formulario['txtTopico7Tab2']),
                'txtTopico8Tab2' => trim($formulario['txtTopico8Tab2']),
                'txtNomeTab3' => trim($formulario['txtNomeTab3']),
                'txtTopico1Tab3' => trim($formulario['txtTopico1Tab3']),
                'txtTopico2Tab3' => trim($formulario['txtTopico2Tab3']),
                'txtTopico3Tab3' => trim($formulario['txtTopico3Tab3']),
                'txtTopico4Tab3' => trim($formulario['txtTopico4Tab3']),
                'txtTopico5Tab3' => trim($formulario['txtTopico5Tab3']),
                'txtTopico6Tab3' => trim($formulario['txtTopico6Tab3']),
                'txtTopico7Tab3' => trim($formulario['txtTopico7Tab3']),
                'txtTopico8Tab3' => trim($formulario['txtTopico8Tab3']),
                'txtNomeTab4' => trim($formulario['txtNomeTab4']),
                'txtTopico1Tab4' => trim($formulario['txtTopico1Tab4']),
                'txtTopico2Tab4' => trim($formulario['txtTopico2Tab4']),
                'txtTopico3Tab4' => trim($formulario['txtTopico3Tab4']),
                'txtTopico4Tab4' => trim($formulario['txtTopico4Tab4']),
                'txtTopico5Tab4' => trim($formulario['txtTopico5Tab4']),
                'txtTopico6Tab4' => trim($formulario['txtTopico6Tab4']),
                'txtTopico7Tab4' => trim($formulario['txtTopico7Tab4']),
                'txtTopico8Tab4' => trim($formulario['txtTopico8Tab4']),
                'chkPaginaAtiva' => $formulario['chkPaginaAtiva'],



                'txtTitutoPaginaEn' => trim($formulario['txtTitutoPaginaEn']),
                'txtTextPrincipalEn' => trim($formulario['txtTextPrincipalEn']),
                'txtNomeTab1En' => trim($formulario['txtNomeTab1En']),
                'txtTopico1Tab1En' => trim($formulario['txtTopico1Tab1En']),
                'txtTopico2Tab1En' => trim($formulario['txtTopico2Tab1En']),
                'txtTopico3Tab1En' => trim($formulario['txtTopico3Tab1En']),
                'txtTopico4Tab1En' => trim($formulario['txtTopico4Tab1En']),
                'txtTopico5Tab1En' => trim($formulario['txtTopico5Tab1En']),
                'txtTopico6Tab1En' => trim($formulario['txtTopico6Tab1En']),
                'txtTopico7Tab1En' => trim($formulario['txtTopico7Tab1En']),
                'txtTopico8Tab1En' => trim($formulario['txtTopico8Tab1En']),
                'txtNomeTab2En' => trim($formulario['txtNomeTab2En']),
                'txtTopico1Tab2En' => trim($formulario['txtTopico1Tab2En']),
                'txtTopico2Tab2En' => trim($formulario['txtTopico2Tab2En']),
                'txtTopico3Tab2En' => trim($formulario['txtTopico3Tab2En']),
                'txtTopico4Tab2En' => trim($formulario['txtTopico4Tab2En']),
                'txtTopico5Tab2En' => trim($formulario['txtTopico5Tab2En']),
                'txtTopico6Tab2En' => trim($formulario['txtTopico6Tab2En']),
                'txtTopico7Tab2En' => trim($formulario['txtTopico7Tab2En']),
                'txtTopico8Tab2En' => trim($formulario['txtTopico8Tab2En']),
                'txtNomeTab3En' => trim($formulario['txtNomeTab3En']),
                'txtTopico1Tab3En' => trim($formulario['txtTopico1Tab3En']),
                'txtTopico2Tab3En' => trim($formulario['txtTopico2Tab3En']),
                'txtTopico3Tab3En' => trim($formulario['txtTopico3Tab3En']),
                'txtTopico4Tab3En' => trim($formulario['txtTopico4Tab3En']),
                'txtTopico5Tab3En' => trim($formulario['txtTopico5Tab3En']),
                'txtTopico6Tab3En' => trim($formulario['txtTopico6Tab3En']),
                'txtTopico7Tab3En' => trim($formulario['txtTopico7Tab3En']),
                'txtTopico8Tab3En' => trim($formulario['txtTopico8Tab3En']),
                'txtNomeTab4En' => trim($formulario['txtNomeTab4En']),
                'txtTopico1Tab4En' => trim($formulario['txtTopico1Tab4En']),
                'txtTopico2Tab4En' => trim($formulario['txtTopico2Tab4En']),
                'txtTopico3Tab4En' => trim($formulario['txtTopico3Tab4En']),
                'txtTopico4Tab4En' => trim($formulario['txtTopico4Tab4En']),
                'txtTopico5Tab4En' => trim($formulario['txtTopico5Tab4En']),
                'txtTopico6Tab4En' => trim($formulario['txtTopico6Tab4En']),
                'txtTopico7Tab4En' => trim($formulario['txtTopico7Tab4En']),
                'txtTopico8Tab4En' => trim($formulario['txtTopico8Tab4En']),

                'txtTitutoPaginaEs' => trim($formulario['txtTitutoPaginaEs']),
                'txtTextPrincipalEs' => trim($formulario['txtTextPrincipalEs']),
                'txtNomeTab1Es' => trim($formulario['txtNomeTab1Es']),
                'txtTopico1Tab1Es' => trim($formulario['txtTopico1Tab1Es']),
                'txtTopico2Tab1Es' => trim($formulario['txtTopico2Tab1Es']),
                'txtTopico3Tab1Es' => trim($formulario['txtTopico3Tab1Es']),
                'txtTopico4Tab1Es' => trim($formulario['txtTopico4Tab1Es']),
                'txtTopico5Tab1Es' => trim($formulario['txtTopico5Tab1Es']),
                'txtTopico6Tab1Es' => trim($formulario['txtTopico6Tab1Es']),
                'txtTopico7Tab1Es' => trim($formulario['txtTopico7Tab1Es']),
                'txtTopico8Tab1Es' => trim($formulario['txtTopico8Tab1Es']),
                'txtNomeTab2Es' => trim($formulario['txtNomeTab2Es']),
                'txtTopico1Tab2Es' => trim($formulario['txtTopico1Tab2Es']),
                'txtTopico2Tab2Es' => trim($formulario['txtTopico2Tab2Es']),
                'txtTopico3Tab2Es' => trim($formulario['txtTopico3Tab2Es']),
                'txtTopico4Tab2Es' => trim($formulario['txtTopico4Tab2Es']),
                'txtTopico5Tab2Es' => trim($formulario['txtTopico5Tab2Es']),
                'txtTopico6Tab2Es' => trim($formulario['txtTopico6Tab2Es']),
                'txtTopico7Tab2Es' => trim($formulario['txtTopico7Tab2Es']),
                'txtTopico8Tab2Es' => trim($formulario['txtTopico8Tab2Es']),
                'txtNomeTab3Es' => trim($formulario['txtNomeTab3Es']),
                'txtTopico1Tab3Es' => trim($formulario['txtTopico1Tab3Es']),
                'txtTopico2Tab3Es' => trim($formulario['txtTopico2Tab3Es']),
                'txtTopico3Tab3Es' => trim($formulario['txtTopico3Tab3Es']),
                'txtTopico4Tab3Es' => trim($formulario['txtTopico4Tab3Es']),
                'txtTopico5Tab3Es' => trim($formulario['txtTopico5Tab3Es']),
                'txtTopico6Tab3Es' => trim($formulario['txtTopico6Tab3Es']),
                'txtTopico7Tab3Es' => trim($formulario['txtTopico7Tab3Es']),
                'txtTopico8Tab3Es' => trim($formulario['txtTopico8Tab3Es']),
                'txtNomeTab4Es' => trim($formulario['txtNomeTab4Es']),
                'txtTopico1Tab4Es' => trim($formulario['txtTopico1Tab4Es']),
                'txtTopico2Tab4Es' => trim($formulario['txtTopico2Tab4Es']),
                'txtTopico3Tab4Es' => trim($formulario['txtTopico3Tab4Es']),
                'txtTopico4Tab4Es' => trim($formulario['txtTopico4Tab4Es']),
                'txtTopico5Tab4Es' => trim($formulario['txtTopico5Tab4Es']),
                'txtTopico6Tab4Es' => trim($formulario['txtTopico6Tab4Es']),
                'txtTopico7Tab4Es' => trim($formulario['txtTopico7Tab4Es']),
                'txtTopico8Tab4Es' => trim($formulario['txtTopico8Tab4Es'])

            ];


            $dados['fileBannerPrincipal'] = isset($_FILES['fileBannerPrincipal']) ? $_FILES['fileBannerPrincipal'] : "";
            $dados['filePerguntas'] = isset($_FILES['filePerguntas']) ? $_FILES['filePerguntas'] : "";
            $dados['fileFotoTexto'] = isset($_FILES['fileFotoTexto']) ? $_FILES['fileFotoTexto'] : "";
            $dados['fileFotosServico'] = isset($_FILES['fileFotosServico']) ? $_FILES['fileFotosServico'] : "";

            $paginaNova = GeraNomeArquivoComUnderline::gerar(RemoveAcentosString::removeAcentoEDeixaMinusculaString($dados['txtTitutoPagina']));

            if($this->verificaSePaginaExiste($paginaNova)){
                Alertas::mensagem('paginas', 'Já existe página com este nome', 'alert alert-danger');
                Redirecionamento::redirecionar('Painel/visualizarPaginas');
            } else {
                if ($this->paginasModel->armazenarPagina($dados)) {

                    //Gera página
                    $this->gerarPagina();
    
                    //Para exibir mensagem success , não precisa informar o tipo de classe
                    Alertas::mensagem('paginas', 'Página cadastrada com sucesso');
                    Redirecionamento::redirecionar('Painel/visualizarPaginas');
                } else {
                    Alertas::mensagem('paginas', 'Não foi possível cadastrar a página', 'alert alert-danger');
                    Redirecionamento::redirecionar('Painel/visualizarPaginas');
                }
            }
            
        } else {
            $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

            $dados = [
                'paginas' => $paginas,
                'tituloBreadcrumb' => ''
            ];

            $this->view('painel/paginas/cadastrar', $dados);
        }
    }


    public function editarPagina($id)
    {
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $paginaSelecionada = $this->paginaDinamicaModel->listarPaginasPeloId($id);
        $fotoBanner = $this->paginaDinamicaModel->listarFotoBannerPeloId($id);
        $fotoPergunta = $this->paginaDinamicaModel->listarFotoPerguntaPeloId($id);
        $fotoServico = $this->paginaDinamicaModel->listarFotoServicoPeloId($id);
        $fotoTexto = $this->paginaDinamicaModel->listarFotoTextoPeloId($id);


        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {

            $dados = [
                'id_pagina' => $id,
                'txtTitutoPagina' => trim($formulario['txtTitutoPagina']),
                'txtTextPrincipal' => trim($formulario['txtTextPrincipal']),
                'txtNomeTab1' => trim($formulario['txtNomeTab1']),
                'txtTopico1Tab1' => trim($formulario['txtTopico1Tab1']),
                'txtTopico2Tab1' => trim($formulario['txtTopico2Tab1']),
                'txtTopico3Tab1' => trim($formulario['txtTopico3Tab1']),
                'txtTopico4Tab1' => trim($formulario['txtTopico4Tab1']),
                'txtTopico5Tab1' => trim($formulario['txtTopico5Tab1']),
                'txtTopico6Tab1' => trim($formulario['txtTopico6Tab1']),
                'txtTopico7Tab1' => trim($formulario['txtTopico7Tab1']),
                'txtTopico8Tab1' => trim($formulario['txtTopico8Tab1']),
                'txtNomeTab2' => trim($formulario['txtNomeTab2']),
                'txtTopico1Tab2' => trim($formulario['txtTopico1Tab2']),
                'txtTopico2Tab2' => trim($formulario['txtTopico2Tab2']),
                'txtTopico3Tab2' => trim($formulario['txtTopico3Tab2']),
                'txtTopico4Tab2' => trim($formulario['txtTopico4Tab2']),
                'txtTopico5Tab2' => trim($formulario['txtTopico5Tab2']),
                'txtTopico6Tab2' => trim($formulario['txtTopico6Tab2']),
                'txtTopico7Tab2' => trim($formulario['txtTopico7Tab2']),
                'txtTopico8Tab2' => trim($formulario['txtTopico8Tab2']),
                'txtNomeTab3' => trim($formulario['txtNomeTab3']),
                'txtTopico1Tab3' => trim($formulario['txtTopico1Tab3']),
                'txtTopico2Tab3' => trim($formulario['txtTopico2Tab3']),
                'txtTopico3Tab3' => trim($formulario['txtTopico3Tab3']),
                'txtTopico4Tab3' => trim($formulario['txtTopico4Tab3']),
                'txtTopico5Tab3' => trim($formulario['txtTopico5Tab3']),
                'txtTopico6Tab3' => trim($formulario['txtTopico6Tab3']),
                'txtTopico7Tab3' => trim($formulario['txtTopico7Tab3']),
                'txtTopico8Tab3' => trim($formulario['txtTopico8Tab3']),
                'txtNomeTab4' => trim($formulario['txtNomeTab4']),
                'txtTopico1Tab4' => trim($formulario['txtTopico1Tab4']),
                'txtTopico2Tab4' => trim($formulario['txtTopico2Tab4']),
                'txtTopico3Tab4' => trim($formulario['txtTopico3Tab4']),
                'txtTopico4Tab4' => trim($formulario['txtTopico4Tab4']),
                'txtTopico5Tab4' => trim($formulario['txtTopico5Tab4']),
                'txtTopico6Tab4' => trim($formulario['txtTopico6Tab4']),
                'txtTopico7Tab4' => trim($formulario['txtTopico7Tab4']),
                'txtTopico8Tab4' => trim($formulario['txtTopico8Tab4']),
                'chkPaginaAtiva' => $formulario['chkPaginaAtiva'],


                'txtTitutoPaginaEn' => trim($formulario['txtTitutoPaginaEn']),
                'txtTextPrincipalEn' => trim($formulario['txtTextPrincipalEn']),
                'txtNomeTab1En' => trim($formulario['txtNomeTab1En']),
                'txtTopico1Tab1En' => trim($formulario['txtTopico1Tab1En']),
                'txtTopico2Tab1En' => trim($formulario['txtTopico2Tab1En']),
                'txtTopico3Tab1En' => trim($formulario['txtTopico3Tab1En']),
                'txtTopico4Tab1En' => trim($formulario['txtTopico4Tab1En']),
                'txtTopico5Tab1En' => trim($formulario['txtTopico5Tab1En']),
                'txtTopico6Tab1En' => trim($formulario['txtTopico6Tab1En']),
                'txtTopico7Tab1En' => trim($formulario['txtTopico7Tab1En']),
                'txtTopico8Tab1En' => trim($formulario['txtTopico8Tab1En']),
                'txtNomeTab2En' => trim($formulario['txtNomeTab2En']),
                'txtTopico1Tab2En' => trim($formulario['txtTopico1Tab2En']),
                'txtTopico2Tab2En' => trim($formulario['txtTopico2Tab2En']),
                'txtTopico3Tab2En' => trim($formulario['txtTopico3Tab2En']),
                'txtTopico4Tab2En' => trim($formulario['txtTopico4Tab2En']),
                'txtTopico5Tab2En' => trim($formulario['txtTopico5Tab2En']),
                'txtTopico6Tab2En' => trim($formulario['txtTopico6Tab2En']),
                'txtTopico7Tab2En' => trim($formulario['txtTopico7Tab2En']),
                'txtTopico8Tab2En' => trim($formulario['txtTopico8Tab2En']),
                'txtNomeTab3En' => trim($formulario['txtNomeTab3En']),
                'txtTopico1Tab3En' => trim($formulario['txtTopico1Tab3En']),
                'txtTopico2Tab3En' => trim($formulario['txtTopico2Tab3En']),
                'txtTopico3Tab3En' => trim($formulario['txtTopico3Tab3En']),
                'txtTopico4Tab3En' => trim($formulario['txtTopico4Tab3En']),
                'txtTopico5Tab3En' => trim($formulario['txtTopico5Tab3En']),
                'txtTopico6Tab3En' => trim($formulario['txtTopico6Tab3En']),
                'txtTopico7Tab3En' => trim($formulario['txtTopico7Tab3En']),
                'txtTopico8Tab3En' => trim($formulario['txtTopico8Tab3En']),
                'txtNomeTab4En' => trim($formulario['txtNomeTab4En']),
                'txtTopico1Tab4En' => trim($formulario['txtTopico1Tab4En']),
                'txtTopico2Tab4En' => trim($formulario['txtTopico2Tab4En']),
                'txtTopico3Tab4En' => trim($formulario['txtTopico3Tab4En']),
                'txtTopico4Tab4En' => trim($formulario['txtTopico4Tab4En']),
                'txtTopico5Tab4En' => trim($formulario['txtTopico5Tab4En']),
                'txtTopico6Tab4En' => trim($formulario['txtTopico6Tab4En']),
                'txtTopico7Tab4En' => trim($formulario['txtTopico7Tab4En']),
                'txtTopico8Tab4En' => trim($formulario['txtTopico8Tab4En']),

                'txtTitutoPaginaEs' => trim($formulario['txtTitutoPaginaEs']),
                'txtTextPrincipalEs' => trim($formulario['txtTextPrincipalEs']),
                'txtNomeTab1Es' => trim($formulario['txtNomeTab1Es']),
                'txtTopico1Tab1Es' => trim($formulario['txtTopico1Tab1Es']),
                'txtTopico2Tab1Es' => trim($formulario['txtTopico2Tab1Es']),
                'txtTopico3Tab1Es' => trim($formulario['txtTopico3Tab1Es']),
                'txtTopico4Tab1Es' => trim($formulario['txtTopico4Tab1Es']),
                'txtTopico5Tab1Es' => trim($formulario['txtTopico5Tab1Es']),
                'txtTopico6Tab1Es' => trim($formulario['txtTopico6Tab1Es']),
                'txtTopico7Tab1Es' => trim($formulario['txtTopico7Tab1Es']),
                'txtTopico8Tab1Es' => trim($formulario['txtTopico8Tab1Es']),
                'txtNomeTab2Es' => trim($formulario['txtNomeTab2Es']),
                'txtTopico1Tab2Es' => trim($formulario['txtTopico1Tab2Es']),
                'txtTopico2Tab2Es' => trim($formulario['txtTopico2Tab2Es']),
                'txtTopico3Tab2Es' => trim($formulario['txtTopico3Tab2Es']),
                'txtTopico4Tab2Es' => trim($formulario['txtTopico4Tab2Es']),
                'txtTopico5Tab2Es' => trim($formulario['txtTopico5Tab2Es']),
                'txtTopico6Tab2Es' => trim($formulario['txtTopico6Tab2Es']),
                'txtTopico7Tab2Es' => trim($formulario['txtTopico7Tab2Es']),
                'txtTopico8Tab2Es' => trim($formulario['txtTopico8Tab2Es']),
                'txtNomeTab3Es' => trim($formulario['txtNomeTab3Es']),
                'txtTopico1Tab3Es' => trim($formulario['txtTopico1Tab3Es']),
                'txtTopico2Tab3Es' => trim($formulario['txtTopico2Tab3Es']),
                'txtTopico3Tab3Es' => trim($formulario['txtTopico3Tab3Es']),
                'txtTopico4Tab3Es' => trim($formulario['txtTopico4Tab3Es']),
                'txtTopico5Tab3Es' => trim($formulario['txtTopico5Tab3Es']),
                'txtTopico6Tab3Es' => trim($formulario['txtTopico6Tab3Es']),
                'txtTopico7Tab3Es' => trim($formulario['txtTopico7Tab3Es']),
                'txtTopico8Tab3Es' => trim($formulario['txtTopico8Tab3Es']),
                'txtNomeTab4Es' => trim($formulario['txtNomeTab4Es']),
                'txtTopico1Tab4Es' => trim($formulario['txtTopico1Tab4Es']),
                'txtTopico2Tab4Es' => trim($formulario['txtTopico2Tab4Es']),
                'txtTopico3Tab4Es' => trim($formulario['txtTopico3Tab4Es']),
                'txtTopico4Tab4Es' => trim($formulario['txtTopico4Tab4Es']),
                'txtTopico5Tab4Es' => trim($formulario['txtTopico5Tab4Es']),
                'txtTopico6Tab4Es' => trim($formulario['txtTopico6Tab4Es']),
                'txtTopico7Tab4Es' => trim($formulario['txtTopico7Tab4Es']),
                'txtTopico8Tab4Es' => trim($formulario['txtTopico8Tab4Es'])

            ];

            $dados['fileBannerPrincipal'] = isset($_FILES['fileBannerPrincipal']) ? $_FILES['fileBannerPrincipal'] : "";
            $dados['filePerguntas'] = isset($_FILES['filePerguntas']) ? $_FILES['filePerguntas'] : "";
            $dados['fileFotoTexto'] = isset($_FILES['fileFotoTexto']) ? $_FILES['fileFotoTexto'] : "";
            $dados['fileFotosServico'] = isset($_FILES['fileFotosServico']) ? $_FILES['fileFotosServico'] : "";

            if ($this->paginasModel->atualizarPagina($dados)) {
                //Para exibir mensagem success , não precisa informar o tipo de classe
                Alertas::mensagem('paginas', 'Página atualizada com sucesso');
                Redirecionamento::redirecionar('Painel/visualizarPaginas');
            } else {
                Alertas::mensagem('paginas', 'Não foi possível atualizar a página', 'alert alert-danger');
                Redirecionamento::redirecionar('Painel/visualizarPaginas');
            }
        } else {
            $dados = [
                'paginas' => $paginas,
                'tituloBreadcrumb' => '',
                'paginaSelecionada' => $paginaSelecionada,
                'fotoBanner' => $fotoBanner,
                'fotoPergunta' => $fotoPergunta,
                'fotoServico' => $fotoServico,
                'fotoTexto' => $fotoTexto
            ];
        }

        $this->view('painel/paginas/editar', $dados);
    }

    public function deletarImagemFormulario($idImagem)
    {

        $idPagina = base64_decode($_GET['id_pagina']);
        $nomeTabela = base64_decode($_GET["nome_tabela"]);
        $nomeAlerta = base64_decode($_GET["nome_alerta"]);
        $nomeMensagem = base64_decode($_GET["nome_mensagem"]);

        switch ($nomeTabela) {
            case "tb_foto_pergunta":
                $nomeIdColuna = "id_foto_pergunta";
                break;
            case "tb_foto_banner":
                $nomeIdColuna = "id_foto_banner";
                break;
            case "tb_foto_servico":
                $nomeIdColuna = "id_foto_servico";
                break;
            case "tb_foto_texto":
                $nomeIdColuna = "id_foto_texto";
                break;
        }

        if ($this->paginaDinamicaModel->deletarImagemFormulario($idImagem, $nomeTabela, $nomeIdColuna)) {
            Alertas::mensagemApagaFoto($nomeAlerta, $nomeMensagem . ' removido(a) com sucesso', 'alert alert-success msg-texto');
            $this->editarPagina($idPagina);
        } else {
            Alertas::mensagemApagaFoto('imagemBanner', 'Erro ao apagar ' . $nomeMensagem, 'alert alert-danger msg-texto');
            $this->editarPagina($idPagina);
        }
    }


    public function deletarPagina($id)
    {
        $nomePagina = base64_decode($_GET['nome_pagina']);
        if ($this->paginasModel->deletarPagina($id,$nomePagina)) {
            $this->gerarPagina();
            Alertas::mensagem('paginas', 'Página deletada com sucesso');
            Redirecionamento::redirecionar('Painel/visualizarPaginas');
        } else {
            Alertas::mensagem('paginas', 'Não foi possível deletar a página', 'alert alert-danger');
            Redirecionamento::redirecionar('Painel/visualizarPaginas');
        }
    }
}
