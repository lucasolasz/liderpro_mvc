<?php

class Segmento
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    //Retorna registros da tabela menu
    public function listarSegmentos()
    {
        $this->db->query("SELECT * FROM tb_segmento");

        return $this->db->resultados();
    }

    public function listarSegmentosporId($id)
    {
        $this->db->query("SELECT * FROM tb_segmento WHERE id_segmento = :id_segmento");
        $this->db->bind("id_segmento", $id);

        return $this->db->resultado();
    }



    public function armazenarSegmento($dados)
    {
        $this->db->query("INSERT INTO 
        tb_segmento (
            ds_segmento
        ) VALUES (
            :ds_segmento
            )");

        $this->db->bind("ds_segmento", $dados['txtNomeSegmento']);

        $this->db->executa();

        return true;
    }

    public function editarSegmento($dados)
    {

        $this->db->query("UPDATE tb_segmento SET 
        ds_segmento = :ds_segmento
        WHERE id_segmento = :id_segmento
        ");

        $this->db->bind("ds_segmento", $dados['txtNomeSegmento']);
        $this->db->bind("id_segmento", $dados['id_segmento']);
        $this->db->executa();
        return true;
    }


    public function deletarSegmento($id)
    {
        $this->db->query("DELETE FROM tb_segmento WHERE id_segmento = :id_segmento");
        $this->db->bind("id_segmento", $id);
        $this->db->executa();

        return true;
    }
}
