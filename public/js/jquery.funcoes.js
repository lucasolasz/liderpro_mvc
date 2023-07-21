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
    var table = new DataTable('#tableDataTablePtBr', {
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/pt-BR.json',
        },
    });
});



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