<div class="container">
    <header class="header">
      <a class="logo" href="<?=constant('URL_LOCAL_SITE_PAGINA').'principal'?>">InfoSports</a>
      <div class="headerBtnGroup">
      <?php include_once("menuTopo.php");?>
        <div>
          <input type="checkbox" class="check" id="chk" />
        
          <label class="label" for="chk">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="bola"></div>
          </label>
        </div>
      </div>
      <div class="hamburguer-menu">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </header>
    <section>
      <div class="box-content">
        <form action="#" method="POST">
          <h1>Faça o seu Login</h1>
          <div class="email">
            <label for="email"></label>
            <input type="text" placeholder="Login" id="login" name="login">
            <p id="email-ajuda" class="msg-ajuda" style="display:none;">Insira um login válido.</p>
          </div>
          <div class="telefone">
            <label for="telefone"></label>
            <input type="password" placeholder="Senha" id="senha" name="senha">
            <p id="tel-ajuda" class="msg-ajuda" style="display:none;">Insira um telefone válido. (11 números)</p>
          </div>
          <button class="btn-concluir">Concluir</button>

        </form>
      </div>
    </section>
    <footer class="footer">
      <span>Info Sports</span>
      <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
    </footer>
  </div>