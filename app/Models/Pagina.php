<?php

class Pagina
{

    private $db;


    public function __construct()
    {
        $this->db = new Database();
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

        $ds_breadcrumb_menu  = GeraNomeArquivoComUnderline::gerar($dados['txtTitutoPagina']);

        $this->db->bind("ds_pagina", trim($dados['txtTitutoPagina']));
        $this->db->bind("ds_url_menu", "/$ds_breadcrumb_menu");
        $this->db->bind("ds_breadcrumb_menu",  $ds_breadcrumb_menu);
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

        $this->armazenarPaginaEn($dados, $ultimoId);

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


    public function armazenarPaginaEn($dados, $idPagina)
    {


        $this->db->query("INSERT INTO 
        tb_pagina_en (
            fk_id_pagina,
            ds_pagina_en, 
            ds_texto_principal_en,
            ds_tab1_en, 
            ds_topico1tab1_en, 
            ds_topico2tab1_en, 
            ds_topico3tab1_en, 
            ds_topico4tab1_en, 
            ds_topico5tab1_en,
            ds_topico6tab1_en,
            ds_topico7tab1_en,
            ds_topico8tab1_en,
            ds_tab2_en,
            ds_topico1tab2_en, 
            ds_topico2tab2_en, 
            ds_topico3tab2_en, 
            ds_topico4tab2_en, 
            ds_topico5tab2_en,
            ds_topico6tab2_en,
            ds_topico7tab2_en,
            ds_topico8tab2_en,
            ds_tab3_en,
            ds_topico1tab3_en, 
            ds_topico2tab3_en, 
            ds_topico3tab3_en, 
            ds_topico4tab3_en, 
            ds_topico5tab3_en,
            ds_topico6tab3_en,
            ds_topico7tab3_en,
            ds_topico8tab3_en,
            ds_tab4_en,
            ds_topico1tab4_en, 
            ds_topico2tab4_en, 
            ds_topico3tab4_en, 
            ds_topico4tab4_en, 
            ds_topico5tab4_en,
            ds_topico6tab4_en,
            ds_topico7tab4_en,
            ds_topico8tab4_en
            ) 
            VALUES (
                :fk_id_pagina,
                :ds_pagina_en,
                :ds_texto_principal_en, 
                :ds_tab1_en, 
                :ds_topico1tab1_en, 
                :ds_topico2tab1_en, 
                :ds_topico3tab1_en, 
                :ds_topico4tab1_en,
                :ds_topico5tab1_en, 
                :ds_topico6tab1_en, 
                :ds_topico7tab1_en,
                :ds_topico8tab1_en,
                :ds_tab2_en, 
                :ds_topico1tab2_en, 
                :ds_topico2tab2_en, 
                :ds_topico3tab2_en, 
                :ds_topico4tab2_en,
                :ds_topico5tab2_en, 
                :ds_topico6tab2_en, 
                :ds_topico7tab2_en,
                :ds_topico8tab2_en,
                :ds_tab3_en, 
                :ds_topico1tab3_en, 
                :ds_topico2tab3_en, 
                :ds_topico3tab3_en, 
                :ds_topico4tab3_en,
                :ds_topico5tab3_en, 
                :ds_topico6tab3_en, 
                :ds_topico7tab3_en,
                :ds_topico8tab3_en,
                :ds_tab4_en, 
                :ds_topico1tab4_en, 
                :ds_topico2tab4_en, 
                :ds_topico3tab4_en, 
                :ds_topico4tab4_en,
                :ds_topico5tab4_en, 
                :ds_topico6tab4_en, 
                :ds_topico7tab4_en,
                :ds_topico8tab4_en
                )");

        $this->db->bind("fk_id_pagina", $idPagina);
        $this->db->bind("ds_pagina_en", trim($dados['txtTitutoPaginaEn']));
        $this->db->bind("ds_texto_principal_en", $dados['txtTextPrincipalEn']);
        $this->db->bind("ds_tab1_en", $dados['txtNomeTab1En']);
        $this->db->bind("ds_topico1tab1_en", $dados['txtTopico1Tab1En']);
        $this->db->bind("ds_topico2tab1_en", $dados['txtTopico2Tab1En']);
        $this->db->bind("ds_topico3tab1_en", $dados['txtTopico3Tab1En']);
        $this->db->bind("ds_topico4tab1_en", $dados['txtTopico4Tab1En']);
        $this->db->bind("ds_topico5tab1_en", $dados['txtTopico5Tab1En']);
        $this->db->bind("ds_topico6tab1_en", $dados['txtTopico6Tab1En']);
        $this->db->bind("ds_topico7tab1_en", $dados['txtTopico7Tab1En']);
        $this->db->bind("ds_topico8tab1_en", $dados['txtTopico8Tab1En']);
        $this->db->bind("ds_tab2_en", $dados['txtNomeTab2En']);
        $this->db->bind("ds_topico1tab2_en", $dados['txtTopico1Tab2En']);
        $this->db->bind("ds_topico2tab2_en", $dados['txtTopico2Tab2En']);
        $this->db->bind("ds_topico3tab2_en", $dados['txtTopico3Tab2En']);
        $this->db->bind("ds_topico4tab2_en", $dados['txtTopico4Tab2En']);
        $this->db->bind("ds_topico5tab2_en", $dados['txtTopico5Tab2En']);
        $this->db->bind("ds_topico6tab2_en", $dados['txtTopico6Tab2En']);
        $this->db->bind("ds_topico7tab2_en", $dados['txtTopico7Tab2En']);
        $this->db->bind("ds_topico8tab2_en", $dados['txtTopico8Tab2En']);
        $this->db->bind("ds_tab3_en", $dados['txtNomeTab3En']);
        $this->db->bind("ds_topico1tab3_en", $dados['txtTopico1Tab3En']);
        $this->db->bind("ds_topico2tab3_en", $dados['txtTopico2Tab3En']);
        $this->db->bind("ds_topico3tab3_en", $dados['txtTopico3Tab3En']);
        $this->db->bind("ds_topico4tab3_en", $dados['txtTopico4Tab3En']);
        $this->db->bind("ds_topico5tab3_en", $dados['txtTopico5Tab3En']);
        $this->db->bind("ds_topico6tab3_en", $dados['txtTopico6Tab3En']);
        $this->db->bind("ds_topico7tab3_en", $dados['txtTopico7Tab3En']);
        $this->db->bind("ds_topico8tab3_en", $dados['txtTopico8Tab3En']);
        $this->db->bind("ds_tab4_en", $dados['txtNomeTab4En']);
        $this->db->bind("ds_topico1tab4_en", $dados['txtTopico1Tab4En']);
        $this->db->bind("ds_topico2tab4_en", $dados['txtTopico2Tab4En']);
        $this->db->bind("ds_topico3tab4_en", $dados['txtTopico3Tab4En']);
        $this->db->bind("ds_topico4tab4_en", $dados['txtTopico4Tab4En']);
        $this->db->bind("ds_topico5tab4_en", $dados['txtTopico5Tab4En']);
        $this->db->bind("ds_topico6tab4_en", $dados['txtTopico6Tab4En']);
        $this->db->bind("ds_topico7tab4_en", $dados['txtTopico7Tab4En']);
        $this->db->bind("ds_topico8tab4_en", $dados['txtTopico8Tab4En']);

        $this->db->executa();
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

    public function atualizarPagina($dados)
    {

        $this->db->query("UPDATE tb_pagina SET 
        ds_pagina=:ds_pagina,
        ds_texto_principal=:ds_texto_principal, 
        ds_tab1=:ds_tab1, 
        ds_topico1tab1=:ds_topico1tab1, 
        ds_topico2tab1=:ds_topico2tab1, 
        ds_topico3tab1=:ds_topico3tab1, 
        ds_topico4tab1=:ds_topico4tab1, 
        ds_topico5tab1=:ds_topico5tab1, 
        ds_topico6tab1=:ds_topico6tab1, 
        ds_topico7tab1=:ds_topico7tab1, 
        ds_topico8tab1=:ds_topico8tab1, 
        ds_tab2=:ds_tab2,
        ds_topico1tab2=:ds_topico1tab2, 
        ds_topico2tab2=:ds_topico2tab2, 
        ds_topico3tab2=:ds_topico3tab2, 
        ds_topico4tab2=:ds_topico4tab2, 
        ds_topico5tab2=:ds_topico5tab2, 
        ds_topico6tab2=:ds_topico6tab2, 
        ds_topico7tab2=:ds_topico7tab2, 
        ds_topico8tab2=:ds_topico8tab2, 
        ds_tab3=:ds_tab3, 
        ds_topico1tab3=:ds_topico1tab3, 
        ds_topico2tab3=:ds_topico2tab3, 
        ds_topico3tab3=:ds_topico3tab3, 
        ds_topico4tab3=:ds_topico4tab3, 
        ds_topico5tab3=:ds_topico5tab3, 
        ds_topico6tab3=:ds_topico6tab3, 
        ds_topico7tab3=:ds_topico7tab3, 
        ds_topico8tab3=:ds_topico8tab3, 
        ds_tab4=:ds_tab4, 
        ds_topico1tab4=:ds_topico1tab4, 
        ds_topico2tab4=:ds_topico2tab4, 
        ds_topico3tab4=:ds_topico3tab4, 
        ds_topico4tab4=:ds_topico4tab4, 
        ds_topico5tab4=:ds_topico5tab4, 
        ds_topico6tab4=:ds_topico6tab4, 
        ds_topico7tab4=:ds_topico7tab4, 
        ds_topico8tab4=:ds_topico8tab4, 
        chk_pagina_ativa=:chk_pagina_ativa
        
        WHERE id_pagina= :id_pagina;
        ");

        $this->db->bind("ds_pagina", trim($dados['txtTitutoPagina']));
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
        $this->db->bind("id_pagina", $dados['id_pagina']);

        $this->db->executa();

        $this->atualizarPaginaEn($dados, $dados['id_pagina']);

        if (!$dados['fileBannerPrincipal']['name'] == "") {
            if ($this->apagarFotoFisicaDinamico("tb_foto_banner", $dados['id_pagina'])) {
                $this->armazenaFotoBanner($dados['fileBannerPrincipal'], $dados['id_pagina']);
            }
        }

        if (!$dados['filePerguntas']['name'][0] == "") {
            if ($this->apagarFotoFisicaDinamico("tb_foto_pergunta", $dados['id_pagina'])) {
                $this->armazenaFotosPerguntas($dados['filePerguntas'], $dados['id_pagina']);
            }
        }

        if (!$dados['fileFotoTexto']['name'] == "") {
            if ($this->apagarFotoFisicaDinamico("tb_foto_texto", $dados['id_pagina'])) {
                $this->armazenarFotoTexto($dados['fileFotoTexto'], $dados['id_pagina']);
            }
        }

        if (!$dados['fileFotosServico']['name'][0] == "") {
            if ($this->apagarFotoFisicaDinamico("tb_foto_servico", $dados['id_pagina'])) {
                $this->armazenarFotosServico($dados['fileFotosServico'], $dados['id_pagina']);
            }
        }

        return true;
    }

    public function atualizarPaginaEn($dados, $idPagina)
    {

        $this->db->query("UPDATE tb_pagina_en SET 
        ds_pagina_en=:ds_pagina_en,
        ds_texto_principal_en=:ds_texto_principal_en, 
        ds_tab1_en=:ds_tab1_en, 
        ds_topico1tab1_en=:ds_topico1tab1_en, 
        ds_topico2tab1_en=:ds_topico2tab1_en, 
        ds_topico3tab1_en=:ds_topico3tab1_en, 
        ds_topico4tab1_en=:ds_topico4tab1_en, 
        ds_topico5tab1_en=:ds_topico5tab1_en, 
        ds_topico6tab1_en=:ds_topico6tab1_en, 
        ds_topico7tab1_en=:ds_topico7tab1_en, 
        ds_topico8tab1_en=:ds_topico8tab1_en, 
        ds_tab2_en=:ds_tab2_en,
        ds_topico1tab2_en=:ds_topico1tab2_en, 
        ds_topico2tab2_en=:ds_topico2tab2_en, 
        ds_topico3tab2_en=:ds_topico3tab2_en, 
        ds_topico4tab2_en=:ds_topico4tab2_en, 
        ds_topico5tab2_en=:ds_topico5tab2_en, 
        ds_topico6tab2_en=:ds_topico6tab2_en, 
        ds_topico7tab2_en=:ds_topico7tab2_en, 
        ds_topico8tab2_en=:ds_topico8tab2_en, 
        ds_tab3_en=:ds_tab3_en, 
        ds_topico1tab3_en=:ds_topico1tab3_en, 
        ds_topico2tab3_en=:ds_topico2tab3_en, 
        ds_topico3tab3_en=:ds_topico3tab3_en, 
        ds_topico4tab3_en=:ds_topico4tab3_en, 
        ds_topico5tab3_en=:ds_topico5tab3_en, 
        ds_topico6tab3_en=:ds_topico6tab3_en, 
        ds_topico7tab3_en=:ds_topico7tab3_en, 
        ds_topico8tab3_en=:ds_topico8tab3_en, 
        ds_tab4_en=:ds_tab4_en, 
        ds_topico1tab4_en=:ds_topico1tab4_en, 
        ds_topico2tab4_en=:ds_topico2tab4_en, 
        ds_topico3tab4_en=:ds_topico3tab4_en, 
        ds_topico4tab4_en=:ds_topico4tab4_en, 
        ds_topico5tab4_en=:ds_topico5tab4_en, 
        ds_topico6tab4_en=:ds_topico6tab4_en, 
        ds_topico7tab4_en=:ds_topico7tab4_en, 
        ds_topico8tab4_en=:ds_topico8tab4_en
        
        WHERE fk_id_pagina= :fk_id_pagina;
        ");


        $this->db->bind("ds_pagina_en", trim($dados['txtTitutoPaginaEn']));
        $this->db->bind("ds_texto_principal_en", $dados['txtTextPrincipalEn']);
        $this->db->bind("ds_tab1_en", $dados['txtNomeTab1En']);
        $this->db->bind("ds_topico1tab1_en", $dados['txtTopico1Tab1En']);
        $this->db->bind("ds_topico2tab1_en", $dados['txtTopico2Tab1En']);
        $this->db->bind("ds_topico3tab1_en", $dados['txtTopico3Tab1En']);
        $this->db->bind("ds_topico4tab1_en", $dados['txtTopico4Tab1En']);
        $this->db->bind("ds_topico5tab1_en", $dados['txtTopico5Tab1En']);
        $this->db->bind("ds_topico6tab1_en", $dados['txtTopico6Tab1En']);
        $this->db->bind("ds_topico7tab1_en", $dados['txtTopico7Tab1En']);
        $this->db->bind("ds_topico8tab1_en", $dados['txtTopico8Tab1En']);
        $this->db->bind("ds_tab2_en", $dados['txtNomeTab2En']);
        $this->db->bind("ds_topico1tab2_en", $dados['txtTopico1Tab2En']);
        $this->db->bind("ds_topico2tab2_en", $dados['txtTopico2Tab2En']);
        $this->db->bind("ds_topico3tab2_en", $dados['txtTopico3Tab2En']);
        $this->db->bind("ds_topico4tab2_en", $dados['txtTopico4Tab2En']);
        $this->db->bind("ds_topico5tab2_en", $dados['txtTopico5Tab2En']);
        $this->db->bind("ds_topico6tab2_en", $dados['txtTopico6Tab2En']);
        $this->db->bind("ds_topico7tab2_en", $dados['txtTopico7Tab2En']);
        $this->db->bind("ds_topico8tab2_en", $dados['txtTopico8Tab2En']);
        $this->db->bind("ds_tab3_en", $dados['txtNomeTab3En']);
        $this->db->bind("ds_topico1tab3_en", $dados['txtTopico1Tab3En']);
        $this->db->bind("ds_topico2tab3_en", $dados['txtTopico2Tab3En']);
        $this->db->bind("ds_topico3tab3_en", $dados['txtTopico3Tab3En']);
        $this->db->bind("ds_topico4tab3_en", $dados['txtTopico4Tab3En']);
        $this->db->bind("ds_topico5tab3_en", $dados['txtTopico5Tab3En']);
        $this->db->bind("ds_topico6tab3_en", $dados['txtTopico6Tab3En']);
        $this->db->bind("ds_topico7tab3_en", $dados['txtTopico7Tab3En']);
        $this->db->bind("ds_topico8tab3_en", $dados['txtTopico8Tab3En']);
        $this->db->bind("ds_tab4_en", $dados['txtNomeTab4En']);
        $this->db->bind("ds_topico1tab4_en", $dados['txtTopico1Tab4En']);
        $this->db->bind("ds_topico2tab4_en", $dados['txtTopico2Tab4En']);
        $this->db->bind("ds_topico3tab4_en", $dados['txtTopico3Tab4En']);
        $this->db->bind("ds_topico4tab4_en", $dados['txtTopico4Tab4En']);
        $this->db->bind("ds_topico5tab4_en", $dados['txtTopico5Tab4En']);
        $this->db->bind("ds_topico6tab4_en", $dados['txtTopico6Tab4En']);
        $this->db->bind("ds_topico7tab4_en", $dados['txtTopico7Tab4En']);
        $this->db->bind("ds_topico8tab4_en", $dados['txtTopico8Tab4En']);
        $this->db->bind("fk_id_pagina", $idPagina);

        $this->db->executa();
    }

    public function listaFotoAnteriorDinamico($nomeTabela, $idPagina)
    {
        $this->db->query("SELECT * FROM $nomeTabela WHERE fk_pagina = :fk_pagina");
        $this->db->bind("fk_pagina", $idPagina);
        return $this->db->resultados();
    }


    public function apagarFotoFisicaDinamico($nomeTabela, $idPagina)
    {
        $foto = $this->listaFotoAnteriorDinamico($nomeTabela, $idPagina);
        //Se nao existe foto registrada
        if (empty($foto)) {
            return true;
        }

        if (count($foto) > 1) {

            for ($i = 0; $i < count($foto); $i++) {
                $nomeArquivo = $foto[$i]->nm_arquivo;
                $pathArquivo = $foto[$i]->nm_path_arquivo;
                $pathCompleto = "uploads/$pathArquivo/$nomeArquivo";

                $upload = new Upload();
                $upload->deletarArquivo(null, $pathCompleto);
            }
        } else {

            $nomeArquivo = $foto[0]->nm_arquivo;
            $pathArquivo = $foto[0]->nm_path_arquivo;
            $pathCompleto = "uploads/$pathArquivo/$nomeArquivo";

            $upload = new Upload();
            $upload->deletarArquivo(null, $pathCompleto);
        }

        $this->db->query("DELETE FROM $nomeTabela WHERE fk_pagina = :fk_pagina");
        $this->db->bind("fk_pagina", $idPagina);
        $this->db->executa();
        return true;
    }

    public function deletarPagina($idPagina, $nomePagina)
    {
        $apagouTudo = false;
        $apagouTudo = $this->deletarImagemBancoDinamico("tb_foto_banner", $idPagina) == true ? true : false;
        $apagouTudo = $this->deletarImagemBancoDinamico("tb_foto_pergunta", $idPagina) == true ? true : false;
        $apagouTudo = $this->deletarImagemBancoDinamico("tb_foto_texto", $idPagina) == true ? true : false;
        $apagouTudo = $this->deletarImagemBancoDinamico("tb_foto_servico", $idPagina) == true ? true : false;

        if ($apagouTudo) {

            $this->db->query("DELETE FROM tb_pagina_en WHERE fk_id_pagina = :fk_id_pagina");
            $this->db->bind("fk_id_pagina", $idPagina);
            $this->db->executa();

            $this->db->query("DELETE FROM tb_pagina WHERE id_pagina = :id_pagina");
            $this->db->bind("id_pagina", $idPagina);
            $this->db->executa();
        }

        $pathCompletoPastaImagensUpload = "uploads/pagina_id_" . $idPagina;
        $this->apagar_pasta($pathCompletoPastaImagensUpload);

        $pathCompletoArquivoPaginaView = APP . "/Views/painel/paginasDinamicasGeradas/$nomePagina.php";
        $this->apagaPaginaDinamica($pathCompletoArquivoPaginaView);

        return true;
    }

    public function apagaPaginaDinamica($pathCompletoArquivo)
    {
        if (file_exists($pathCompletoArquivo)) {
            unlink($pathCompletoArquivo);
        }
    }

    public function apagar_pasta($pasta)
    {
        if (is_dir($pasta)) {
            $arquivos = glob($pasta . '/*');
            foreach ($arquivos as $arquivo) {
                if (is_file($arquivo)) {
                    unlink($arquivo);
                }
            }
            rmdir($pasta);
        }
    }


    public function deletarImagemBancoDinamico($nomeTabela, $idPagina)
    {
        $this->db->query("DELETE FROM $nomeTabela WHERE fk_pagina = :fk_pagina");
        $this->db->bind("fk_pagina", $idPagina);
        $this->db->executa();
        return true;
    }

    public function pesquisarServicosHome($dados)
    {


        $this->db->query("
        select * from tb_pagina tp 
        where 
        ds_pagina like concat('%', :txtPesquisa1, '%') 
        or ds_texto_principal like concat('%', :txtPesquisa2, '%') 
        or ds_tab1 like concat('%', :txtPesquisa3, '%') 
        or ds_topico1tab1 like concat('%', :txtPesquisa4, '%') 
        or ds_topico2tab1 like concat('%', :txtPesquisa5, '%') 
        or ds_topico3tab1 like concat('%', :txtPesquisa6, '%') 
        or ds_topico4tab1 like concat('%', :txtPesquisa7, '%') 
        or ds_topico5tab1 like concat('%', :txtPesquisa8, '%') 
        or ds_topico6tab1 like concat('%', :txtPesquisa9, '%') 
        or ds_topico7tab1 like concat('%', :txtPesquisa10, '%') 
        or ds_topico8tab1 like concat('%', :txtPesquisa11, '%') 
        or ds_tab2 like concat('%', :txtPesquisa12, '%') 
        or ds_topico1tab2 like concat('%', :txtPesquisa13, '%') 
        or ds_topico2tab2 like concat('%', :txtPesquisa14, '%') 
        or ds_topico3tab2 like concat('%', :txtPesquisa15, '%') 
        or ds_topico4tab2 like concat('%', :txtPesquisa16, '%') 
        or ds_topico5tab2 like concat('%', :txtPesquisa17, '%') 
        or ds_topico6tab2 like concat('%', :txtPesquisa18, '%') 
        or ds_topico7tab2 like concat('%', :txtPesquisa19, '%') 
        or ds_topico8tab2 like concat('%', :txtPesquisa20, '%') 
        or ds_tab3 like concat('%', :txtPesquisa21, '%') 
        or ds_topico1tab3 like concat('%', :txtPesquisa22, '%') 
        or ds_topico2tab3 like concat('%', :txtPesquisa23, '%') 
        or ds_topico3tab3 like concat('%', :txtPesquisa24, '%') 
        or ds_topico4tab3 like concat('%', :txtPesquisa25, '%') 
        or ds_topico5tab3 like concat('%', :txtPesquisa26, '%') 
        or ds_topico6tab3 like concat('%', :txtPesquisa27, '%') 
        or ds_topico7tab3 like concat('%', :txtPesquisa28, '%') 
        or ds_topico8tab3 like concat('%', :txtPesquisa29, '%') 
        or ds_tab4 like concat('%', :txtPesquisa30, '%') 
        or ds_topico1tab4 like concat('%', :txtPesquisa31, '%') 
        or ds_topico2tab4 like concat('%', :txtPesquisa32, '%') 
        or ds_topico3tab4 like concat('%', :txtPesquisa33, '%') 
        or ds_topico4tab4 like concat('%', :txtPesquisa34, '%') 
        or ds_topico5tab4 like concat('%', :txtPesquisa35, '%') 
        or ds_topico6tab4 like concat('%', :txtPesquisa36, '%') 
        or ds_topico7tab4 like concat('%', :txtPesquisa37, '%') 
        or ds_topico8tab4 like concat('%', :txtPesquisa38, '%') 
        ");


        $this->db->bind("txtPesquisa1", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa2", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa3", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa4", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa5", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa6", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa7", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa8", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa9", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa10", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa11", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa12", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa13", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa14", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa15", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa16", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa17", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa18", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa19", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa20", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa21", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa22", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa23", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa24", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa25", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa26", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa27", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa28", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa29", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa30", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa31", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa32", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa33", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa34", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa35", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa36", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa37", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa38", $dados['txtPesquisaHome']);


        return $this->db->resultados();
    }



    public function pesquisarAssistenciasHome($dados)
    {

        $this->db->query("
        select * from tb_assistencia_tecnica tat 
        where 
        ds_url_menu like concat('%', :txtPesquisa1, '%') 
        or ds_assistencia like concat('%', :txtPesquisa2, '%') 
        or ds_principais_servicos1  like concat('%', :txtPesquisa3, '%') 
        or ds_principais_servicos2  like concat('%', :txtPesquisa4, '%') 
        or ds_principais_servicos3  like concat('%', :txtPesquisa5, '%') 
        or ds_principais_servicos4  like concat('%', :txtPesquisa6, '%') 
        or ds_principais_servicos5  like concat('%', :txtPesquisa7, '%') 
        or ds_principais_servicos6  like concat('%', :txtPesquisa8, '%') 
        or ds_principais_servicos7  like concat('%', :txtPesquisa9, '%') 
        or ds_principais_servicos8  like concat('%', :txtPesquisa10, '%') 
        or ds_principais_problemas1 like concat('%', :txtPesquisa11, '%') 
        or ds_principais_problemas2 like concat('%', :txtPesquisa12, '%') 
        or ds_principais_problemas3 like concat('%', :txtPesquisa13, '%') 
        or ds_principais_problemas4 like concat('%', :txtPesquisa14, '%') 
        or ds_principais_problemas5 like concat('%', :txtPesquisa15, '%') 
        or ds_principais_problemas6 like concat('%', :txtPesquisa16, '%') 
        or ds_principais_problemas7 like concat('%', :txtPesquisa17, '%') 
        or ds_principais_problemas8 like concat('%', :txtPesquisa18, '%') 
        ");

        $this->db->bind("txtPesquisa1", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa2", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa3", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa4", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa5", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa6", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa7", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa8", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa9", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa10", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa11", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa12", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa13", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa14", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa15", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa16", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa17", $dados['txtPesquisaHome']);
        $this->db->bind("txtPesquisa18", $dados['txtPesquisaHome']);

        return $this->db->resultados();
    }

    public function pesquisarLiderProHome($dados)
    {

        $this->db->query("select * from tb_menu_lider_pro
        where ds_conteudo_pagina like concat('%', :txtPesquisa, '%') ");
        $this->db->bind("txtPesquisa", $dados['txtPesquisaHome']);

        return $this->db->resultados();
    }

    public function pesquisarClientesHome($dados)
    {

        $this->db->query("select * from tb_clientes c
        join tb_foto_cliente ft on ft.fk_cliente = c.id_cliente
        join tb_segmento sg on sg.id_segmento = c.fk_segmento
        where c.ds_nome_fantasia like concat('%', :txtPesquisa, '%') ");
        $this->db->bind("txtPesquisa", $dados['txtPesquisaHome']);

        return $this->db->resultados();
    }
}
