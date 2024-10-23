    <div class="container">
        <header class="header">
            <a class="logo" href="index.html">InfoSports</a>
            <div class="headerBtnGroup">
                <button class="navBtn"><a href="login.html">Login</a></button>
                <button class="navBtn"><a href="registro.html">Registro</a></button>
                <button class="navBtn"><a href="contato.html">Contato</a></button>
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
        <p class="sectionTitle" id="backToTop">BEM VINDO A INFOSPORTS!</p>
        <p class="sectionDescription">Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte
            preferido.</p>
        <section class="gridContainer">
            <div class="mainContent">
                <div class="categoryCard">
                    <img src="./imagens/<?=$noticia['img']?>" alt="mainCardImg" class="mainCardImg">
                    <h1 class="mainCategoryCardTitle"><?=$noticia['titulo']?></h1>
                    <p class="mainCategoryCardDescription" Align="justify">
                    <?=$noticia['descricao']?>
                    </p>
                </div>
            </div>


        </section>
        <footer class="footer">
            <span>Info Sports</span>
            <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
        </footer>
    </div>
    