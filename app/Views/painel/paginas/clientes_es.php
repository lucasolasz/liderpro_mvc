<?php
$infoImagem =  array();
foreach ($dados['fotosLogomarca'] as $fotosLogomarca) {
    $caminho = URL . "/uploads/logomarcas/" . $fotosLogomarca->nm_arquivo;
    $blank = "";
    $url = $fotosLogomarca->ds_url;
    if ($fotosLogomarca->ds_url != "") {
        $blank = "_blank";
    }
    $infoImagem[] = ['caminho' => $caminho, 'url' => $url, 'blank' => $blank];
}
?>

<div class="container mt-5">
    <div class="row ">
        <div class="col">
            <p class="lp-paragrafo">Algunos <b>CLIENTES</b> a los que tenemos la oportunidad de servir</p>
        </div>

        <div class="col d-flex  justify-content-end">
            <a class="lp-remove-decoration" href="<?= URL . '/Paginas/pesquisaAvancadaClienteAlfabetica' ?>">Búsqueda avanzada de clientes</a>
        </div>
    </div>

</div>

<div class="container lp-container-logos p-5 mb-5">
    <div class="row" id="image-grid">
        <p style="color: gray;">Elige un segmento</p>
    </div>
</div>

<script>
    $(document).ready(function() {
        var images = <?php echo json_encode($infoImagem); ?>; // Obtenha as informações das imagens do banco de dados

        function shuffleArray(array) {
            for (var i = array.length - 1; i > 0; i--) {
                var j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
            return array;
        }

        function showImages() {
            var shuffledImages = shuffleArray(images.slice(0, 12)); // Embaralha e seleciona as primeiras 16 imagens
            var html = '';

            for (var i = 0; i < shuffledImages.length; i++) {
                var image = shuffledImages[i];
                html += '<div class="col-md-4 d-flex align-items-center justify-content-center p-3">' +
                    '<a href="' + image['url'] + '" target="' + image['blank'] + '"><img src="' + image['caminho'] + '" class="img-fluid lp-logos-clientes" id="logoCliente" alt="' + image['descricao'] + '"></a>' +
                    '</div>';
            }

            $('#image-grid').html(html);
        }

        showImages(); // Exibe as imagens inicialmente

        setInterval(function() {
            showImages(); // Exibe as imagens a cada 3 segundos
        }, 3000);

    });
</script>