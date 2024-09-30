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
    <section class="main">
      <div class="box-content">
        <form method="POST" action="#">
          <h1>Cadastre-se para acompanhar as notícias!</h1>
          <div class="name">
            <label for="nome"></label>
            <input type="text" placeholder="Nome" id="nome" name="nome" >
            <p id="nome-ajuda" class="msg-ajuda" style="display:none;">Mín. 3 caracteres</p>
          </div>
          <div class="email">
            <label for="email"></label>
            <input type="text" placeholder="Email" id="email" name="email">
            <p id="email-ajuda" class="msg-ajuda" style="display:none;">Insira um email válido. Ex: abc@abc.com</p>
          </div>
          <div class="email">
            <label for="telefone"></label>
            <input type="text" placeholder="Telefone" id="telefone" name="telefone">
            <p id="tel-ajuda" class="msg-ajuda" style="display:none;">Insira um telefone válido. (11 números)</p>
          </div>
          <div class="email">
            <label for="login"></label>
            <input type="text" placeholder="Login" id="login" name="login">
            <p id="login" class="msg-ajuda" style="display:none;">Insira um login valido</p>
          </div>
          <div class="email">
            <label for="senha"></label>
            <input type="password" placeholder="senha" id="senha" name="senha">
            <p id="senha" class="msg-ajuda" style="display:none;">Insira uma senha valida</p>
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
