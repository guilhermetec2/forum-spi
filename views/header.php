<!DOCTYPE html>
<html>
<title>Forum Sistemas para Internet</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/temas/<?=$tema?>">
<link rel="stylesheet" href="css/estilo.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
a{
  text-decoration: none;
}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-hide-large w3-right w3-padding-large w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-animate-left">
    <div class="icone-logo"></div>
    Fórum <span class="w3-hide-small">Sistemas para Internet</span>
  </a>
  <div class="w3-dropdown-hover w3-hide-small w3-hide-medium w3-right <?=$menuUser?>">
    <button class="w3-button w3-padding-large" title="Nome do usuário logado"><?=strtoupper($usuario)?></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px; right: -100px; ">
      <a href="index.php?req=controller_meusTopicos&acao=listar" class="w3-bar-item w3-button" title="Tópicos do usuário">Meus Tópicos</a>
      <a href="index.php?req=controller_perfil&acao=listar" class="w3-bar-item w3-button" title="Editar perfil do usuário">Meu Perfil</a>
      <a href="controllers/controller_logoff.php?req=<?=$requisicao?>" class="w3-bar-item w3-button" title="Fazer logoff">Sair</a>
    </div>
  </div>
  <span class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-padding-large w3-hover-white w3-right <?=$menuEntrar?>" title="Realizar login" onclick="document.getElementById('modal-login').style.display='block'">ENTRAR</span>
  <a href="index.php?req=controller_cadastro" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-padding-large w3-hover-white w3-right <?=$menuCadastro?>" title="Cadastre-se">CADASTRAR</a>
  <div class="w3-dropdown-hover w3-hide-small w3-hide-medium w3-right">
    <button class="w3-button w3-padding-large" title="Todas as categorias">CATEGORIAS</button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="index.php?req=controller_categorias&idCategoria=1" class="w3-bar-item w3-button">Forums do 1º Semestre</a>
      <a href="index.php?req=controller_categorias&idCategoria=2" class="w3-bar-item w3-button">Forums do 2º Semestre</a>
      <a href="index.php?req=controller_categorias&idCategoria=3" class="w3-bar-item w3-button">Forums do 3º Semestre</a>
      <a href="index.php?req=controller_categorias&idCategoria=4" class="w3-bar-item w3-button">Forums do 4º Semestre</a>
      <a href="index.php?req=controller_categorias&idCategoria=5" class="w3-bar-item w3-button">Forums do 5º Semestre</a>
      <a href="index.php?req=controller_categorias&idCategoria=6" class="w3-bar-item w3-button">Forums do 6º Semestre</a>
    </div>
  </div>
  <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-padding-large w3-hover-white w3-right" title="Pagina Inicial">HOME</a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-large" style="position: relative; top: 50px;">
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">CATEGORIAS</a>
  <a href="index.php?req=controller_cadastro" class="w3-bar-item w3-button w3-padding-large <?=$menuCadastro?>">CADASTRAR</a>
  <span class="w3-bar-item w3-button w3-padding-large <?=$menuEntrar?>" onclick="document.getElementById('modal-login').style.display='block'" >ENTRAR</span>
  <a href="#" class="w3-bar-item w3-button w3-padding-large <?=$menuUser?>">MEUS TÓPICOS</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large <?=$menuUser?>">MEU PERFIL</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large <?=$menuUser?>">SAIR</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1200px;margin-top:80px">