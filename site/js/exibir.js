$(document).ready(function(){
    $.getJSON( "exibeNoticia.php", function(data) {
    	for (var i = 0; i <= data.length - 1; i++){
       		$("#2").append(
       			data[i]['noticia']
       		);
    	}
    });
});