<div class="body-bg">
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
        <div class="container-body">
            <div class="container">
                <div class="title">
                    <h2>Cadastrar nova notícia</h2>
                </div>
                
                <form method="POST" action="#" enctype="multipart/form-data">
                    <div class="campos">
                        <div class="input-box">
                            <div class="name">
                                <label for="titulo"></label>
                                <input type="text" placeholder="título" id="titulo" name="titulo" >
                                <p id="nome-ajuda" class="msg-ajuda" style="display:none;">Mín. 3 caracteres</p>
                            </div>
                        </div>
                        
                        <div class="input-box">
                            <!-- <input type="text" id="imagem" name="imagem" placeholder="Imagem"> -->
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                        <div class="input-box">
                            <select name="categoria" class="name">
                                <?php foreach ($categorias as $itemCategoria):?>
                                    <option value="<?=$itemCategoria['nome']?>"><?=$itemCategoria['nome']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>                 
                        <div class="input-box">
                            <textarea id="mensagem" name="descricao" placeholder="Digite a descrição"></textarea>
                        </div>
                    </div>

                    <div class="button">
                        <button value="Enviar" class="btn-concluir" id="btnEnviar">Enviar</button>
                    </div>
                </form>
            </div>
            <section class="contacts">
                <h2>Notícias</h2>
            </section>
        </div>

        <footer class="footer">
            <span>Info Sports</span>
            <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
        </footer>
    </div>