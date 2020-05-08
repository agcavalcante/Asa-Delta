$(document).ready(function() {
    $.getJSON("../php/buscaNoticia.php", function(data) {
        for (var i = 0; i <= data.length - 1; i++) {
            $("#listarNoticias").append(
                '<div class="post-preview">' +
                '<a id="' + data[i]['id'] + '" class="idNoticia"  href="#">' +
                '<h2 class="post-title">' + data[i]['titulo_noticia'] + '</h2>' +
                '<h3 class="post-subtitle">' + data[i]['subtitulo_noticia'] + '</h3>' +
                '</a>' +
                '</div>' +
                '<hr>'
            );
        }
        $(".idNoticia").on('click', function(event){
            event.preventDefault();
            event.stopPropagation();
            var id = $(this).attr("id");
            var vUrl = "../php/montaPagina.php";
            redirect('../php/montapagina.php?id='+ id);
        });
    });
});


function redirect(__url){
	window.location.href=__url;
}