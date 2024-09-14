<?php
  include_once("configuracao.php");
  include_once("funcoes.php");
  timeZone();
  $data = dataAtual();
  $tituloDoSite = "BEM VINDO A INFOSPORTS!";
  $subTituloDoSite = "Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte
  preferido. <br>".$data;

if($_GET && isset($_GET['pagina'])){
  $paginaUrl = $_GET['pagina'];
}else{
  $paginaUrl = null;
}

include_once("header.php");
  if($paginaUrl === "principal"){
    include_once("principal.php");
  }elseif($paginaUrl === "contato"){
    include_once("contato.php");
  }elseif($paginaUrl === "login"){
    include_once("login.php");
  }elseif($paginaUrl === "registro"){
    include_once("registro.php");
  }else{
    echo "404 Página não existe!";
  }

include_once("footer.php");
?>
