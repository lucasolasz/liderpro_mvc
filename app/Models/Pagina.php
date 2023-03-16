<?php

class Pagina
{

    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }
    
    //Retorna registros da tabela menu
    public function listarMenu(){
        $this->db->query("SELECT * FROM tb_menu");
        
        return $this->db->resultados();
    }

}
