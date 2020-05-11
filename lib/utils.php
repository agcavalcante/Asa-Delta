<?php
class Utils{
	public function getNoticeByID($__conn, $__id){
		$arr = [];
		$SQL = "SELECT titulo_noticia, subtitulo_noticia, noticia, author, `date`, postImage FROM noticias WHERE id = $__id LIMIT 1";
		$query = mysqli_query($__conn, $SQL) or die('Não foi possível executar a consulta');

		if($query){
			return $query->fetch_assoc();
		}
		return $arr;
	}
}
?>