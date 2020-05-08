<?php 
  header("Content-type: text/html; charset=utf-8");
  $connect = mysqli_connect('127.0.0.1','root','', 'sest_signin');
  mysqli_set_charset($connect, "utf8");
  $query_select = "SELECT id, titulo_noticia, subtitulo_noticia, link_noticia FROM noticias";

  if($select = mysqli_query($connect, $query_select)){
    while ($row = $select->fetch_object()) {
      foreach($row as $key => $col){
        $col_array[$key] = $col;
      }
      $row_array[] = $col_array;
    }
    echo json_encode($row_array);
  }
  mysqli_close($connect);    
?>
