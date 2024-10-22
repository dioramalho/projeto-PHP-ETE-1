<div class="container">
    <header class="header">
      <a class="logo" href="<?=constant('URL_LOCAL_SITE_PAGINA').'principal'?>">InfoSports</a>
      <div class="headerBtnGroup">
        <?php include_once("menuTopo.php");?>
        <div>
          <input type="checkbox" class="check" id="chk"/>

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
    <p class="sectionTitle" id="backToTop"><?=$tituloDoSite?></p>
    <p class="sectionDescription"><strong><?=$subTituloDoSite?></strong></p>
    <section class="gridContainer">
      <div class="mainContent">
        <?php 
        $listaNoticia = listarNoticias();
        foreach($listaNoticia as $noticia):
        ?>
        <a class="pag-link" href="<?=constant('URL_LOCAL_SITE_DETALHE').$noticia['id']?>">
          <div class="categoryCard">
            <img src="./imagens/<?=$noticia['img']?>" alt="mainCardImg" class="mainCardImg" width=320px height=180px>
            <p class="mainCategoryCardTitle"><?=$noticia['titulo']?></p>
            <p class="mainCategoryCardDescription"><?= reduzirStr($noticia['descricao'],180)?></p>
          </div>
        </a>
        <?php endforeach?>

      </div>
      <aside class="sidebar">
        <div class="sidebarContent">
          <div class="IMC">
          <form method="POST" action="#">
            <p>INDICE DE MASSA CORPORAL (IMC)</p>
            <label for="#nome">Nome (KG)</label>
            <input id="nome" name="nome" type="text" placeholder="Digite o seu nome">
            <label for="#email">email (KG)</label>
            <input id="email" name="email" type="text" placeholder="Digite o seu e-mail">
            <label for="#peso">Peso (KG)</label>
            <input id="peso" name="peso" type="text" placeholder="Digite o peso...">
            <label for="#altura">Altura (M)</label>
            <input id="altura" name="altura" type="text" placeholder="Digite a altura...">
            <button type="submit" class="btnCalcular">Calcular</button>
        </form>
        <h4>
          Resultado: <?= $resposta;?> <br/> 
          Classificação: <?= $classificacao;?>
        </h4>
      </aside>
    </section>

    <footer class="footer">
      <span>Info Sports</span>
      <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
    </footer>
  </div>