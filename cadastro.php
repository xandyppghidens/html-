<?php
require "conexao.php";
require "funcoes.php";

$nome = $_GET ["nome"];
$email = $_GET["email"];
$telefone = $_GET["telefone"];


$sql = "insert into cadastro (nome , email, telefone) values ('$nome' , '$email' , '$telefone')";

$executar = mysqli_query($conexao , $sql);

echo "<head><link rel='stylesheet' href='css/reset.css'>
      <link rel='stylesheet' href='css/padrao.css'>
      <link rel='stylesheet' href='css/style.css'>
      <meta charset='utf8'> </head>
      
      
      <body class = 'fund'>

      <section class = 's200'>
           
      <img class = 'bom' src = 'imagem/laud.gif'>

     <a class = 'aaa' href = 'index.html'> <h1> Cadastrado com sucesso / voltar ao inicio </h1> </a>

     </section>

      </body>";






?>