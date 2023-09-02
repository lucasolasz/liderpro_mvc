<?php 

class PaginasDinamicas extends Controller
{
    public function __construct() {
        $this->paginaDinamicaModel = $this->model('PaginaDinamica');
    }
    
        
    public function index() { 
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $_SESSION['linguagem_selecionada'] = isset($_SESSION['linguagem_selecionada']) ? $_SESSION['linguagem_selecionada'] : 'PT';
        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => 'HOME' ,
        ];

        $this->view('painel/paginas/home', $dados);
    }
    
        
    public function assistencia_tecnica() { 
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => 'assistencia_tecnica' ,
        ];

        $this->view('painel/paginas/assistencia_tecnica', $dados);
    }
    
        
    public function gestao_informatica() { 

        $idPaginaSelecionada = 78;
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $paginaSelecionada = $this->paginaDinamicaModel->listarPaginasPeloId($idPaginaSelecionada);
        $dolarFotoBanner = $this->paginaDinamicaModel->listarFotoBannerPeloId($idPaginaSelecionada);
        $dolarFotoPergunta = $this->paginaDinamicaModel->listarFotoPerguntaPeloId($idPaginaSelecionada);
        $dolarFotoServico = $this->paginaDinamicaModel->listarFotoServicoPeloId($idPaginaSelecionada);
        $dolarFotoTexto = $this->paginaDinamicaModel->listarFotoTextoPeloId($idPaginaSelecionada);

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => 'gestao_informatica' ,
            'paginaSelecionada' => $paginaSelecionada,
            'dolarFotoBanner' => $dolarFotoBanner,
            'dolarFotoPergunta' => $dolarFotoPergunta,
            'dolarFotoServico' => $dolarFotoServico,
            'dolarFotoTexto' => $dolarFotoTexto
        ];

        $this->view('painel/paginasDinamicasGeradas/gestao_informatica', $dados);
    }
        
    public function cabeamento_estruturado() { 

        $idPaginaSelecionada = 79;
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $paginaSelecionada = $this->paginaDinamicaModel->listarPaginasPeloId($idPaginaSelecionada);
        $dolarFotoBanner = $this->paginaDinamicaModel->listarFotoBannerPeloId($idPaginaSelecionada);
        $dolarFotoPergunta = $this->paginaDinamicaModel->listarFotoPerguntaPeloId($idPaginaSelecionada);
        $dolarFotoServico = $this->paginaDinamicaModel->listarFotoServicoPeloId($idPaginaSelecionada);
        $dolarFotoTexto = $this->paginaDinamicaModel->listarFotoTextoPeloId($idPaginaSelecionada);

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => 'cabeamento_estruturado' ,
            'paginaSelecionada' => $paginaSelecionada,
            'dolarFotoBanner' => $dolarFotoBanner,
            'dolarFotoPergunta' => $dolarFotoPergunta,
            'dolarFotoServico' => $dolarFotoServico,
            'dolarFotoTexto' => $dolarFotoTexto
        ];

        $this->view('painel/paginasDinamicasGeradas/cabeamento_estruturado', $dados);
    }
        
    public function solucoes_de_nobreaks() { 

        $idPaginaSelecionada = 88;
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $paginaSelecionada = $this->paginaDinamicaModel->listarPaginasPeloId($idPaginaSelecionada);
        $dolarFotoBanner = $this->paginaDinamicaModel->listarFotoBannerPeloId($idPaginaSelecionada);
        $dolarFotoPergunta = $this->paginaDinamicaModel->listarFotoPerguntaPeloId($idPaginaSelecionada);
        $dolarFotoServico = $this->paginaDinamicaModel->listarFotoServicoPeloId($idPaginaSelecionada);
        $dolarFotoTexto = $this->paginaDinamicaModel->listarFotoTextoPeloId($idPaginaSelecionada);

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => 'solucoes_de_nobreaks' ,
            'paginaSelecionada' => $paginaSelecionada,
            'dolarFotoBanner' => $dolarFotoBanner,
            'dolarFotoPergunta' => $dolarFotoPergunta,
            'dolarFotoServico' => $dolarFotoServico,
            'dolarFotoTexto' => $dolarFotoTexto
        ];

        $this->view('painel/paginasDinamicasGeradas/solucoes_de_nobreaks', $dados);
    }
        
    public function solucoes_em_nuvem() { 

        $idPaginaSelecionada = 89;
        $paginas = $this->paginaDinamicaModel->listarPaginasAtivas();
        $paginaSelecionada = $this->paginaDinamicaModel->listarPaginasPeloId($idPaginaSelecionada);
        $dolarFotoBanner = $this->paginaDinamicaModel->listarFotoBannerPeloId($idPaginaSelecionada);
        $dolarFotoPergunta = $this->paginaDinamicaModel->listarFotoPerguntaPeloId($idPaginaSelecionada);
        $dolarFotoServico = $this->paginaDinamicaModel->listarFotoServicoPeloId($idPaginaSelecionada);
        $dolarFotoTexto = $this->paginaDinamicaModel->listarFotoTextoPeloId($idPaginaSelecionada);

        $dados = [
            'paginas' => $paginas,
            'tituloBreadcrumb' => 'solucoes_em_nuvem' ,
            'paginaSelecionada' => $paginaSelecionada,
            'dolarFotoBanner' => $dolarFotoBanner,
            'dolarFotoPergunta' => $dolarFotoPergunta,
            'dolarFotoServico' => $dolarFotoServico,
            'dolarFotoTexto' => $dolarFotoTexto
        ];

        $this->view('painel/paginasDinamicasGeradas/solucoes_em_nuvem', $dados);
    }
}