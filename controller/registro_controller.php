<?php

if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
  }else{
    $paginaUrl = null;
}

$nome = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['nome'])) ? $_POST['nome'] : null;

$email = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['email'])) ? $_POST['email'] : null;

$telefone = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['telefone'])) ? $_POST['telefone'] : null;

$login = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['login'])) ? $_POST['login'] : null;

@$senha = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty(criptografia($_POST['senha']))) ? criptografia($_POST['senha']) : null;

if($paginaUrl === "registro"){
    $objRegistro = new Registro($nome, $email, $telefone, $login, $senha);
    if($_POST){
      $objRegistro->cadastrarRegistro();
    }
    include_once("view/registro.php");
}