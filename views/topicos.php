<?php 
  require_once 'header.php';
?>
<script src="ckeditor/ckeditor.js"></script>
<!-- The Grid -->
<div class="w3-row">
  <!-- CATEGORIAS -->
   <div class="card-categorias w3-container w3-row w3-card-2 w3-white w3-round w3-margin-bottom w3-padding-16 <?=$posts?>">
      <div class="w3-row">
        <div class="w3-col"><h2><?=$topico->getTitulo()?></h2></div>
      </div>
      <!-- INICIO FUNDO CINZA -->
      <div class="w3-card-4 w3-light-grey w3-padding">
        <!-- INICIO DO POST -->
        <?php foreach($listaPost as $post){?>
        <div class="w3-row">
        <?php if($post->getTipo() == 'pergunta'){ ?>
          <div class="topico-titulo-user w3-col s2 w3">
            <!-- aqui vai o getFotoUsuario -->
            <img src="img/fotos-perfil/<?=$post->getFotoUsuario()?>" alt="Foto Usuario" class="foto-perfil-media w3-card-2">
            <p><?=strtoupper($post->getNomeUsuario())?></p> 
            <p><?=strtoupper($post->getTipoUsuario())?></p>          
          </div>
          <div class="topico-balao w3-col s10"> 
              <div class="left w3-card-4 w3-light-blue">
                <p>
                  <?=$post->getTexto()?> 
                </p>
                <span class="w3-text-grey"><?=date("d/m/Y",strtotime($post->getDataPost()))?> - <?=$post->getHoraPost()?></span>  
              </div>

          </div>
              <!-- fim do if -->
              <?php }else{ ?>
                    <div class="topico-balao w3-col s10"> 
                        <div class="right w3-card-4 w3-light-green w3-right">
                          <p>
                            <?=$post->getTexto()?> 
                          </p>
                          <span class="w3-text-grey"><?=date("d/m/Y",strtotime($post->getDataPost()))?> - <?=$post->getHoraPost()?></span>  
                        </div>

                    </div>

                     <div class="topico-titulo-user w3-col s2 w3">
                       <!-- aqui vai o getFotoUsuario -->
                        <img src="img/fotos-perfil/<?=$post->getFotoUsuario()?>" alt="Foto Usuario" class="foto-perfil-media w3-card-2">
                        <p><?=strtoupper($post->getNomeUsuario())?></p> 
                        <p><?=strtoupper($post->getTipoUsuario())?></p>          
                    </div>
              <!-- fim do esle -->
              <?php } ?>
          
        <!-- FIM DO POST   -->
        </div>
        <!-- fim do foreach -->
        <?php } ?>
  

      <!-- FIM FUNDO CINZA -->
      </div>
     
     </div>


   <!-- FIM CATEGORIAS  -->
   </div>

    <!-- INICIO CARD COMENTARIO   -->
   <div class=" w3-container w3-row w3-card-2 w3-white w3-round w3-margin-bottom w3-padding-16 <?=$cardComent?>">
      <div class="w3-row">
        <div class="w3-col"><h4>Deixe seu comentário</h4></div>
      </div>
      <!-- INICIO FUNDO CINZA -->
      <div class="w3-card-4 w3-light-grey w3-padding">
        <form class="w3-row" action="index.php?req=controller_topicos&acao=cadastrar&idUsuario=<?=$_SESSION['id_usuario']?>&idTopico=<?=$_GET['idTopico']?>&idCriadorPost=<?=$topico->getIdUsuario()?>" method="post">
          <div class="w3-col w3-center w3-padding" >
            <textarea id="editor1" class="w3-padding w3-card-2" rows="15" name="texto" placeholder="Comente aqui..." style="width: 70%;"></textarea>
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>
          </div>
          <div class="w3-col w3-center" >
            <button class="w3-button w3-theme-d1 w3-text-white" type="submit" style="width: 240px;">Salvar Comentario</button>
          </div>
        </form>
      </div>
      <!-- FIM FUNDO CINZA   -->

   <!-- FIM CARD COMENTARIO   -->
   </div>
  
   <!-- INICIO CARD LOGIN   -->
   <div class="card-categorias w3-container w3-row w3-card-2 w3-white w3-round w3-margin-bottom w3-padding-16 <?=$cardLogin?>">
      
        <div class="w3-row">
          <div class="w3-col w3-center">
            <h3>Crie uma conta ou entre para comentar</h3>
            Você precisar ser um membro para fazer um comentário
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


<?php 
  require_once 'footer.php';
?>
