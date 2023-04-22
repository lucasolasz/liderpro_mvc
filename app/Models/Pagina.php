<?php

class Pagina
{

    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }

    //Retorna registros da tabela menu
    public function listarMenu()
    {
        $this->db->query("SELECT * FROM tb_menu");

        return $this->db->resultados();
    }

    //Retorna registros da tabela menu liderpro
    public function listarMenuLiderPro()
    {
        $this->db->query("SELECT * FROM tb_menu_lider_pro");

        return $this->db->resultados();
    }

    public function idProximoRegistroPagina()
    {
        $this->db->query("SHOW TABLE STATUS LIKE 'tb_pagina'");
        return $this->db->resultado();
    }

    public function criarPastaFotos($pathDefault, $nomePasta)
    {
        //Cria pasta dos arquivos individualmente de acordo com id
        if (!file_exists($pathDefault . DIRECTORY_SEPARATOR . $nomePasta)) {
            mkdir($pathDefault . DIRECTORY_SEPARATOR . $nomePasta, 0777);
        }
    }


    public function armazenaImagemDinamicamente($nome_tabela, $pastaArquivo, $novoNomeArquivoAposMover, $ultimoId)
    {
        $this->db->query("INSERT INTO 
                $nome_tabela (
                    nm_path_arquivo,
                    nm_arquivo,
                    fk_pagina
                )
                VALUES (
                    :nm_path_arquivo,
                    :nm_arquivo,
                    :fk_pagina
                )");

        $this->db->bind("nm_path_arquivo", $pastaArquivo);
        $this->db->bind("nm_arquivo", $novoNomeArquivoAposMover);
        $this->db->bind("fk_pagina", $ultimoId);

        if (!$this->db->executa()) {
            return false;
        }
    }


    public function armazenarPagina($dados)
    {

        $this->db->query("INSERT INTO 
        tb_pagina (
            ds_pagina, 
            ds_url_menu, 
            ds_breadcrumb_menu, 
            ds_texto_principal,
            ds_tab1, 
            ds_topico1tab1, 
            ds_topico2tab1, 
            ds_topico3tab1, 
            ds_topico4tab1, 
            ds_topico5tab1,
            ds_topico6tab1,
            ds_topico7tab1,
            ds_topico8tab1,
            ds_tab2,
            ds_topico1tab2, 
            ds_topico2tab2, 
            ds_topico3tab2, 
            ds_topico4tab2, 
            ds_topico5tab2,
            ds_topico6tab2,
            ds_topico7tab2,
            ds_topico8tab2,
            ds_tab3,
            ds_topico1tab3, 
            ds_topico2tab3, 
            ds_topico3tab3, 
            ds_topico4tab3, 
            ds_topico5tab3,
            ds_topico6tab3,
            ds_topico7tab3,
            ds_topico8tab3,
            ds_tab4,
            ds_topico1tab4, 
            ds_topico2tab4, 
            ds_topico3tab4, 
            ds_topico4tab4, 
            ds_topico5tab4,
            ds_topico6tab4,
            ds_topico7tab4,
            ds_topico8tab4,
            chk_pagina_ativa
            ) 
            VALUES (
                :ds_pagina ,
                :ds_url_menu, 
                :ds_breadcrumb_menu,
                :ds_texto_principal, 
                :ds_tab1, 
                :ds_topico1tab1, 
                :ds_topico2tab1, 
                :ds_topico3tab1, 
                :ds_topico4tab1,
                :ds_topico5tab1, 
                :ds_topico6tab1, 
                :ds_topico7tab1,
                :ds_topico8tab1,
                :ds_tab2, 
                :ds_topico1tab2, 
                :ds_topico2tab2, 
                :ds_topico3tab2, 
                :ds_topico4tab2,
                :ds_topico5tab2, 
                :ds_topico6tab2, 
                :ds_topico7tab2,
                :ds_topico8tab2,
                :ds_tab3, 
                :ds_topico1tab3, 
                :ds_topico2tab3, 
                :ds_topico3tab3, 
                :ds_topico4tab3,
                :ds_topico5tab3, 
                :ds_topico6tab3, 
                :ds_topico7tab3,
                :ds_topico8tab3,
                :ds_tab4, 
                :ds_topico1tab4, 
                :ds_topico2tab4, 
                :ds_topico3tab4, 
                :ds_topico4tab4,
                :ds_topico5tab4, 
                :ds_topico6tab4, 
                :ds_topico7tab4,
                :ds_topico8tab4,
                :chk_pagina_ativa
                )");

        $this->db->bind("ds_pagina", $dados['txtTitutoPagina']);
        $this->db->bind("ds_url_menu", null);
        $this->db->bind("ds_breadcrumb_menu", null);
        $this->db->bind("ds_texto_principal", $dados['txtTextPrincipal']);
        $this->db->bind("ds_tab1", $dados['txtNomeTab1']);
        $this->db->bind("ds_topico1tab1", $dados['txtTopico1Tab1']);
        $this->db->bind("ds_topico2tab1", $dados['txtTopico2Tab1']);
        $this->db->bind("ds_topico3tab1", $dados['txtTopico3Tab1']);
        $this->db->bind("ds_topico4tab1", $dados['txtTopico4Tab1']);
        $this->db->bind("ds_topico5tab1", $dados['txtTopico5Tab1']);
        $this->db->bind("ds_topico6tab1", $dados['txtTopico6Tab1']);
        $this->db->bind("ds_topico7tab1", $dados['txtTopico7Tab1']);
        $this->db->bind("ds_topico8tab1", $dados['txtTopico8Tab1']);
        $this->db->bind("ds_tab2", $dados['txtNomeTab2']);
        $this->db->bind("ds_topico1tab2", $dados['txtTopico1Tab2']);
        $this->db->bind("ds_topico2tab2", $dados['txtTopico2Tab2']);
        $this->db->bind("ds_topico3tab2", $dados['txtTopico3Tab2']);
        $this->db->bind("ds_topico4tab2", $dados['txtTopico4Tab2']);
        $this->db->bind("ds_topico5tab2", $dados['txtTopico5Tab2']);
        $this->db->bind("ds_topico6tab2", $dados['txtTopico6Tab2']);
        $this->db->bind("ds_topico7tab2", $dados['txtTopico7Tab2']);
        $this->db->bind("ds_topico8tab2", $dados['txtTopico8Tab2']);
        $this->db->bind("ds_tab3", $dados['txtNomeTab3']);
        $this->db->bind("ds_topico1tab3", $dados['txtTopico1Tab3']);
        $this->db->bind("ds_topico2tab3", $dados['txtTopico2Tab3']);
        $this->db->bind("ds_topico3tab3", $dados['txtTopico3Tab3']);
        $this->db->bind("ds_topico4tab3", $dados['txtTopico4Tab3']);
        $this->db->bind("ds_topico5tab3", $dados['txtTopico5Tab3']);
        $this->db->bind("ds_topico6tab3", $dados['txtTopico6Tab3']);
        $this->db->bind("ds_topico7tab3", $dados['txtTopico7Tab3']);
        $this->db->bind("ds_topico8tab3", $dados['txtTopico8Tab3']);
        $this->db->bind("ds_tab4", $dados['txtNomeTab4']);
        $this->db->bind("ds_topico1tab4", $dados['txtTopico1Tab4']);
        $this->db->bind("ds_topico2tab4", $dados['txtTopico2Tab4']);
        $this->db->bind("ds_topico3tab4", $dados['txtTopico3Tab4']);
        $this->db->bind("ds_topico4tab4", $dados['txtTopico4Tab4']);
        $this->db->bind("ds_topico5tab4", $dados['txtTopico5Tab4']);
        $this->db->bind("ds_topico6tab4", $dados['txtTopico6Tab4']);
        $this->db->bind("ds_topico7tab4", $dados['txtTopico7Tab4']);
        $this->db->bind("ds_topico8tab4", $dados['txtTopico8Tab4']);
        $this->db->bind("chk_pagina_ativa", $dados['chkPaginaAtiva']);

        $this->db->executa();

        $ultimoId = $this->db->ultimoIdInserido();

        if (!$dados['fileBannerPrincipal']['name'][0] == "") {
            $this->armazenaFotoBanner($dados['fileBannerPrincipal'], $ultimoId);
        }

        if (!$dados['filePerguntas']['name'][0] == "") {
            $this->armazenaFotosPerguntas($dados['filePerguntas'], $ultimoId);
        }

        if (!$dados['fileFotoTexto']['name'][0] == "") {
            $this->armazenarFotoTexto($dados['fileFotoTexto'], $ultimoId);
        }

        if (!$dados['fileFotosServico']['name'][0] == "") {
            $this->armazenarFotosServico($dados['fileFotosServico'], $ultimoId);
        }


        return true;
    }

    public function armazenarFotosServico($dados, $ultimoId)
    {
        $pastaArquivo = "pagina_id_" . $ultimoId;
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

            $this->criarPastaFotos($upload->getPathDefault(), $pastaArquivo);

            $upload->imagem($arrayImagem, NULL, $pastaArquivo);

            $novoNomeArquivoAposMover = $upload->getResultado();

            $this->armazenaImagemDinamicamente("tb_foto_servico", $pastaArquivo, $novoNomeArquivoAposMover, $ultimoId);
        }
    }

    public function armazenarFotoTexto($dados, $ultimoId)
    {

        $pastaArquivo = "pagina_id_" . $ultimoId;
        $upload = new Upload();

        $this->criarPastaFotos($upload->getPathDefault(), $pastaArquivo);
        $upload->imagem($dados, NULL, $pastaArquivo);

        $novoNomeArquivoAposMover = $upload->getResultado();

        $this->armazenaImagemDinamicamente("tb_foto_texto", $pastaArquivo, $novoNomeArquivoAposMover, $ultimoId);
    }


    public function armazenaFotoBanner($dados, $ultimoId)
    {

        $pastaArquivo = "pagina_id_" . $ultimoId;
        $upload = new Upload();

        $this->criarPastaFotos($upload->getPathDefault(), $pastaArquivo);
        $upload->imagem($dados, NULL, $pastaArquivo);

        $novoNomeArquivoAposMover = $upload->getResultado();

        $this->armazenaImagemDinamicamente("tb_foto_banner", $pastaArquivo, $novoNomeArquivoAposMover, $ultimoId);
    }


    public function armazenaFotosPerguntas($dados, $ultimoId)
    {

        $pastaArquivo = "pagina_id_" . $ultimoId;
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

            $this->criarPastaFotos($upload->getPathDefault(), $pastaArquivo);

            $upload->imagem($arrayImagem, NULL, $pastaArquivo);

            $novoNomeArquivoAposMover = $upload->getResultado();

            $this->armazenaImagemDinamicamente("tb_foto_pergunta", $pastaArquivo, $novoNomeArquivoAposMover, $ultimoId);
        }
    }
}
