$(document).ready(function(){
  $.getJSON( "montaPagina.php", function(data) {
   for (var i = 0; i <= data.length - 1; i++){
       		//console.log(data[i]['titulo_noticia']);	
       		//console.log(data[i]['subtitulo_noticia']);	
       		$("#2").append(
            data[i]['noticia']	
            );
         }
       });
});
