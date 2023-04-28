<?php

class PaginaDinamica
{


    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    //Retorna registros da tabela menu
    public function listarPaginas()
    {
        $this->db->query("SELECT * FROM tb_pagina");

        return $this->db->resultados();
    }


    //Retorna registros da tabela menu
    public function listarPaginasPeloId($id)
    {
        $this->db->query("SELECT * FROM tb_pagina WHERE id_pagina = :id_pagina");

        $this->db->bind("id_pagina", $id);

        return $this->db->resultados();
    }


    public function listarFotoBannerPeloId($id)
    {
        $this->db->query(
            "SELECT * FROM tb_pagina tp
                        JOIN tb_foto_banner fbn on fbn.fk_pagina = tp.id_pagina
                        WHERE id_pagina = :id_pagina"
        );
        $this->db->bind("id_pagina", $id);

        return $this->db->resultados();
    }

    public function listarFotoPerguntaPeloId($id)
    {
        $this->db->query(
            "SELECT * FROM tb_pagina tp
                        JOIN tb_foto_pergunta tfp on tfp.fk_pagina = tp.id_pagina
                        WHERE id_pagina = :id_pagina"
        );
        $this->db->bind("id_pagina", $id);

        return $this->db->resultados();
    }

    
    public function listarFotoServicoPeloId($id)
    {
        $this->db->query(
            "SELECT * FROM tb_pagina tp
                        JOIN tb_foto_servico tse on tse.fk_pagina = tp.id_pagina
                        WHERE id_pagina = :id_pagina"
        );
        $this->db->bind("id_pagina", $id);

        return $this->db->resultados();
    }

    public function listarFotoTextoPeloId($id)
    {
        $this->db->query(
            "SELECT * FROM tb_pagina tp
                        join tb_foto_texto ftx on ftx.fk_pagina = tp.id_pagina
                        WHERE id_pagina = :id_pagina"
        );
        $this->db->bind("id_pagina", $id);

        return $this->db->resultados();
    }
}
