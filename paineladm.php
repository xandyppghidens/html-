<?php

require "sessao1/Sessao1.php";
require "sessao2/Sessao2.php";
require "sessao3/Sessao3.php";
require "sessao4/Sessao4.php";
require "sessao5/Sessao5.php";
require "conexao.php";

require "funcoes.php";

echo "Bem vindo ".$_SESSION["usuario"];

echo "<br>
<br>
<br>";

if(!estaLogado()){
   echo "<a href = 'login/usuarioLoginForm.php'> <li> Logar  </li>   </a>";
}else{
   echo "<div class = 'fl centraliza col-xl-1 ds '>";

   echo "<a href = 'login/deslogar.php'> <h1>  Deslogar </h1>  </a>";

   echo "</div>";
  
   echo "<div class = 'fl centraliza col-xl-1 ds '>";

   echo " <a href = 'login/usuarioeditarform.php'> <h1> Editar usuario <h1> </a> ";
   
   echo "</div>";

   echo "<div class = 'fl centraliza col-xl-1 ds '>";

   echo " <a href = 'login/usuarioexcluirform.php'> <h1> Excluir usuario <h1> </a> ";
   
   echo "</div>";
  
   echo "<div class = 'fl centraliza col-xl-1 ds'>";

   echo " <a href = 'login/usuarioLoginForm.php'> <h1> Logar com usuario <h1> </a> ";
   
   echo "</div>";
   
   echo "<div class = 'fl centraliza ds col-xl-1 '> ";
   
   echo " <a href = 'login/usuarionovoform.php'> <h1> Criar novo usuario <h1> </a> ";
  
   echo "</div>";
   
   echo " <div class = 'fl centraliza col-xl-1 ds'> ";
   
   echo " <a href = 'paineladm.php'> <h1> Ir para Painel adm <h1> </a> ";

   echo "</div>";

   echo "<div class = 'normal'> </div>";
}

?>



<html>
     <head>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/padrao.css">
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf8">

     </head>

     <body>
           <header>
           <div class="normal"> </div>
            <div class="col-xl-3 fl centraliza">
                <img class="col-xl-4 fl" src="imagem/logo.jpg">
            </div>
            <div class="col-xl-9 fl centraliza">
                <nav>
                    <ul>
                        <li>Inicio</li>
                        <li>Sobre</li>
                        <li>Serviço</li>
                        <li>Portfolio</li>
                        <li>Depoimento</li>
                        <li>Contato</li>
                        
                    </ul>
                </nav>
            </div>
        
                  
           </header>

           <div class="normal"> </div>

           <main class="ad">
                 <div class="menu_lateral col-xl-3 fl centraliza">
                 <a href="paineladm.php"> <h1> Principal </h1> </a>
                 <a href="sessao1/painelsessao1.php"> <h1>Sessão 1</h1> </a>
                 <a href="sessao2/painelsessao2.php"> <h1>Sessão 2</h1> </a>
                 <a href="sessao3/painelsessao3.php"> <h1>Sessão 3</h1> </a>
                 <a href="sessao4/painelsessao4.php"> <h1>Sessão 4</h1> </a>
                 <a href="sessao5/painelsessao5.php"> <h1>Sessão 5</h1> </a>
                 <a href = 'index.php'> <h1> Voltar ao index <h1> </a>
                 <a href = 'Rcontato.php'> <h1> Contato <h1> </a>
                 </div>

                 <div class="principal col-xl-9 fl centraliza">
                      <h1> </h1>
                      <img class="col-xl-7 vd" src="imagem/jogos.jpg">
                 </div>
           </main>

     </body>



</html>