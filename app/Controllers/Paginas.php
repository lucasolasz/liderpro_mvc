<?php

class Paginas extends Controller
{

    //Construtor do model do Usuário que fará o acesso ao banco
    public function __construct()
    {
        $this->paginaDinamicaModel = $this->model('PaginaDinamica');
        $this->paginasModel = $this->model("Pagina");
        $this->clienteModel = $this->model("Cliente");
        $this->segmentoModel = $this->model("Segmento");
    }

    public function contatos()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'contatos',
            'contatoActive' => 'active',
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('painel/paginas/contatos', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('painel/paginas/contatos_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('painel/paginas/contatos_en', $dados);
        }
    }

    public function clientes()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $visualizaClientes = $this->clienteModel->listarClientes();
        $fotosLogomarca = $this->clienteModel->listarFotosLogomarca();

        $dados = [
            'paginas' => $paginas,
            'visualizaClientes' => $visualizaClientes,
            'tituloBreadcrumb' => 'clientes',
            'clienteActive' => 'active',
            'fotosLogomarca' => $fotosLogomarca
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('painel/paginas/clientes', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('painel/paginas/clientes_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('painel/paginas/clientes_en', $dados);
        }
    }

    public function pesquisaAvancadaClienteAlfabetica()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $letrasAlfabeto = range('A', 'Z');

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => 'ordemAlfabetica',
            'clienteActive' => 'active',
            'letrasAlfabeto' => $letrasAlfabeto
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('painel/paginas/pesquisaAvancadaClienteAlfabetica', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('painel/paginas/pesquisaAvancadaClienteAlfabetica_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('painel/paginas/pesquisaAvancadaClienteAlfabetica_en', $dados);
        }
    }

    public function buscaAjaxTabelaClientesAlfabetica()
    {

        //Retorna o valor da direita caso o valor da esquerda esteja ou não esteja settado (null coalesce operator)
        $dados['letra_alfabeto'] = $_POST['letra_alfabeto'] ?? "";
        $letra_alfabeto = $dados['letra_alfabeto'];
        $resultado = $this->clienteModel->listarClientesComFiltro($letra_alfabeto);

        $dados = [
            'resultado' => $resultado
        ];

        $this->viewSemTopoRodapeParaAjax('painel/paginas/ajax/buscaAjaxTabelaClientesAlfabetica', $dados);
    }

    public function buscaAjaxTabelaClientesAlfabeticaPesquisa()
    {
        $dados['ds_nome_cliente'] = $_POST['ds_nome_cliente'] ?? "";
        if ($dados['ds_nome_cliente'] != "") {
            $ds_nome_cliente = $dados['ds_nome_cliente'];
            $resultado = $this->clienteModel->listarClientesComFiltro($ds_nome_cliente);

            $dados = [
                'resultado' => $resultado
            ];
        } else {
            $dados = [
                'resultado' => null
            ];
        }

        $this->viewSemTopoRodapeParaAjax('painel/paginas/ajax/buscaAjaxTabelaClientesAlfabeticaPesquisa', $dados);
    }

    public function buscaAjaxTabelaClientesSegmentoPesquisa()
    {
        $dados['ds_nome_cliente'] = $_POST['ds_nome_cliente'] ?? "";
        if ($dados['ds_nome_cliente'] != "") {
            $ds_nome_cliente = $dados['ds_nome_cliente'];
            $resultado = $this->clienteModel->listarClientesComFiltro($ds_nome_cliente);

            $dados = [
                'resultado' => $resultado
            ];
        } else {
            $dados = [
                'resultado' => null
            ];
        }

        $this->viewSemTopoRodapeParaAjax('painel/paginas/ajax/buscaAjaxTabelaClientesPorSegmentoPesquisa', $dados);
    }

    public function pesquisaAvancadaClientePorSegmento()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $visualizarSegmentos = $this->segmentoModel->listarSegmentos();

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => 'ordemSegmento',
            'clienteActive' => 'active',
            'segmentos' => $visualizarSegmentos
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('painel/paginas/pesquisaAvancadaClientePorSegmento', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('painel/paginas/pesquisaAvancadaClientePorSegmento_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('painel/paginas/pesquisaAvancadaClientePorSegmento_en', $dados);
        }
    }

    public function buscaAjaxTabelaClientesPorSegmento()
    {

        //Retorna o valor da direita caso o valor da esquerda esteja ou não esteja settado (null coalesce operator)
        $dados['id_segmento'] = $_POST['id_segmento'] ?? "";
        $id_segmento = $dados['id_segmento'];
        $resultado = $this->segmentoModel->listarClienteSegmento($id_segmento);

        $dados = [
            'resultado' => $resultado
        ];

        $this->viewSemTopoRodapeParaAjax('painel/paginas/ajax/buscaAjaxTabelaClientesPorSegmento', $dados);
    }

    public function buscaAjaxAlteraCorSegmentos()
    {

        //Retorna o valor da direita caso o valor da esquerda esteja ou não esteja settado (null coalesce operator)
        $dados['id_segmento'] = $_POST['id_segmento'] ?? "";
        $id_segmento = $dados['id_segmento'];
        $resultado = $this->segmentoModel->listarSegmentos();

        $dados = [
            'resultado' => $resultado,
            'id_segmento' => $id_segmento
        ];

        $this->viewSemTopoRodapeParaAjax('painel/paginas/ajax/buscaAjaxAlteraCorSegmentos', $dados);
    }


    public function buscaAjaxAlteraCorLetraSelecionada()
    {
        $dados['letra_alfabeto'] = $_POST['letra_alfabeto'] ?? "";
        $letra_alfabeto_selecionada = $dados['letra_alfabeto'];
        $letrasAlfabeto = range('A', 'Z');
        $dados = [
            'letra_alfabeto_selecionada' => $letra_alfabeto_selecionada,
            'letrasAlfabeto' => $letrasAlfabeto
        ];

        $this->viewSemTopoRodapeParaAjax('painel/paginas/ajax/buscaAjaxAlteraCorLetraSelecionada', $dados);
    }

    public function lider_pro()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'lider_pro',
            'liderproActive' => 'active',
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('lider_pro/lider_pro', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('lider_pro/lider_pro_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('lider_pro/lider_pro_en', $dados);
        }
    }

    public function valores()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'valores',
            'liderproActive' => 'active',
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('lider_pro/valores', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('lider_pro/valores_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('lider_pro/valores_en', $dados);
        }
    }

    public function parcerias()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'parcerias',
            'liderproActive' => 'active',
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        // if ($_SESSION['linguagem_selecionada'] == "PT") {
        //     $this->view('lider_pro/parcerias', $dados);
        // } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
        //     $this->view('lider_pro/parcerias_es', $dados);
        // } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
        //     $this->view('lider_pro/parcerias_en', $dados);
        // }
        $this->view('lider_pro/parcerias', $dados);
    }

