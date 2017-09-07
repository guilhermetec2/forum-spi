<?php
if(isset($_GET['acao']) ){
	
	if($_GET['acao'] == 'listar'){
		$daoUsuario = new UsuarioDAO();
		$objUsuario = $daoUsuario->getUsuario($_SESSION['id_usuario']);	
	}

	if($_GET['acao'] == 'atualiza'){
	  $usuario = new Usuario();
      $daoUsuario = new UsuarioDAO();
	  $usuario->setIdUsuario($_SESSION['id_usuario']);
	  $usuario->setTipoUsuario($_POST['tipo']);
	  $usuario->setNomeUsuario($_POST['nome']);
	  $usuario->setMatricula($_POST['matricula']);
	  $usuario->setSenha($_POST['senha']);

	  $daoUsuario->atualiza($usuario);

	  header("Location: index.php?req=controller_perfil&acao=listar");

	}

}

 if(isset($_FILES['fileUpload']))
   {
      $name = basename($_FILES['fileUpload']['name']); //Pegando nome do arquivo
      $dir = "img/fotos-perfil/"; //Diretório para uploads

      $usuario = new Usuario();
      $daoUsuario = new UsuarioDAO();
	  $usuario->setIdUsuario($_SESSION['id_usuario']);
	  $usuario->setFotoPerfil($name);

	  $daoUsuario->atualizaFoto($usuario);	 

      move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $dir.$name); //Fazer upload do arquivo

      $_SESSION['foto'] = $usuario->getFotoPerfil();

      header("Location: index.php?req=controller_perfil&acao=listar");
   }

if (isset($_SESSION['usuario'])) {
	$usuario = $_SESSION['usuario'];
	$menuUser = 'w3-show';
	$menuEntrar = 'w3-hide';
	$menuCadastro = 'w3-hide';
	$alert = 'w3-hide';
}
else{
	$usuario = 'Visitante';
	$menuUser = 'w3-hide';
	$menuEntrar = 'w3-show';
	$menuCadastro = 'w3-show';	
}


require_once __DIR__.'/../views/perfil.php';


?>