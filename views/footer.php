<!-- End Page Container -->
</div>
<br>

<!-- MODAL LOGIN -->
<div id="modal-login" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('modal-login').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <img src="img/logo-pequeno.png" alt="Avatar" style="width:auto;" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="controllers/controller_login.php?req=<?=$requisicao?>" method="post">
        <div class="w3-section">
          <label><b>Matricula ou Nome de Usuário</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Entre com sua Matricula ou Nome de Usuário" name="usuario" required>
          <label><b>Senha</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Entre com a Senha" name="senha" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Entrar</button>
          
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('modal-login').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  <!-- FIM DO MODAL   -->
</div>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Desenvolvido por Guilherme Rodrigues & William Carneiro</h5>
</footer>

<footer class="w3-container w3-theme-d5">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
 
<script src="js/functions.js"></script>

</body>
</html> 