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

    $g = new usuario;

    $g->usuario=$_GET["usuario"];
    $g->senha=$_GET["senha"];
    $g->senha = gerarhash($g->senha);
    $g->nivel=$_GET["nivel"];
  
    if ($g->usuario == "" and $g->senha == "" and $g->nivel == "") {
        header("location:usuarioCreateForm.php");
    } 

    
    if ($g->usuario == "" and $g->senha == "" and $g->nivel == "") {
        echo msg_alerta("existem campos em branco");
    } 
    else if($g->usuario != "" and $g->senha != "" and $g->nivel != "") {
        echo msg_sucesso("$g->usuario foi cadastrado com sucesso");
    
        $sql = "insert into usuario
            (usuario,senha,nivel)
            VALUES 
            ('$g->usuario','$g->senha','$g->nivel')";
        $executar = mysqli_query($conexao, $sql);

    }else{
        echo msg_erro("ERRO !! Contate o administrador do site");
    }
?>