
<div class="container">
    <header class="header">
      <a class="logo" href="index.html">InfoSports</a>
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
        $listaNoticia = criarLista();
        foreach($listaNoticia as $noticia):
        ?>
        <a class="pag-link" href="boxe.html">
          <div class="categoryCard">
            <img src="<?=$noticia['imagem']?>" alt="mainCardImg" class="mainCardImg" width=320px height=180px>
            <p class="mainCategoryCardTitle"><?=$noticia['titulo']?></p>
            <p class="mainCategoryCardDescription"><?= reduzirStr($noticia['descricao'],180)?></p>
          </div>
        </a>
        <?php endforeach?>

      </div>
      <aside class="sidebar">
        <div class="sidebarContent">
          <div class="IMC">
            <p>INDICE DE MASSA CORPORAL (IMC)</p>
            <label for="#peso">Peso (KG)</label>
            <input id="peso" type="text" placeholder="Digite o peso...">
            <label for="#altura">Altura (M)</label>
            <input id="altura" type="text" placeholder="Digite a altura...">
            <button class="btnCalcular">Calcular</button>
      </aside>

    </section>

    <footer class="footer">
      <span>Info Sports</span>
      <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
    </footer>
  </div>