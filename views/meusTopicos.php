<?php 
  require_once 'header.php';
?>

<script src="ckeditor/ckeditor.js"></script>

<!-- The Grid -->
<div class="w3-row">
  <!-- CATEGORIAS -->
   <div class="card-categorias w3-container w3-row w3-card-2 w3-white w3-round w3-margin-bottom w3-padding-16">
      <div class="w3-row">
        <div class="w3-col s6"><h2>Meus Tópicos</h2></div>
        <div class="w3-col s6"><button class="w3-btn w3-green w3-large w3-text-white w3-right <?=$botaoNovoTopico?>" onclick="document.getElementById('modal-topico').style.display='block'"><i class="fa fa-plus w3-margin-right"></i>Novo Tópico</button>
          <select class="w3-select w3-right w3-border w3-margin-right" name="option" style="width: 120px;">
            <option value="">Mais recente</option>
            <option value="1">Mais antigo</option>
            <option value="2">Mais posts</option>
            <option value="3">Menos posts</option>
            <option value="3">A - Z</option>
            <option value="3">Z- A</option>
          </select> 
        </div>
      </div>
      <?php if(empty($listaTopico)){
          print "<p><h4>Você ainda não criou nenhum Tópico.</h4></p>";
        }else{ ?>
            <div class="w3-col s12 w3-blue w3-card-4">
              <div class="w3-padding w3-block w3-theme-d1 w3-left-align w3-xlarge w3-card-4">
                Tópico<span class="w3-right">20 - 38</span> 
              </div>

              <div class="">  
                <?php foreach($listaTopico as $topico){?>
                <a class="w3-button w3-block w3-left-align" href="index.php?req=controller_topicos&acao=listar&idTopico=<?=$topico->getIdTopico()?>">
                  <div class="w3-row" style="height: 50px; ">
                     <div class="nome-topico w3-col s5" style="height: 100%;"><?=$topico->getTitulo()?></div>
                      <div class="posts-topico w3-col s2 w3-left"><?=$topico->getQtdPosts()?> POSTS</div>
                      <div class="user-topico w3-col s5"><img src="img/fotos-perfil/<?=$fotoPerfil?>" alt="Foto Usuario" class="foto-perfil-mini w3-margin-right"> Em <?=$topico->getNomeForum()?> - <?=date("d/m/Y",strtotime($topico->getDataCriacao()))?></div>
                  </div>          
                </a>
                <?php }?>
              </div>
            </div>
           <?php } ?> 
      <!-- PAGINAÇÃO -->
      <!-- SÓ IRÁ APARECER SE TIVER MAIS DE 20 RESULTADOS -->
      <!-- UTILIZAR JS PARA MODIFICAR A PAGINA ATIVA -->
      <div class="w3-center">
      <div class="w3-bar w3-border w3-margin-top">
        <a href="#" class="w3-button">&laquo;</a>
        <a href="#" class="w3-button w3-theme-d1">1</a>
        <a href="#" class="w3-button">2</a>
        <a href="#" class="w3-button">3</a>
        <a href="#" class="w3-button">4</a>
        <a href="#" class="w3-button">&raquo;</a>
      </div>
      </div>

   <!-- FIM CATEGORIAS  -->
   </div>

    <!-- INICIO CARD LOGIN   -->
   <div class="card-categorias w3-container w3-row w3-card-2 w3-white w3-round w3-margin-bottom w3-padding-16 <?=$cardLogin?>">
      
        <div class="w3-row">
          <div class="w3-col w3-center">
            <h3>Crie uma conta ou entre para postar um novo Tópico</h3>
            Você precisar ser um membro para criar um Tópico
          </div>
        </div>
        <div class="w3-row-padding w3-margin-top">
          <div class="w3-col s6">
            <div class="w3-card-4 w3-light-grey w3-center w3-padding-16">
              <h4>Criar uma conta</h4>
              Crie uma nova conta em nossa comunidade!
              <p><a href="index.php?req=controller_cadastro" class="w3-button w3-border w3-theme-d1 w3-large">Criar uma nova conta</a></p>
            </div>
          </div>
          <div class="w3-col s6">
            <div class="w3-card-4 w3-light-grey w3-center w3-padding-16">
              <h4>Entrar</h4>
              Já tem uma conta? Faça o login.
              <p><button class="w3-button w3-border w3-theme-d1 w3-large" onclick="document.getElementById('modal-login').style.display='block'">Entrar agora</button></p>
            </div>
          </div>
        </div>

   <!-- FIM CARD LOGIN   -->
   </div>

  
  

<!-- End Grid -->
</div>


<!-- MODAL TOPICO-->
<div id="modal-topico" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:75vw;">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('modal-topico').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
      </div>

      
      <form class="w3-container" action="index.php?req=controller_meusTopicos&acao=cadastrar" method="post">
        <div class="w3-section">
          <h3 class="w3-center">Novo Tópico</h3>
          <label><b>Selecione o Forum</b></label>
          <select name="idForum" class="w3-select w3-border w3-margin-bottom">
            <optgroup label="1º Semestre">
              <?php foreach($listaForum1 as $forum1) {?>
                <option value="<?=$forum1->getIdForum()?>"><?=$forum1->getNomeForum()?></option>
              <?php } ?>
            </optgroup>
            <optgroup label="2º Semestre">
              <?php foreach($listaForum2 as $forum2) {?>
                <option value="<?=$forum2->getIdForum()?>"><?=$forum2->getNomeForum()?></option>
              <?php } ?>
            </optgroup>
            <optgroup label="3º Semestre">
              <?php foreach($listaForum3 as $forum3) {?>
                <option value="<?=$forum3->getIdForum()?>"><?=$forum3->getNomeForum()?></option>
              <?php } ?>
            </optgroup>
            <optgroup label="4º Semestre">
              <?php foreach($listaForum4 as $forum4) {?>
                <option value="<?=$forum4->getIdForum()?>"><?=$forum4->getNomeForum()?></option>
              <?php } ?>
            </optgroup>
            <optgroup label="5º Semestre">
              <?php foreach($listaForum5 as $forum5) {?>
                <option value="<?=$forum5->getIdForum()?>"><?=$forum5->getNomeForum()?></option>
              <?php } ?>
            </optgroup>
            <optgroup label="6º Semestre">
              <?php foreach($listaForum6 as $forum6) {?>
                <option value="<?=$forum6->getIdForum()?>"><?=$forum6->getNomeForum()?></option>
              <?php } ?>
            </optgroup>
          </select>

          <label><b>Titulo do Tópico</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" name="titulo" required>
          <label><b>Comentário</b></label>
          <textarea id="editor1" class="w3-padding" rows="15" name="texto" placeholder="Comente aqui..." style="width: 100%;"></textarea>
          <script>
                CKEDITOR.replace( 'editor1' );
            </script>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Salvar Tópico</button>
        </div>
      </form>

 

    </div>
  <!-- FIM DO MODAL   -->
  </div>



<?php 
  require_once 'footer.php';
?>
