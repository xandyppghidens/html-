<?php
require "conexao.php";
require "funcoes.php";
     echo "<head> 
               <meta charset='UTF-8'>   
               <link rel='stylesheet' href='css/style.css'>

               <style> .mudar{
   margin-top: 20px;
   font-size: 20px;
} 
   

</style>
     </head>
     
     <body> 
           <h1> NUMEROS DE VISITAS  </h1>

          <a href='cadastrar.html'> <h1> voltar ao cadastro  </h1> </a>

           <div class = 'normal'> </div>

           <section class = 's100'> 

           <h1 class = 'tx1'> ID </h1>

            <div class = 'normal'> </div>



           
     
     </body>";

     require "conexao.php";
                          $sql = "select * from info";
                          $executar = mysqli_query($conexao , $sql);
 
                          while($id = $executar->fetch_object()){
                            echo "<div class='mudar'>
                            <h1>$id->id </h1>
                          </div>

                       
                       <hr>";
                          }

echo "</section>";

?>