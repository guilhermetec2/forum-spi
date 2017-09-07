<?php
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

if(isset($_POST['cadastrar'])){
	$valueNome = $_POST['nome'];
	$valueMatricula = $_POST['matricula'];
}
else{
	$valueNome = '';
	$valueMatricula = '';
}

if(isset($_POST['cadastrar'])){
	$senhaOK = true;
	// Inserir o novo usuário no banco
	if(strcmp($_POST['senha'],$_POST['confSenha'] ) !==  0){
		$msg = 'As senhas não coincidem!';
		$alert = 'w3-show';
		$senhaOK = false;
	}

	if($senhaOK){
		$dao = new UsuarioDAO();
		
		if($dao->verificaUsuario($_POST['nome']) > 0){
			
			$msg = 'O usuario '.$_POST['nome'].' já existe!';
			$alert = 'w3-show';
		}
		else{
			$dao = new UsuarioDAO();
			$usuario = new Usuario();
			$usuario->setNomeUsuario($_POST['nome']);
			$usuario->setTipoUsuario($_POST['tipo']);
			$usuario->setMatricula($_POST['matricula']);
			$usuario->setNivel('membro');
			$usuario->setSenha($_POST['senha']);
			$usuario->setFotoPerfil('padrao.png');
			$usuario->setTemaPerfil('w3-theme-blue-grey.css');
			$_SESSION['id_usuario'] = $dao->insere($usuario);

			$_SESSION['usuario'] = $usuario->getNomeUsuario();
			$_SESSION['tema'] = $usuario->getTemaPerfil();
			$_SESSION['foto'] = $usuario->getFotoPerfil();


			$_SESSION['usuario'] = $_POST['nome'];
			header("location: index.php");
		}
	}
	

	
}

require_once __DIR__.'/../views/cadastro.php';


?>