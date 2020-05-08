<?php header("Content-type: text/html; charset=utf-8");
require 	'../../lib/utils.php';
$utils 		= new Utils();
$idNoticia 	= $_GET['id'];
$objConn 	= @mysqli_connect('127.0.0.1','root','', 'sest_signin') or die('Não foi possível conectar ao banco');
mysqli_set_charset($objConn, "utf8");
$data 		= $utils->getNoticeByID($objConn, $idNoticia);
?>
	<?php
		require_once __DIR__ .'/header.php';
	?>
	<title><?= $data["titulo_noticia"] ?></title>
	<?php
		require_once __DIR__ .'/downHeader.php';
	?>
		<h1><?= $data["titulo_noticia"] ?></h1>
		<h2 class="subheading"><?= $data["subtitulo_noticia"] ?></h2>
	<?php
		require_once __DIR__ .'/meioHeader.php';
	?>
	<a href="#"><?= $data["author"] ?></a>
                em <?= $data["date"] ?></span>
	<?php
		require_once __DIR__ .'/meioHeaderDois.php';
	?>
		<p><?= $data["noticia"] ?></p>
	<?php
		require_once __DIR__ .'/finalHeader.php';	
	?>	
<?php
mysqli_close($objConn);
?>