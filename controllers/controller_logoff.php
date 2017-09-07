<?php
session_start();
$urlAtual = $_SESSION['urlAtual'];
unset($_SESSION);
session_destroy();
if($_GET['req'] == 'controller_meusTopicos' || $_GET['req'] == 'controller_perfil'){
	header("location: ../index.php");
}
else{
	header("location: http://".$urlAtual);
}


?>