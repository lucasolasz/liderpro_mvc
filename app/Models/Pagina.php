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

        $ultimoId = $this->db->ultimoIdInserido();

        if ($this->db->executa()) {
            return true;
        } else {
            return false;
        }

    }
}
