<?php

$daoForum = new ForumDAO();
$daoCategoria = new CategoriaDAO();
$categoria = $daoCategoria->getCategoria($_GET['idCategoria']);
$listaForum = $daoForum->getLista($_GET['idCategoria']);

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


require_once __DIR__.'/../views/categorias.php';
?>