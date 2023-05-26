<?php

class Cliente
{

    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }


    //Retorna registros da tabela menu
    public function listarClientes()
    {
        $this->db->query("SELECT * FROM tb_clientes");

        return $this->db->resultados();
    }

    public function listarClientesPorId($id)
    {
        $this->db->query("SELECT * FROM tb_clientes WHERE id_cliente = :id_cliente");
        $this->db->bind("id_cliente", $id);
        return $this->db->resultado();
    }

    public function listarFotoLogomarcaPorId($id)
    {
        $this->db->query("SELECT * FROM tb_foto_cliente WHERE fk_cliente = :fk_cliente");
        $this->db->bind("fk_cliente", $id);
        return $this->db->resultado();
    }


    public function listaApresentaçãoLogo()
    {

        $this->db->query("SELECT * FROM tb_conf_logo");
        return $this->db->resultados();
    }


    public function visualizarSegmentos()
    {
        $this->db->query("SELECT * FROM tb_segmento");

        return $this->db->resultados();
    }

    public function criarPastaFotosCliente($pathDefault, $nomePasta)
    {
        //Cria pasta dos arquivos individualmente de acordo com id
        if (!file_exists($pathDefault . DIRECTORY_SEPARATOR . $nomePasta)) {
            mkdir($pathDefault . DIRECTORY_SEPARATOR . $nomePasta, 0777);
        }
    }

    public function armazenarCliente($dados, $dadosConfig)
    {
        $this->db->query("INSERT INTO 
        tb_clientes (
            ds_nome_fantasia, 
            ds_url,
            fk_segmento,
            chk_apresentacao_imagem
            ) 
            VALUES (
                :ds_nome_fantasia,
                :ds_url, 
                :fk_segmento,
                :chk_apresentacao_imagem
                )");

        $this->db->bind("ds_nome_fantasia", $dados['txtNomeFantasia']);
        $this->db->bind("ds_url", $dados['txtUrl']);
        $this->db->bind("fk_segmento", $dados['cboSegmento']);
        $this->db->bind("chk_apresentacao_imagem", $dados['chkApresentacaoImagem']);

        $this->db->executa();

        $ultimoId = $this->db->ultimoIdInserido();

        if (!$dados['fileLogomarcaCliente']['name'] == "") {
            $this->armazenaFotoCliente($dados['fileLogomarcaCliente'], $ultimoId);
        }

        $this->salvaConfigApresentacaoLogo($dadosConfig);

        return true;
    }


    public function salvaConfigApresentacaoLogo($dadosConfig)
    {

        for ($i = 1; $i <= 2; $i++) {

            $this->db->query("UPDATE tb_conf_logo SET 
            qt_duracao_seg = :qt_duracao_seg,
            chk_fixo = :chk_fixo
            
            WHERE id_conf_logo = :id_conf_logo
            ");

            $this->db->bind("qt_duracao_seg", $dadosConfig['numSegundosConfig' . $i]);
            $this->db->bind("chk_fixo", $dadosConfig['chkConfigFixo' . $i]);
            $this->db->bind("id_conf_logo", $i);

            $this->db->executa();
        }

        return true;
    }


    public function atualizarCliente($dados, $dadosConfig)
    {
        $this->db->query("UPDATE tb_clientes SET 
            ds_nome_fantasia = :ds_nome_fantasia,
            ds_url = :ds_url,
            fk_segmento = :fk_segmento,
            chk_apresentacao_imagem = :chk_apresentacao_imagem

            WHERE id_cliente = :id_cliente
            ");

        $this->db->bind("ds_nome_fantasia", $dados['txtNomeFantasia']);
        $this->db->bind("ds_url", $dados['txtUrl']);
        $this->db->bind("fk_segmento", $dados['cboSegmento']);
        $this->db->bind("chk_apresentacao_imagem", $dados['chkApresentacaoImagem']);
        $this->db->bind("id_cliente", $dados['id_cliente']);

        $this->db->executa();

        if (!$dados['fileLogomarcaCliente']['name'][0] == "") {
            if ($this->apagarFotoFisicaDinamico("tb_foto_cliente", $dados['id_cliente'])) {
                $this->armazenaFotoCliente($dados['fileLogomarcaCliente'], $dados['id_cliente']);
            }
        }

        $this->salvaConfigApresentacaoLogo($dadosConfig);

        return true;
    }



    public function listaFotoAnteriorDinamico($nomeTabela, $idCliente)
    {
        $this->db->query("SELECT * FROM $nomeTabela WHERE fk_cliente = :fk_cliente");
        $this->db->bind("fk_cliente", $idCliente);
        return $this->db->resultados();
    }

    public function apagarFotoFisicaDinamico($nomeTabela, $idCliente)
    {
        $foto = $this->listaFotoAnteriorDinamico($nomeTabela, $idCliente);

        //Se nao existe foto registrada
        if (empty($foto)) {
            return true;
        }

        $nomeArquivo = $foto[0]->nm_arquivo;
        $pathArquivo = $foto[0]->nm_path_arquivo;
        $pathCompleto = "uploads\\$pathArquivo\\$nomeArquivo";

        $upload = new Upload();
        $upload->deletarArquivo(null, $pathCompleto);

        $this->db->query("DELETE FROM $nomeTabela WHERE fk_cliente = :fk_cliente");
        $this->db->bind("fk_cliente", $idCliente);
        $this->db->executa();
        return true;
    }

    public function armazenaFotoCliente($dados, $ultimoId)
    {

        $pastaArquivo = "logomarcas";
        $upload = new Upload();

        $this->criarPastaFotosCliente($upload->getPathDefault(), $pastaArquivo);
        $upload->imagem($dados, NULL, $pastaArquivo);

        $novoNomeArquivoAposMover = $upload->getResultado();

        $this->armazenaImagemDinamicamente("tb_foto_cliente", $pastaArquivo, $novoNomeArquivoAposMover, $ultimoId);
    }

    public function armazenaImagemDinamicamente($nome_tabela, $pastaArquivo, $novoNomeArquivoAposMover, $ultimoId)
    {
        $this->db->query("INSERT INTO 
                $nome_tabela (
                    nm_path_arquivo,
                    nm_arquivo,
                    fk_cliente
                )
                VALUES (
                    :nm_path_arquivo,
                    :nm_arquivo,
                    :fk_cliente
                )");

        $this->db->bind("nm_path_arquivo", $pastaArquivo);
        $this->db->bind("nm_arquivo", $novoNomeArquivoAposMover);
        $this->db->bind("fk_cliente", $ultimoId);

        if (!$this->db->executa()) {
            return false;
        }
    }


    public function deletarCliente($idCliente)
    {
        $foto = $this->listaFotoAnteriorDinamico("tb_foto_cliente", $idCliente);


        if (!empty($foto)) {
            $nomeArquivo = $foto[0]->nm_arquivo;
            $pathArquivo = $foto[0]->nm_path_arquivo;
            $pathCompletoLogomarcaCliente = "uploads\\$pathArquivo\\$nomeArquivo";

            $upload = new Upload();
            $upload->deletarArquivo(null, $pathCompletoLogomarcaCliente);
        }

        $apagouTudo = false;
        $apagouTudo = $this->deletarImagemBancoDinamico("tb_foto_cliente", $idCliente) == true ? true : false;

        if ($apagouTudo) {
            $this->db->query("DELETE FROM tb_clientes WHERE id_cliente = :id_cliente");
            $this->db->bind("id_cliente", $idCliente);
            $this->db->executa();
        }

        return true;
    }

    public function apagar_pasta($pasta)
    {
        var_dump(is_file($pasta));
        die();

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

    public function deletarImagemBancoDinamico($nomeTabela, $idCliente)
    {
        $this->db->query("DELETE FROM $nomeTabela WHERE fk_cliente = :fk_cliente");
        $this->db->bind("fk_cliente", $idCliente);
        $this->db->executa();
        return true;
    }
}
