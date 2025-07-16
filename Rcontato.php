<html>
     <head>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/padrao.css">
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf8">

     </head>

     <body>
           <header>
                  <h1> Menu aqui </h1>
                  
           </header>

           <main class="ad">
                 <div class="menu_lateral col-xl-3 fl centraliza">
                 <a href="paineladm.php"> <h1> Principal </h1> </a>
                 <a href="sessao1/painelsessao1.php"> <h1>Sessão 1</h1> </a>
                 <a href="sessao2/painelsessao2.php"> <h1>Sessão 2</h1> </a>
                 <a href="sessao3/painelsessao3.php"> <h1>Sessão 3</h1> </a>
                 <a href="sessao4/painelsessao4.php"> <h1>Sessão 4</h1> </a>
                 <a href="sessao5/painelsessao5.php"> <h1>Sessão 5</h1> </a>
                 <a href = 'index.php'> <h1> Voltar ao index <h1> </a>
                 <a href = '../Rcontato.php'> <h1> Contato <h1> </a>
                 </div>

                 <div class="principal col-xl-9 fl centraliza">
                      <h1> Bem vindo ao relatorio de contato </h1>

                      <div class="col-xl-3 fl centraliza Rcontato">
                           <h1> Nome </h1>
                      </div>

                      <div class="col-xl-3 fl centraliza Rcontato">
                           <h1> Email </h1>
                      </div>

                      <div class="col-xl-3 fl centraliza Rcontato">
                           <h1> Assunto </h1>
                      </div>

                      <div class="col-xl-3 fl centraliza Rcontato">
                           <h1> Mensagem </h1>
                      </div>

                      <hr>

                      <?php
                          require "conexao.php";
                          $sql = "select * from contato";
                          $executar = mysqli_query($conexao , $sql);
 
                          while($c = $executar->fetch_object()){
                            echo "<div class='col-xl-3 fl centraliza Rcontato'>
                            <h1>$c->nome </h1>
                          </div>
 
                        <div class='col-xl-3 fl centraliza Rcontato'>
                            <h1> $c->email </h1>
                       </div>
 
                       <div class='col-xl-3 fl centraliza Rcontato'>
                            <h1> $c->assunto </h1>
                       </div>
 
                       <div class='col-xl-3 fl centraliza Rcontato'>
                            <h1> $c->mensagem </h1>
                       </div>
 
                       <hr>
                       ";
                          }

                         

                      ?>

</div>
                      
           </main>

     </body>



</html>