    public function informacoes_gerais()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'informacoes_gerais',
            'liderproActive' => 'active',
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('lider_pro/informacoes_gerais', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('lider_pro/informacoes_gerais_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('lider_pro/informacoes_gerais_en', $dados);
        }
    }

    public function termos_de_uso()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'termos_de_uso',
            'liderproActive' => 'active',
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('lider_pro/termos_de_uso', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('lider_pro/termos_de_uso_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('lider_pro/termos_de_uso_en', $dados);
        }
    }

    public function politica_de_privacidade()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'politica_de_privacidade',
            'liderproActive' => 'active',
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('lider_pro/politica_de_privacidade', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('lider_pro/politica_de_privacidade_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('lider_pro/politica_de_privacidade_en', $dados);
        }
    }

    public function informacoes_legais()
    {
        $paginasLiderPro = $this->paginasModel->listarMenuLiderPro();
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        //Parâmetros enviados para o método do controller VIEW
        $dados = [
            'tituloBreadcrumb' => 'informacoes_legais',
            'liderproActive' => 'active',
            'paginasLiderPro' => $paginasLiderPro,
            'paginas' => $paginas
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('lider_pro/informacoes_legais', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('lider_pro/informacoes_legais_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('lider_pro/informacoes_legais_en', $dados);
        }
    }

    public function pesquisarServicosHome()
    {

        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) {

            if (!$formulario['txtPesquisaHome'] == "") {

                $dados = [
                    'txtPesquisaHome' => $formulario['txtPesquisaHome']
                ];

                $resultadoServicos = $this->paginasModel->pesquisarServicosHome($dados);
                $resultadoAssistencia = $this->paginasModel->pesquisarAssistenciasHome($dados);
                $resultadoLiderPro = $this->paginasModel->pesquisarLiderProHome($dados);
                $resultadoClientes = $this->paginasModel->pesquisarClientesHome($dados);

                $contagemRegistrosTotal = count($resultadoAssistencia) + count($resultadoLiderPro) + count($resultadoClientes) + count($resultadoServicos);

                $dados = [
                    'paginas' => $paginas,
                    'tituloBreadcrumb' => 'HOME',
                    'resultadoServicos' => $resultadoServicos,
                    'resultadoAssistencia' => $resultadoAssistencia,
                    'resultadoLiderPro' => $resultadoLiderPro,
                    'resultadoClientes' => $resultadoClientes,
                    'contagemRegistrosTotal' => $contagemRegistrosTotal,
                    'txtPesquisaHome' => $formulario['txtPesquisaHome']
                ];

                $this->view('painel/paginas/resultado_pesquisa', $dados);
            } else {
                $dados = [
                    'paginas' => $paginas,
                    'tituloBreadcrumb' => 'HOME',
                ];
                $this->view('painel/paginas/home', $dados);
            }
        } else {
            $dados = [
                'paginas' => $paginas,
                'tituloBreadcrumb' => 'HOME',
            ];

            $this->view('painel/paginas/resultado_pesquisa', $dados);
        }
    }

    public function trocaLinguagem()
    {
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        $linguagem = $_GET['linguagem'];

        $_SESSION['linguagem_selecionada'] = $linguagem;

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => 'HOME',
        ];
        if ($_SESSION['linguagem_selecionada'] == 'PT') {
            $this->view('painel/paginas/home', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == 'ES') {
            $this->view('painel/paginas/home_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == 'EN') {
            $this->view('painel/paginas/home_en', $dados);
        }
    }

    public function assistencia_tecnica()
    {
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => 'assistencia_tecnica',
        ];

        if ($_SESSION['linguagem_selecionada'] == "PT") {
            $this->view('painel/paginas/assistencia_tecnica', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
            $this->view('painel/paginas/assistencia_tecnica_es', $dados);
        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
            $this->view('painel/paginas/assistencia_tecnica_en', $dados);
        }
    }
}
