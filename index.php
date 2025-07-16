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
        <div class="normal"></div>
        <hr>
        <main>
            <section class="s1">
               <?php
                    $sql = "select * from sessao1";
                    $executar = mysqli_query($conexao , $sql);

                    while($obj1 = $executar->fetch_object()){
                    

                    echo "<div class='col-xl-6 fl'>
                    <img class='col-xl-5' src='imagem/$obj1->imagem'>
                </div>
                <div class='col-xl-6 fl'>
                    <h1>Sobre</h1>
                    <h3>";
                    
                    echo $obj1 -> descricao;
                    
                    echo "</h3>
                </div>";

                    }
               ?>
                
            </section>

            <div class="normal"></div>
    
          

            

            <div class="normal"></div>
         

            <section class="s7">

            <?php
                 $sql = "select * from sessao2";
                 $executar = mysqli_query($conexao , $sql);

                 echo "<div class='col-xl-12 s7'>
                <h1 class='tx1'> Serviços </h1>
                </div>";

                echo "<div class='normal'></div>";

                

                 while($obj2 = $executar->fetch_object()){
                 
                    echo "<div class='col-xl-4 fl centraliza'>
                             <img class='col-xl-3 b' src='imagem/$obj2->icon'>
                             <h1 class='tx2'> $obj2->titulo </h1>
                             <h2 class='tx3'> $obj2->descricao </h2>
                             <h3 class='tx4'> <span class='sp'> Preço </span> $obj2->preco </h3>
                         </div>";

           
                 }
            ?>
                     
                     

                    
            </section>

            <div class="normal"></div>
            <hr>
                 <div class="col-xl-12"> 
                 
                    <h1 class="tx5"> Portifolio  </h1> 
                
                 </div>

            <div class="normal"></div>
       
            
            <section>

                 <?php
                      $sql = "select * from sessao3";
                      $executar = mysqli_query($conexao , $sql);

                      
                      while($obj3 = $executar->fetch_object()){
                    
                        echo " <div class='col-xl-3 fl'>
                         
                        <img class='col-xl-6 im' src='imagem/$obj3->imagem'>
                    
                        </div>";

               
                     }


                  ?>
             </section>
                     


          <div class="normal"></div>
          <hr>
          <div class="col-xl-12"> 
                 
            <h1 class="tx7"> O que nossos usuarios dizem ?  </h1> 
        
         </div>

         <div class="normal"></div>
         <hr>

         <section>
         <?php
              $sql = "select * from sessao4";
              $executar = mysqli_query($conexao , $sql);


              while($obj4 = $executar->fetch_object()){
                    
                echo "<div class='col-xl-4 fl'>

                    <h1 class='tx8'>$obj4->paragrafo</h1>

                    <img class='col-xl-3 a' src='imagem/$obj4->imagem'>

                    <h1 class='text'> $obj4->nome </h1>

                    <h2 class='pf'> $obj4->cargo </h2>
                  </div>";

       
             }


         ?>

         </section>

         <div class="normal"></div>
         <hr>

         <div class="col-xl-12"> 
                 
            <h1 class="tx9"> CONTATO  </h1> 
        
         </div>

         <div class="normal"></div>
         <hr>

         <section class ="s10"> 
                <?php
                   $sql = "select * from sessao5";
                   $executar = mysqli_query($conexao , $sql);
                       
                   while($obj5 = $executar->fetch_object()){
                         
                    echo "<div class='col-xl-3 fl'>

                 <img class='col-xl-4 p' src='imagem/$obj5->icon'>
                 <h1 class ='tx20'> $obj5->informacao </h1>

                 </div>";
     
            
                  }

                ?>

                <?php
                     while($j = $executar->fetch_object()){
                        $imagemErro = imagemErro($j->capa);
                        echo "<tr> 
                        <td><img src='../imagem/$imagemErro'>
                        <td>$j->nome 
                        <td>ADM
                        <td>EDITOR";

                        if(estaLogado()){
                          
                        }

                        
                        
                        
                    }

                 ?>

                

          </section>

        <div class="normal"></div>
        <hr>

        <section class = "s30">
                 <div class="col-xl-12 fl">
                 <form class="fl" action="contato.php" method = "get">
                          <div class="col-xl-6 fl"> 
                            <input name="nome" class="fl text6" placeholder="Nome aqui">
                           </div> 
                        
                           <div class="col-xl-6 fl"> 
                           <input name = "email" class="fl text7" placeholder="Email aqui">
                           </div>

                          <div class = "col-xl-12">
                           <input name="assunto" class ="text8" placeholder="Assunto">
                          </div>
                           <br>
                           <br>
                         <div class ="col-xl-12">
                           <textarea name="mensagem" placeholder= "Mensagem" class="text2">  </textarea>
                         </div>
                           <input class="bt1" type="submit">

                      </form>
                 </div>
        </section>




        </main>
        <footer>

        </footer>
    </body>
</html>