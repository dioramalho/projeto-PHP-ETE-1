<?php
class Acesso
{
    

    //Construtor
    public function __construct()
    {
        
    }

    public static function verificarLogin($login){
        $pdo = Database::conexao();
        $sql = "SELECT `id`,`nome`,`login`,`senha` FROM registro_tb WHERE `login` = '$login'";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list[0];
    } 

    public static function validaSenha($senhaDigitada, $senhaBd){
        if(!$senhaDigitada || !$senhaBd){return false;}
        if($senhaDigitada == $senhaBd){return true;}
        return false;
    }

    public static function registrarAcessoValido($usuarioCadastrado){
        $_SESSION["usuario"]["nome"] = $usuarioCadastrado['nome'];
        $_SESSION["usuario"]["id"] = $usuarioCadastrado['id'];
        $_SESSION["usuario"]["status"] = 'logado';
    }
    
    public static function limparSessao(){
        unset($_SESSION["usuario"]);
        header('Location:'.constant("URL_LOCAL_SITE_PAGINA_LOGIN"));
    }

    function protegerTela(){
        if(
            !$_SESSION || 
            !$_SESSION["usuario"]["status"] === 'logado'
        ){
            header('Location:'.constant("URL_LOCAL_SITE_PAGINA_LOGIN"));
        }
    }
}