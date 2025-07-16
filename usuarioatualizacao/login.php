<html>
    <head>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/padrao.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
</html>

<?php
    require "conexao.php";
    require "funcoes.php";
    require "usuario.php";

    $usuario = $_GET["usuario"];
    $senha = $_GET["senha"];


    $sql = "select * from usuario where usuario = '$usuario'";
    $executar= mysqli_query($conexao,$sql);

    
    if($usuario == ""){
            echo msg_erro("usuario vazio");
        }
        else if($executar->num_rows != 1){
            echo msg_erro("usuario inexistente");
        }


    while($u = $executar-> fetch_object()){
        echo " O usuario é $u->usuario e a senha é $u->senha ";


        if(testarhash($senha,$u->senha)){
            echo msg_sucesso( " senha correto ");
            echo msg_sucesso("logado com sucesso");
                 $_SESSION["usuario"] = "$u->usuario";
                 $_SESSION["senha"] = "$u->senha";
                 $_SESSION["nivel"] = "$u->nivel";
        }else{
            echo msg_erro ("senha incorretos ");
    }
    }
     echo "<a href='index.php'>voltar</a>"
?>