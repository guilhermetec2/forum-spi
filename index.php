<?php
spl_autoload_register(
  function ($nomeDaClasse) {
    require_once __DIR__.'/models/'.$nomeDaClasse.'.php';
  }
);
session_start();
if (isset($_GET['req'])) {
	$requisicao = $_GET['req'];
}
else {
	$requisicao = 'controller_home';
}

if(isset($_SESSION['tema'])){
	$tema = $_SESSION['tema'];
}
else{
	$tema = 'w3-theme-blue-grey.css';
}

if(isset($_SESSION['foto'])){
	$fotoPerfil = $_SESSION['foto']; 
}else{
	$fotoPerfil = 'padrao.png';
}

//pego url para utilizar no redirecionamento do login e logoff
$_SESSION['urlAtual'] =  $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];	






// invoco o controlador
require_once __DIR__.'/controllers/'.$requisicao.'.php';

?>