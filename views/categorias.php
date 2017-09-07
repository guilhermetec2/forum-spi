<?php 
  require_once 'header.php';
?>
<!-- The Grid -->
<div class="w3-row">
	<!-- CATEGORIAS -->
   <div class="card-categorias w3-container w3-row w3-card-2 w3-white w3-round w3-margin-bottom w3-padding-16">
      <div class="w3-row">
        <div class="w3-col"><h2><?=$categoria->getNomeCategoria()?></h2></div>
      </div>
      <div class="w3-col s12 w3-blue w3-card-4">
        <div class="w3-padding w3-block w3-theme-d1 w3-left-align w3-xlarge w3-card-4">
        	Forums
        </div>

        <div class="">
          <?php foreach ($listaForum as $forum){ ?>
              <a class="w3-button w3-block w3-left-align w3-theme-l4" href="index.php?req=controller_forums&idForum=<?=$forum->getIdForum()?>&acao=listar"><?=$forum->getNomeForum()?></a>
          <?php } ?>
        </div>

      </div>

   <!-- FIM CATEGORIAS  -->
   </div>
	

<!-- End Grid -->
</div>


<?php 
  require_once 'footer.php';
?>