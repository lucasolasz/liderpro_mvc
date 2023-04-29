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

            $nomeArquivoEMetodoDinamico = GeraNomeArquivoComUnderline::geraNomeArquivoComUnderline(RemoveAcentosString::removeAcentoEDeixaMinusculaString($paginas->ds_pagina));

            $arquivoDestino = APP . "\\Controllers\\PaginasDinamicas.php";

            $modelEscolhido = "PaginaDinamica";
            $stringModel = "model('" . $modelEscolhido . "');";
            $stringCompletaModel = $dolarThisMaisSetaSimples . "paginaDinamicaModel = " . $dolarThisMaisSetaSimples . $stringModel;
            $variavelModelPaginaIdCompleto = $dolarThisMaisSetaSimples . "paginaDinamicaModel" . $setaSimples . "listarPaginasPeloId($dolarId);";
            $variavelModelFotoBannerIdCompleto = $dolarThisMaisSetaSimples . "paginaDinamicaModel" . $setaSimples . "listarFotoBannerPeloId($dolarId);";
            $variavelModelFotoPerguntaIdCompleto = $dolarThisMaisSetaSimples . "paginaDinamicaModel" . $setaSimples . "listarFotoPerguntaPeloId($dolarId);";
            $variavelModelFotoServicoIdCompleto = $dolarThisMaisSetaSimples . "paginaDinamicaModel" . $setaSimples . "listarFotoServicoPeloId($dolarId);";
            $variavelModelFotoTextoIdCompleto = $dolarThisMaisSetaSimples . "paginaDinamicaModel" . $setaSimples . "listarFotoTextoPeloId($dolarId);";


            //aqui eu itero o que vem do banco
            $nomeNovaPagina = $nomeArquivoEMetodoDinamico;

            $novoMetodoCompleto .= "
        
    public function $nomeNovaPagina() { 

        $dolarId = $paginas->id_pagina;
        $dolarPaginaSelecionada = $variavelModelPaginaIdCompleto
        $dolarFotoBanner = $variavelModelFotoBannerIdCompleto
        $dolarFotoPergunta = $variavelModelFotoPerguntaIdCompleto
        $dolarFotoServico = $variavelModelFotoServicoIdCompleto
        $dolarFotoTexto = $variavelModelFotoTextoIdCompleto

        $dolarDados = [
            'tituloBreadcrumb' => '$nomeNovaPagina' ,
            'paginaSelecionada' => $dolarPaginaSelecionada,
            'dolarFotoBanner' => $dolarFotoBanner,
            'dolarFotoPergunta' => $dolarFotoPergunta,
            'dolarFotoServico' => $dolarFotoServico,
            'dolarFotoTexto' => $dolarFotoTexto
        ];

        $esteView('paginas/$nomeNovaPagina', $dolarDados);
    }";
            //Cria novo arquivo de view baseado no template
            $urlArquivoTemplate = APP . '\\Views\\paginas\\templatePagina.php';
            $urlNovaPagina = APP . '\\Views\\paginas\\' . $nomeNovaPagina . '.php';

            if (!file_exists($urlNovaPagina)) {
                copy($urlArquivoTemplate, $urlNovaPagina);
            }
        }

        $conteudoQueSeraImpressoNoArquivoDestino = "<?php 

class PaginasDinamicas extends Controller
{
    public function __construct() {
        $stringCompletaModel
    }
    $novoMetodoCompleto
}";

        file_put_contents($arquivoDestino, $conteudoQueSeraImpressoNoArquivoDestino);
    }

}
