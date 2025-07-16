<?php
    require "conexao.php";

    session_start();
    function erroImagem($original){
        $caminho = "fotos/$original";
        // verifica se o campo está vazio
        if($original=="" or !file_exists($caminho)){
            return "fotos/indisponivel.png";
        }else{
            return $caminho;
        }
    }
    function msg_sucesso($s){
        $sucesso = "<div class='sucesso'>
            $s
        </div>";
        return $sucesso;
    }
    function msg_alerta($a){
        $alerta = "<div class='alerta'>
            $a
        </div>";
        return $alerta;
    }
    function msg_erro($e){
        $erro = "<div class='erro'>
            $e
        </div>";
        return $erro;
    }
    function voltar(){
        $voltar = "<div class='voltar'>
            <a href='index.php'> Clique aqui para voltar </a>
        </div>";
        return $voltar;
    }
    function estaLogado(){
        
    }
    function niveladm(){
        if($_SESSION["nivel"] == "adm"){
            return true;
        }
    }
    function niveleditor(){
        if($_SESSION["nivel"] == "editor"){
            return true;
        }
    }
    function nivelcliente(){
        if($_SESSION["nivel"] == "cliente"){
            return true;
        }
    }
    function deslogar(){
        echo msg_sucesso("Deslogado com sucesso");
        $_SESSION["usuario"] = "";
        $_SESSION["senha"] = "";
        $_SESSION["nivel"] = "";
    }

    //......................................................criptografia de senha 

    function gerarHash($s){
        $hash = password_hash($s, PASSWORD_DEFAULT);
        echo msg_sucesso("hash gerada com sucesso para a senha $s E sua senha criptografada é $hash");
        return $hash;
    }

    function testarHash($s, $confirma){
        $ok = password_verify($s, $confirma);
        if($ok == true){
        echo msg_sucesso("hash testada com sucesso");
        return true;
        }else{
            echo msg_erro("erro na hash");
        }
      
    }

?>