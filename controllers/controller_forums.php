<?php


if(isset($_GET['acao']) ){
	// Puxa lista de topicos do banco
	if($_GET['acao'] == 'listar'){
		$daoForum = new ForumDAO();
		$forum = $daoForum->getForum($_GET['idForum']);
		$daoTopico = new TopicoDAO($forum->getIdForum());
		$listaTopico = $daoTopico->getLista($_GET['idForum']);
	}

	// Cadastra novo topico e um novo post ao mesmo tempo
	if($_GET['acao'] == 'cadastrar'){
		$daoTopico = new TopicoDAO();
		$topico = new Topico();
		$daoPost = new PostDAO();
		$post = new Post();
		
		$topico->setTitulo($_POST['titulo']);
		$topico->setIdUsuario($_SESSION['id_usuario']);
		$topico->setIdForum($_GET['idForum']);
		
		$idUltimoTopico = $daoTopico->insere($topico);

		$post->setTexto($_POST['texto']);
		$post->setIdTopico($idUltimoTopico);
		$post->setTipo('pergunta');
		$post->setIdUsuario($_SESSION['id_usuario']);
		$daoPost->insere($post);
		header("location: index.php?req=controller_forums&acao=listar&idForum=".$_GET['idForum']);
	}
	
}

if (isset($_SESSION['usuario'])) {
	$usuario = $_SESSION['usuario'];
	$menuUser = 'w3-show';
	$menuEntrar = 'w3-hide';
	$menuCadastro = 'w3-hide';
	$cardLogin = 'w3-hide';
	$botaoNovoTopico = 'w3-show';
}
else{
	$usuario = 'Visitante';
	$menuUser = 'w3-hide';
	$menuEntrar = 'w3-show';
	$menuCadastro = 'w3-show';	
	$botaoNovoTopico = 'w3-hide';
}

require_once __DIR__.'/../views/forums.php';


?>