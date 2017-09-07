<?php


if(isset($_GET['acao']) ){
	// Puxa lista de posts do banco
	if($_GET['acao'] == 'listar'){
		$daoPost = new PostDAO();
		$daoTopico = new TopicoDAO();
		$topico = $daoTopico->getTopico($_GET['idTopico']);
		$listaPost = $daoPost->getLista($_GET['idTopico']);
	}

	// Cadastra novo post 
	if($_GET['acao'] == 'cadastrar'){
		$daoPost = new PostDAO();
		$post = new Post();

		$post->setTexto($_POST['texto']);
		$post->setIdTopico($_GET['idTopico']);		
		$post->setIdUsuario($_SESSION['id_usuario']);
		if($_GET['idCriadorPost'] == $_SESSION['id_usuario']){
			$post->setTipo('pergunta');
		}else{
			$post->setTipo('resposta');
		}

		$daoPost->insere($post);
		header("location: index.php?req=controller_topicos&acao=listar&idTopico=".$_GET['idTopico']);
	}
	
}

if (isset($_SESSION['usuario'])) {
	$usuario = $_SESSION['usuario'];
	$menuUser = 'w3-show';
	$menuEntrar = 'w3-hide';
	$menuCadastro = 'w3-hide';
	$cardLogin = 'w3-hide';
	$posts = 'w3-show';
	$cardComent = 'w3-show';
}
else{
	$usuario = 'Visitante';
	$menuUser = 'w3-hide';
	$menuEntrar = 'w3-show';
	$menuCadastro = 'w3-show';
	$posts = 'w3-show';	
	$cardComent = 'w3-hide';
}

require_once __DIR__.'/../views/topicos.php';


?>