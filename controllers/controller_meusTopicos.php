<?php

if(isset($_GET['acao']) ){
	// Puxa lista de topicos do banco
	if($_GET['acao'] == 'listar'){
		$daoTopico = new TopicoDAO();
		$listaTopico = $daoTopico->getMeusTopicos($_SESSION['id_usuario']);

		//Puxando a lista de forums para o 
		//select do formulário do novo forum
		$daoForum = new ForumDAO();
		$listaForum1 = $daoForum->getLista(1);
		$listaForum2 = $daoForum->getLista(2);
		$listaForum3 = $daoForum->getLista(3);
		$listaForum4 = $daoForum->getLista(4);
		$listaForum5 = $daoForum->getLista(5);
		$listaForum6 = $daoForum->getLista(6);
	}

	// Cadastra novo topico e um novo post ao mesmo tempo
	if($_GET['acao'] == 'cadastrar'){
		$daoTopico = new TopicoDAO();
		$topico = new Topico();
		$daoPost = new PostDAO();
		$post = new Post();
		
		$topico->setTitulo($_POST['titulo']);
		$topico->setIdUsuario($_SESSION['id_usuario']);
		$topico->setIdForum($_POST['idForum']);
		
		$idUltimoTopico = $daoTopico->insere($topico);

		$post->setTexto($_POST['texto']);
		$post->setIdTopico($idUltimoTopico);
		$post->setTipo('pergunta');
		$post->setIdUsuario($_SESSION['id_usuario']);
		$daoPost->insere($post);
		header("location: index.php?req=controller_meusTopicos&acao=listar");
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

if (isset($_GET['nomeForum'])){
	$nomeForum = $_GET['nomeForum'];
}


require_once __DIR__.'/../views/meusTopicos.php';


?>