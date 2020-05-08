<?php 

  $titulo = $_POST['titulo_noticia'];
  $subtitulo = $_POST['subtitulo_noticia'];
  $summernote = $_POST['editordata'];
  $author = 'Gabriel';
  $connect = mysqli_connect('127.0.0.1','root','', 'sest_signin');
  $date = getdate();
  $today = $date['mday'].'/'.$date['mon'].'/'.$date['year'];
  
  if($username == "" || $username == null){
    $query = "INSERT INTO noticias VALUES ('', '$titulo','$subtitulo', 'localhost', '$summernote', '$author', '$today')";
    $insert = mysqli_query($connect, $query); 
    if($insert){
      echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../html/cadastro.html'</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='../html/cadastro.html'</script>";
    }
  }
?>