<?php 
  require_once 'header.php';
?>
	<!-- CARD BRANCO -->
	 <div class="card-categorias w3-container w3-row w3-card-2 w3-white w3-round w3-margin-bottom w3-padding-16">
		<div class="w3-row">
        	<div class="w3-col"><h2>Meu Perfil</h2></div>
        </div>
		<!-- FUNDO CINZA -->
        <div class="w3-card-4 w3-light-grey w3-padding">
	        <div class="w3-row">
	        	<div class="w3-col s4">
					<div class="w3-row">
						<div class="w3-center w3-margin-top">
							<img src="img/fotos-perfil/<?=$fotoPerfil?>" alt="Foto do perfil" class="foto-perfil ">
							<a href=""><h4>Foto do Perfil</h4></a>
							<button class="w3-btn w3-theme-d1" onclick="document.getElementById('modal-topico').style.display='block'">alterar foto</button>
						</div>
					</div>
					<div class="w3-row container-temas">
						<div class="w3-margin-top">
							<div class="w3-center">
								<h4>Temas</h4>
								<div class="w3-row temas">
									<div class="wrapper-tema">
										<button class="w3-button w3-hover-text-red w3-red" onclick="mudaTema('w3-theme-red.css')"></button>
									</div>
									<div class="wrapper-tema">
										<button class="w3-button w3-hover-text-pink w3-pink" onclick="mudaTema('w3-theme-pink.css')"></button>
									</div>
									<div class="wrapper-tema">
										<button class="w3-button w3-hover-text-purple w3-purple" onclick="mudaTema('w3-theme-purple.css')"></button>
									</div>
									<div class="wrapper-tema">
										<button class="w3-button w3-hover-text-blue w3-blue" onclick="mudaTema('w3-theme-blue.css')"></button>
									</div>
									<div class="wrapper-tema">
										<button class="w3-button w3-hover-text-green w3-green" onclick="mudaTema('w3-theme-green.css')"></button>
									</div>
								</div>

								<div class="w3-row temas">
									<div class="wrapper-tema">
										<button class="w3-button w3-hover-text-lime w3-lime" onclick="mudaTema('w3-theme-lime.css')"></button>
									</div>
									<div class="wrapper-tema">
										<button class="w3-button w3-hover-text-amber w3-amber" onclick="mudaTema('w3-theme-amber.css')"></button>
									</div>
									<div class="wrapper-tema">
										<button class="w3-button w3-hover-text-grey w3-blue-grey" onclick="mudaTema('w3-theme-blue-grey.css')"></button>
									</div>
									<div class="wrapper-tema">
										<button class="w3-button w3-hover-text-dark-grey w3-dark-grey" onclick="mudaTema('w3-theme-dark-grey.css')"></button>
									</div>
									<div class="wrapper-tema">
										<button class="w3-button w3-hover-text-black w3-black" onclick="mudaTema('w3-theme-black.css')"></button>	
									</div>
								</div>	
																																																												
							</div>
						</div>
					</div>
					
	        	</div>

	        	<div class="w3-col s8">
	        		<form action="index.php?req=controller_perfil&acao=atualiza" class="w3-container w3-card-4 w3-white w3-text-dark-grey w3-margin" method="post">
			        <h2 class="w3-center">Dados do Usuário</h2>
			        <div class="w3-panel w3-yellow w3-display-container <?=$alert?>">
			          <span onclick="this.parentElement.style.display='none'"
			          class="w3-button w3-yellow w3-large w3-display-topright">&times;</span>
			          <h3>ATENÇÃO!</h3>
			          <p><?=$msg?></p>
			        </div>
			        <div class="w3-row w3-section">			          
			          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user w3-margin-top"></i></div>
			            <div class="w3-rest">
			              <label>Tipo</label>			              	
			              <select class="w3-select w3-border" name="tipo" onchange="esconder('campo-matricula')">
			                <option value="Aluno(a)">Aluno(a)</option>
			                <option value="Professor(a)">Professor(a)</option>
			              </select>
			            </div>  
			        </div>

			        <div class="w3-row w3-section">
			          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user w3-margin-top"></i></div>
			            <div class="w3-rest">
			              <label>Nome do usuário</label>	
			              <input class="w3-input w3-border" name="nome" type="text" placeholder="Nome de usuário" value="<?=$objUsuario->getNomeUsuario()?>" required>
			            </div>  
			        </div>        

			        <div id="campo-matricula" class="w3-row w3-section">
			          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-id-card-o w3-margin-top"></i></div>
			            <div class="w3-rest">
			              <label>Matricula</label>	
			              <input class="w3-input w3-border" name="matricula" type="number" placeholder="Matricula Senac" value="<?=$objUsuario->getMatricula()?>">
			            </div>
			        </div>

			        <div class="w3-row w3-section">
			          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock w3-margin-top"></i></div>
			            <div class="w3-rest">
			              <label>Senha</label>	
			              <input class="w3-input w3-border" name="senha" type="password" placeholder="Senha" value="<?=$objUsuario->getSenha()?>" required>
			            </div>
			        </div>

			        <div class="w3-row w3-section">
			          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock w3-margin-top"></i></div>
			            <div class="w3-rest">
			              <label>Confirmar Senha</label>	
			              <input class="w3-input w3-border" name="confSenha" type="password" placeholder="Comfirme a senha" value="<?=$objUsuario->getSenha()?>" required>
			            </div>
			        </div>

			        <p class="w3-center">
			          <button class="w3-btn w3-section w3-theme-d1 w3-ripple" name="cadastrar"> Salvar </button>
			        </p>
			    </form>
	        	</div>
	        </div>
		</div>
		<!-- FIM FUNDO CINZA -->
	 </div>

<!-- MODAL TOPICO-->
<div id="modal-topico" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:30%;">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('modal-topico').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
      </div>		
      <form class="w3-container" action="index.php?req=controller_perfil" method="post" enctype="multipart/form-data">
        <div class="w3-section">
          <h3 class="w3-center">Alterar Foto</h3>
			<div id="wrapper" class="w3-container w3-margin-top w3-margin-bottom">       
			    <div id="image-holder" class="w3-center"></div>
			</div>
          <label><b>Selecione sua nova foto</b></label>
          <input id="fileUpload" class="w3-input w3-border w3-margin-bottom" type="file" name="fileUpload" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Salvar Foto</button>
        </div>
      </form>

    </div>
  <!-- FIM DO MODAL   -->
  </div>

  <script type="text/javascript" src="js/jquery.js"></script>

<?php 
  require_once 'footer.php';
?>