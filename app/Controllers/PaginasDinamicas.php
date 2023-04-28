<?php 

class PaginasDinamicas extends Controller
{
    public function __construct() {
        $this->paginaDinamicaModel = $this->model('PaginaDinamica');
    }
    
        
    public function gestao_informatica() { 

        $idPaginaSelecionada = 78;
        $paginaSelecionada = $this->paginaDinamicaModel->listarPaginasPeloId($idPaginaSelecionada);
        $dolarFotoBanner = $this->paginaDinamicaModel->listarFotoBannerPeloId($idPaginaSelecionada);
        $dolarFotoPergunta = $this->paginaDinamicaModel->listarFotoPerguntaPeloId($idPaginaSelecionada);
        $dolarFotoServico = $this->paginaDinamicaModel->listarFotoServicoPeloId($idPaginaSelecionada);
        $dolarFotoTexto = $this->paginaDinamicaModel->listarFotoTextoPeloId($idPaginaSelecionada);

        $dados = [
            'tituloBreadCrumb' => 'gestao_informatica' ,
            'paginaSelecionada' => $paginaSelecionada,
            'dolarFotoBanner' => $dolarFotoBanner,
            'dolarFotoPergunta' => $dolarFotoPergunta,
            'dolarFotoServico' => $dolarFotoServico,
            'dolarFotoTexto' => $dolarFotoTexto
        ];

        $this->view('paginas/templatePagina', $dados);
    }
}