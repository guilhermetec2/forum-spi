<?php 
  require_once 'header.php';
?>

<div class="logo-grande w3-image w3-margin-bottom w3-animate-zoom">  
</div>    
  <!-- The Grid -->
  <div class="w3-row">
    
  <!-- RECENTES -->
   <div class="w3-container w3-row-padding w3-hide-small w3-hide-medium w3-card-2 w3-white w3-round w3-margin-bottom w3-padding-16">
      <div class="w3-row">
        <div class="w3-col"><h4>Postagens Recentes</h4></div>
      </div>
      <?php foreach($listaTopicos as $topico) {?>
      <div class=" w3-col s4">
        <div class="card-recentes w3-card-4">
          <a href="index.php?req=controller_topicos&acao=listar&idTopico=<?=$topico->getIdTopico()?>"></a>
          <div class="imagem-card-recentes w3-center w3-theme-d1">
            <img src="img/fotos-perfil/<?=$topico->getFotoUsuario()?>" alt="Foto Usuario" class="w3-card-2">
          </div>
          <div class="nome-card-recentes w3-theme-d1">
            <b><?=$topico->getNomeUsuario()?></b><br>
            Postou dia <?=date("d/m/Y",strtotime($topico->getDataCriacao()))?> ás <?=$topico->getHoraCriacao()?>
          </div>
          <div class="descricao-card-recentes w3-theme">
              <b><?=$topico->getTitulo()?></b> <br>
              <?=$topico->getNomeForum()?>
          </div>
        </div>
      </div>
      <?php } ?>

   <!-- FIM RECENTES -->
   </div>

   <!-- CATEGORIAS -->
   <div class="card-categorias w3-container w3-row w3-card-2 w3-white w3-round w3-margin-bottom w3-padding-16">
      <div class="w3-row">
        <div class="w3-col"><h4>Todas as Categorias do Fórum</h4></div>
      </div>
      <div class="w3-col s12 w3-blue w3-card-4">
        <button onclick="myFunction('semestre1')" class="w3-button w3-block w3-theme-d1 w3-left-align w3-xlarge">      
        1º Semestre</button>

        <div id="semestre1" class="">
          <?php foreach ($listaForum1 as $forum){ ?>
              <a class="w3-button w3-block w3-left-align w3-theme-l4" href="index.php?req=controller_forums&idForum=<?=$forum->getIdForum()?>&acao=listar"><?=$forum->getNomeForum()?></a>
          <?php } ?>        
        </div>

        <button onclick="myFunction('semestre2')" class="w3-button w3-block w3-theme-d1 w3-left-align  w3-xlarge">
        2º Semestre</button>

        <div id="semestre2" class="">
        <?php foreach ($listaForum2 as $forum){ ?>
              <a class="w3-button w3-block w3-left-align w3-theme-l4" href="index.php?req=controller_forums&idForum=<?=$forum->getIdForum()?>&acao=listar"><?=$forum->getNomeForum()?></a>
          <?php } ?>
        </div>

        <button onclick="myFunction('semestre3')" class="w3-button w3-block w3-theme-d1 w3-left-align  w3-xlarge">
        3º Semestre</button>

        <div id="semestre3" class="">
          <?php foreach ($listaForum3 as $forum){ ?>
              <a class="w3-button w3-block w3-left-align w3-theme-l4" href="index.php?req=controller_forums&idForum=<?=$forum->getIdForum()?>&acao=listar"><?=$forum->getNomeForum()?></a>
          <?php } ?>
        </div>

        <button onclick="myFunction('semestre4')" class="w3-button w3-block w3-theme-d1 w3-left-align  w3-xlarge">
        4º Semestre</button>

        <div id="semestre4" class="">
          <?php foreach ($listaForum4 as $forum){ ?>
              <a class="w3-button w3-block w3-left-align w3-theme-l4" href="index.php?req=controller_forums&idForum=<?=$forum->getIdForum()?>&acao=listar"><?=$forum->getNomeForum()?></a>
          <?php } ?>
        </div>

        <button onclick="myFunction('semestre5')" class="w3-button w3-block w3-theme-d1 w3-left-align  w3-xlarge">
        5º Semestre</button>

        <div id="semestre5" class="">
          <?php foreach ($listaForum5 as $forum){ ?>
              <a class="w3-button w3-block w3-left-align w3-theme-l4" href="index.php?req=controller_forums&idForum=<?=$forum->getIdForum()?>&acao=listar"><?=$forum->getNomeForum()?></a>
          <?php } ?>
        </div>

        <button onclick="myFunction('semestre6')" class="w3-button w3-block w3-theme-d1 w3-left-align  w3-xlarge">
        6º Semestre</button>

        <div id="semestre6" class="">
          <?php foreach ($listaForum6 as $forum){ ?>
              <a class="w3-button w3-block w3-left-align w3-theme-l4" href="index.php?req=controller_forums&idForum=<?=$forum->getIdForum()?>&acao=listar"><?=$forum->getNomeForum()?></a>
          <?php } ?>
        </div>

      </div>

   <!-- FIM CATEGORIAS -->   
   </div>
    
   
    
  <!-- End Grid -->
  </div>

 <?php 
  require_once 'footer.php';
?>
