<?php
spl_autoload_register(
  function ($nomeDaClasse) {
    require_once __DIR__.'/../models/'.$nomeDaClasse.'.php';
  }
);
session_start();

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
	$alert = 'w3-hide';		
}

if(isset($_POST['usuario'])){
	$senhaOK = true;
	$nomeOK = false;
	$dao = new UsuarioDAO();
	$lista = $dao->getLista();
	foreach ($lista as $user) {
		if(strcmp($user->getNomeUsuario(),$_POST['usuario'] ) ==  0){
			$nomeOK = true;
			if(strcmp($user->getSenha(),$_POST['senha'] ) ==  0){
				$_SESSION['usuario'] = $_POST['usuario'];
				$_SESSION['id_usuario'] = $user->getIdUsuario();
				$_SESSION['tema'] = $user->getTemaPerfil();
				$_SESSION['foto'] = $user->getFotoPerfil();
 				header("location: http://".$_SESSION['urlAtual']);
			}else{
				$alert = 'w3-show';
				$msg   = 'Senha incorreta!';
				$senhaOK = false;
				break;
			}
		}			
		
	}

	if(!$nomeOK){ 
		$msg = 'Nome de usuario não cadastrado!';
		$alert = 'w3-show';
	}
}
require_once __DIR__.'/../views/loginFail.php';
?>