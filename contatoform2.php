<?php
             $nome = $_GET ["nome"] ;
             $email = $_GET ["email"] ;
             $telefone = $_GET ["telefone"];
             $assunto = $_GET ["assunto"] ;
             $mensagem = $_GET ["mensagem"] ;
             
             require "conexao.php";
             require "funcoes.php";
             
             $sql = "insert into contato (nome , email , telefone , assunto , mensagem) values ('$nome' , '$email' ,'$telefone', '$assunto' , '$mensagem')";
             
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
             
             echo "<br> <br>";
             




        ?>