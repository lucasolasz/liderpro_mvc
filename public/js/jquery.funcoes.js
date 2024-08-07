// // Get the element with id="defaultOpen" and click on it
// document.getElementById("defaultOpen").click();

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent-lp");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

//Inicialização do dataTables
$(document).ready(function () {

    $('#tableDataTablePtBr').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.13.5/i18n/pt-BR.json"
        }, "columnDefs": [{
            "targets": 0,
            "searchable": false
        }],
        "lengthMenu": [5, 10, 25]
    });

    $(".lp-close-pesquisa").click(function () {
        fecharInputPesquisa();
    });

    $("#icon-lupa_menu").click(function () {
        $("#pesquisarHome").addClass('zIndexPesquisa');
        $("#icon-lupa_menu").addClass('zIndexPesquisa');

        $('#overlayPesquisa').removeClass('hiddenPesquisa');
        $('#carrousel-prev').addClass('zIndexCarouselPesquisa');
        $('#carrousel-next').addClass('zIndexCarouselPesquisa');
        $('#carouselExampleIndicators').addClass('zIndexCarouselPesquisa');

        $("#pesquisarHome").show("slow");
    });


    $("#txtPesquisaHome").on("blur", function () {
        fecharInputPesquisa();
    });

    $("#overlayPesquisa").on("click", function() {
        fecharInputPesquisa();
    })


    $("#linkpesquisaRodape").click(function(){
        $('html, body').animate({scrollTop: 0}, 'slow');
        $("#icon-lupa_menu").click();
        return false;
    });
});

function fecharInputPesquisa() {
    $(".togglesearch").hide();
    $('#overlayPesquisa').addClass('hiddenPesquisa');
    $('#carrousel-prev').removeClass('zIndexCarouselPesquisa');
    $('#carrousel-next').removeClass('zIndexCarouselPesquisa');
    $('#carouselExampleIndicators').removeClass('zIndexCarouselPesquisa');
    $("#pesquisarHome").hide("slow");
}

function criticaCampoFicaVermelho(idDivMensagem, mensagem, idCampoInput, idCampoLabel) {

    $("#" + idDivMensagem).html("");
    $("#" + idDivMensagem).html("<p style='color: red'>" + mensagem + "</p>");
    $("#" + idCampoInput).addClass("is-invalid");
    $("#" + idCampoLabel).css({
        "color": "#F00"
    });
    $('html, body').animate({
        scrollTop: 0
    }, 'slow');
}

function removeCriticaCampoVermelho(idDivMensagem, idCampoInput, idCampoLabel) {
    $("#" + idDivMensagem).html("");
    $("#" + idCampoInput).removeClass("is-invalid");
    $("#" + idCampoLabel).css({
        "color": "black"
    });
}