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
                $pathCompleto = "uploads\\$pathArquivo\\$nomeArquivo";

                $upload = new Upload();
                $upload->deletarArquivo(null, $pathCompleto);
            }
        } else {

            $nomeArquivo = $foto[0]->nm_arquivo;
            $pathArquivo = $foto[0]->nm_path_arquivo;
            $pathCompleto = "uploads\\$pathArquivo\\$nomeArquivo";

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
            $this->db->query("DELETE FROM tb_pagina WHERE id_pagina = :id_pagina");
            $this->db->bind("id_pagina", $idPagina);
            $this->db->executa();
        }

        $pathCompletoPastaImagensUpload = "uploads\\pagina_id_" . $idPagina;
        $this->apagar_pasta($pathCompletoPastaImagensUpload);

        $pathCompletoArquivoPaginaView = APP . "\\Views\\painel\\paginasDinamicasGeradas\\$nomePagina.php";
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
}
