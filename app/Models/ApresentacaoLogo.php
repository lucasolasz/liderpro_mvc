<?php

class ApresentacaoLogo
{
    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }

    //Retorna registros da tabela menu
    public function listarConfiguracaoLogo()
    {
        $this->db->query("SELECT * FROM tb_conf_logo");

        return $this->db->resultados();
    }

    public function listarConfiguracaoLogoPorId($id)
    {
        $this->db->query("SELECT * FROM tb_conf_logo WHERE id_conf_logo = :id_conf_logo");
        $this->db->bind("id_conf_logo", $id);
        return $this->db->resultado();
    }

    public function armazenarApresentacaoLogo($dados)
    {
        $this->db->query("INSERT INTO 
        tb_conf_logo (
            ds_conf_logo, 
            qt_duracao_seg
            ) 
            VALUES (
                :ds_conf_logo,
                :qt_duracao_seg
                )");

        $this->db->bind("ds_conf_logo", $dados['txtNomeConfiguracao']);
        $this->db->bind("qt_duracao_seg", $dados['numSegundos']);

        $this->db->executa();

        return true;
    }

    public function editarApresentacaoLogo($dados)
    {
        $this->db->query("UPDATE tb_conf_logo SET 
            ds_conf_logo = :ds_conf_logo,
            qt_duracao_seg = :qt_duracao_seg

            WHERE id_conf_logo = :id_conf_logo
            ");

        $this->db->bind("ds_conf_logo", $dados['txtNomeConfiguracao']);
        $this->db->bind("qt_duracao_seg", $dados['numSegundos']);
        $this->db->bind("id_conf_logo", $dados['id_conf_logo']);

        $this->db->executa();

        return true;
    }


    public function deletarCliente($id)
    {
        $this->db->query("DELETE FROM tb_conf_logo WHERE id_conf_logo = :id_conf_logo");
        $this->db->bind("id_conf_logo", $id);
        $this->db->executa();

        return true;
    }
}
