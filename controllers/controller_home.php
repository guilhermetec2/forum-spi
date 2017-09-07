<?php
$daoForum = new ForumDAO();
$daoTopico = new TopicoDAO();
$listaTopicos = $daoTopico->getUltimosTopicos();
$listaForum1 = $daoForum->getLista(1);
$listaForum2 = $daoForum->getLista(2);
$listaForum3 = $daoForum->getLista(3);
$listaForum4 = $daoForum->getLista(4);
$listaForum5 = $daoForum->getLista(5);
$listaForum6 = $daoForum->getLista(6);

if (isset($_SESSION['usuario'])) {
	$usuario = $_SESSION['usuario'];
	$menuUser = 'w3-show';
	$menuEntrar = 'w3-hide';
	$menuCadastro = 'w3-hide';
}
else{
	$usuario = 'Visitante';
	$menuUser = 'w3-hide';
	$menuEntrar = 'w3-show';
	$menuCadastro = 'w3-show';	
}

require_once __DIR__.'/../views/home.php';


?>