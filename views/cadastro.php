<?php 
  require_once 'header.php';
?>
<div class="w3-container w3-row w3-card-2 w3-white w3-round w3-margin-bottom w3-padding-16 w3-center">
    <form action="index.php?req=controller_cadastro" class="w3-container w3-card-4 w3-light-grey w3-text-dark-grey w3-margin" method="post" >
        <h2 class="w3-center">Cadastre-se</h2>
        <div class="w3-panel w3-yellow w3-display-container <?=$alert?>">
          <span onclick="this.parentElement.style.display='none'"
          class="w3-button w3-yellow w3-large w3-display-topright">&times;</span>
          <h3>ATENÇÃO!</h3>
          <p><?=$msg?></p>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
              <select class="w3-select w3-border" name="tipo" onchange="esconder('campo-matricula')">
                <option value="Aluno(a)">Aluno</option>
                <option value="Professor(a)">Professor</option>
              </select>
            </div>  
        </div>

        <div class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border" name="nome" type="text" placeholder="Nome de usuário" required value="<?=$valueNome?>">
            </div>  
        </div>        

        <div id="campo-matricula" class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-id-card-o"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border" name="matricula" type="number" placeholder="Matricula Senac" value="<?=$valueMatricula?>">
            </div>
        </div>

        <div class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border" name="senha" type="password" placeholder="Senha" required>
            </div>
        </div>

        <div class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border" name="confSenha" type="password" placeholder="Comfirme a senha" required>
            </div>
        </div>

        <p class="w3-center">
          <button class="w3-button w3-section w3-theme-d1 w3-ripple" name="cadastrar"> Cadastrar </button>
        </p>
    </form>
</div>

<?php 
  require_once 'footer.php';
?>