<?php
$nome = $_GET ["nome"] ;
$email = $_GET ["email"] ;
$assunto = $_GET ["assunto"] ;
$mensagem = $_GET ["mensagem"] ;

require "conexao.php";
require "funcoes.php";

$sql = "insert into contato (nome , email, assunto , mensagem) values ('$nome' , '$email' , '$assunto' , '$mensagem')";

$executar = mysqli_query($conexao , $sql);

echo "Informações cadastradas com sucesso";

echo "<br> <br>";

echo " <a href = 'index.php'> <h1> Voltar ao index  </h1> </a>";




?>