<?php
	$connect = mysqli_connect('127.0.0.1','root','', 'sest_signin');
	$query_select = "SELECT noticia FROM noticias";

	if($select = mysqli_query($connect, $query_select)){
    while ($row = $select->fetch_object()) {
      foreach($row as $key => $col){
        $col_array[$key] = utf8_encode($col);
      }
      $row_array[] = $col_array;
    }
    echo json_encode($row_array);
  }
  mysqli_close($connect); 
?>