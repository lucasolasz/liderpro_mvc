<?php

class GerarPagina
{

    public static function gerarPaginaDinamica($paginaDinamica)
    {

        $dolar = "$";
        $este = "this";
        $setaSimples = "->";
        //$this
        $dolarThis = $dolar . $este;
        //$this->
        $dolarThisMaisSetaSimples = $dolarThis . $setaSimples;
        //$paginas
        $dolarPaginas = $dolar . "paginas";
        //$paginaSelecionada
        $dolarPaginaSelecionada = $dolar . "paginaSelecionada";
        //$dolarFotoBanner
        $dolarFotoBanner = $dolar . "dolarFotoBanner";
        //$dolarFotoPergunta
        $dolarFotoPergunta = $dolar . "dolarFotoPergunta";
        //$dolarFotoServico
        $dolarFotoServico = $dolar . "dolarFotoServico";
        //$dolarFotoServico
        $dolarFotoTexto = $dolar . "dolarFotoTexto";
        //$dados
        $dolarDados = $dolar . "dados";
        //$this->view
        $esteView = $dolarThisMaisSetaSimples . "view";
        //$id
        $dolarId = $dolar . "idPaginaSelecionada";

        $novoMetodoCompleto = "";

        foreach ($paginaDinamica as $paginas) {

            $nomeArquivoEMetodoDinamico = GeraNomeArquivoComUnderline::gerar(RemoveAcentosString::removeAcentoEDeixaMinusculaString($paginas->ds_pagina));

            $arquivoDestino = APP . "\\Controllers\\PaginasDinamicas.php";

            $modelEscolhido = "PaginaDinamica";
            $stringModel = "model('" . $modelEscolhido . "');";
            $stringCompletaModel = $dolarThisMaisSetaSimples . "paginaDinamicaModel = " . $dolarThisMaisSetaSimples . $stringModel;
            $variavelModelPaginaIdCompleto = $dolarThisMaisSetaSimples . "paginaDinamicaModel" . $setaSimples . "listarPaginasPeloId($dolarId);";
            $variavelModelFotoBannerIdCompleto = $dolarThisMaisSetaSimples . "paginaDinamicaModel" . $setaSimples . "listarFotoBannerPeloId($dolarId);";
            $variavelModelFotoPerguntaIdCompleto = $dolarThisMaisSetaSimples . "paginaDinamicaModel" . $setaSimples . "listarFotoPerguntaPeloId($dolarId);";
            $variavelModelFotoServicoIdCompleto = $dolarThisMaisSetaSimples . "paginaDinamicaModel" . $setaSimples . "listarFotoServicoPeloId($dolarId);";
            $variavelModelFotoTextoIdCompleto = $dolarThisMaisSetaSimples . "paginaDinamicaModel" . $setaSimples . "listarFotoTextoPeloId($dolarId);";
            $variavelModelTodasAsPaginas = $dolarThisMaisSetaSimples . "paginaDinamicaModel" . $setaSimples . "listarPaginasAtivas();";

            //aqui eu itero o que vem do banco
            $nomeNovaPagina = $nomeArquivoEMetodoDinamico;

            $novoMetodoCompleto .= "
        
    public function $nomeNovaPagina() { 

        $dolarId = $paginas->id_pagina;
        $dolarPaginas = $variavelModelTodasAsPaginas
        $dolarPaginaSelecionada = $variavelModelPaginaIdCompleto
        $dolarFotoBanner = $variavelModelFotoBannerIdCompleto
        $dolarFotoPergunta = $variavelModelFotoPerguntaIdCompleto
        $dolarFotoServico = $variavelModelFotoServicoIdCompleto
        $dolarFotoTexto = $variavelModelFotoTextoIdCompleto

        $dolarDados = [
            'paginas' => $dolarPaginas,
            'tituloBreadcrumb' => '$nomeNovaPagina' ,
            'paginaSelecionada' => $dolarPaginaSelecionada,
            'dolarFotoBanner' => $dolarFotoBanner,
            'dolarFotoPergunta' => $dolarFotoPergunta,
            'dolarFotoServico' => $dolarFotoServico,
            'dolarFotoTexto' => $dolarFotoTexto
        ];

        $esteView('painel/paginasDinamicasGeradas/$nomeNovaPagina', $dolarDados);
    }";
            //Cria novo arquivo de view baseado no template
            $urlArquivoTemplate = APP . '\\Views\\painel\\templatePagina.php';
            $urlNovaPagina = APP . '\\Views\\painel\\paginasDinamicasGeradas\\' . $nomeNovaPagina . '.php';

            if (!file_exists($urlNovaPagina)) {
                copy($urlArquivoTemplate, $urlNovaPagina);
            }
        }

        $metodoIndexCompleto = "
        
    public function index() { 
        $dolarPaginas = $variavelModelTodasAsPaginas

        $dolarDados = [
            'paginas' => $dolarPaginas,
            'tituloBreadcrumb' => 'HOME' ,
        ];

        $esteView('painel/paginas/home', $dolarDados);
    }";

    $metodoAssistenciaTecnicaCompleto = "
        
    public function assistencia_tecnica() { 
        $dolarPaginas = $variavelModelTodasAsPaginas

        $dolarDados = [
            'paginas' => $dolarPaginas,
            'tituloBreadcrumb' => 'assistencia_tecnica' ,
        ];

        $esteView('painel/paginas/assistencia_tecnica', $dolarDados);
    }";
        

        $conteudoQueSeraImpressoNoArquivoDestino = "<?php 

class PaginasDinamicas extends Controller
{
    public function __construct() {
        $stringCompletaModel
    }
    $metodoIndexCompleto
    $metodoAssistenciaTecnicaCompleto
    $novoMetodoCompleto
}";

        file_put_contents($arquivoDestino, $conteudoQueSeraImpressoNoArquivoDestino);
    }

}
