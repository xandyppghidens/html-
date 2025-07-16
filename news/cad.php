<?php
require "conexao.php";
$nome = $_GET["nome"];
$senha = $_GET["senha"];

$sql = "insert into cad (nome,senha) values ('$nome' , '$senha')";

$executar = mysqli_query($conexao , $sql);

echo " Tudo chegou ao banco ";
?>

