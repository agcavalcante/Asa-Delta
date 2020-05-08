$(document).onLoad(function(){
$(".idNoticia").click(function() {
            event.preventDefault();
            var id = $(this).attr("id");
            $.ajax({
                    method: "POST",
                    url: "montaPagina.php",
                    data: {
                        variavel: id
                    }
                })
            window.location.href = "../html/post.html";

        });
});
