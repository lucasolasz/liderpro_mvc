<?php

class Controller
{
    public function model($model)
    {
        require_once '../app/Models/' . $model . '.php';
        return new $model;
    }

    public function view($view, $dados = [])
    {
        $arquivo = ('../app/Views/' . $view . '.php');
        include APP . '/Views/topo.php';

        if (file_exists($arquivo)) {
            require_once $arquivo;
        } else {
            die('O arquivo de view não existe!');
        }
        if ($_SESSION['linguagem_selecionada'] == "PT") {
            include APP . '/Views/rodape.php';
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            include APP . '/Views/rodape_es.php';
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            include APP . '/Views/rodape_en.php';
        }
    }

    public function viewSemTopoRodapeParaAjax($view, $dados = [])
    {
        $arquivo = ('../app/Views/' . $view . '.php');

        if (file_exists($arquivo)) {
            require_once $arquivo;
        } else {
            die('O arquivo de view não existe!');
        }
    }
}
