<?php
spl_autoload_register(
  function ($nomeDaClasse) {
    require_once __DIR__.'/../models/'.$nomeDaClasse.'.php';
  }
);
session_start();
if(isset($_GET['tema'])){
	$usuario = new Usuario();
    $daoUsuario = new UsuarioDAO();
	$usuario->setIdUsuario($_SESSION['id_usuario']);
	$usuario->setTemaPerfil($_GET['tema']);
	$daoUsuario->atualizaTema($usuario);

	$_SESSION['tema'] = $_GET['tema'];
	// header("location: ../index.php?req=".$_GET['req']);
	header("location: http://".$_SESSION['urlAtual']);
}
?>