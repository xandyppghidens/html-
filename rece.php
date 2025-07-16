<?php
require "conexao.php";
$nome = $_GET["nome"];
$senha = $_GET["senha"];
$email = $_GET["email"];

$sql = "insert into infor (nome , senha , email ) values ('$nome' , '$senha' , '$email')";

$conexao = mysqli_query( $conexao , $sql );

header("location: exe2.html");


?>