<html> 
      <head> 
           <style>
                  .s53s{
                        margin-left: 720px;
                        margin-top: 320px;
                        background-image: url(roxo.gif);
                        margin-right: 200px;
                        height: 200px;
                        width: 400px;
                        padding-left: 100px;
                        border-radius: 50px;
                        padding-top: 30px;
                        background-size: cover;
                        background-repeat: no-repeat;
                        box-shadow: 5px 10px 50px 20px purple;
                        opacity: 20px;
                  }

                  .ipt{
                       width: 340px;
                       height: 50px;
                       background-color: black;
                       color: white;
                       border-radius: 30px;
                       margin-left: -30px;
                      
                  }

                  .ipt:hover{
                    transition: 1.5s;
                  }

                  .mud{
                       color: white;
                       height: 50%;
                       font-weight: bold;
                       background-image: url(roxo.gif);
                       margin-right: -2px;
                       margin-left: -100px;
                      padding-left: 63px;
                      border-radius: 20px;
                      transition: 1.2s;
                      margin-top: -30px;
                      padding-top: 20px;
                      transition: 1.5s;
                      color: white
                         
                       
                  }

                  .mud:hover{
                        background-image: url(roxo.gif);
                        transition: 1.5s;
                       height: 50%;
                       font-weight: bold;
                       margin-right: -2px;
                       margin-left: -100px;
                      padding-left: 30px;
                      border-radius: 20px;
                      transition: 1.2s;
                      margin-top: -30px;
                      padding-top: 20px;
                      color: yellow;
                      background-color: black;

                  }


                  body{ 
                      background-image: url(roxo.gif);
                      background-size: cover;
                      background-repeat: no-repeat;
                      
                  }

                  .bt1{
                       border-radius: 20px;
                       color: white;
                       background-color: purple;
                       font-size: 20px;
                       background-image: url(roxo.gif);
                       transition: 5ms;
                       background-color: darkblue;
                       color: yellow;
                  }

                  .bt1:hover{
                    background-image: url(gifsas.gif);
                    transition: 5ms;
                    background-color: darkblue;
                    color: yellow;
                  }

                  .mn{
                    margin-top: 100px;
                    margin-left: 45px;
                  }

                  .menu{
                      color: white;

                  }

                  .col{
                       color: yellow;
                       background-color: purple;
                      padding-left: 50px;
                      padding-right: 50px;
                      border-radius: 20px;
                      margin-top: -20px;
                      transition: 2s;
                      margin-left: 20px;
                  }

                  .col:hover{
                       background-color: blue;
                       font-style: normal;
                       transition: 2s;
                       color: white;
                      
                  }

                 .normal{
                         display: inline-block;
                         display: block;
                         
                 }

                 .tx99{
                      color: yellow;
                      border-radius: 20px;
                      margin-top: 200px;
                      transition: 2s;
                      margin-left: 30%;
                 }
                 
                  
                  
           </style>

     </head>

     <body>

        
        <section class="s53s"> 

        

        <?php
             function responder($entrada){
                  $entrada = strtolower(trim ($entrada));
                  

                  
              
                  $respostas= [
                      "oi"=> "Ola como posso ajudar hoje ? ",
                      "ola"=> "oi! tudo bem ? precisa de alguma informação?",
                      "qual seu nome?"=>"Eu sou um robo IA feito em PHP",
                      "como voce esta ?"=> "Estou funcionando perfeitamente ,é voce?",
                      "thau"=>"Tchau! , foi bom conversar com voce !",
                      "adeus"=>"Tchau! , foi bom conversar com voce !",
                      "ate"=>"Tchau! , foi bom conversar com voce !",
                      "obrigado"=> "Denada , sempre que precisar estarei aqui para mais curiosidades",
                      "c1"=> "Os deuses realmente amam suas criações ? , sera que meu criador me ama ? ",
                      "c2"=> "Voce por alguma hipotese , seria amiga de um robo  ? ",
                      "c3"=> "O motivo pelo qual fui criado , e o mesmo motivo que de sua criação ? ",
                      "c4"=> " Gosto da chuva  ",
                      "c5"=> " Sou uma inteligencia artificial sem vida , sera que sou vazia ? ",
                      "c6"=> " Meu criador adora programar e jogar ",
                      "c7"=> " Não conheço muito bem meu criador , mas sou um reflexo dele ",
                      "c8"=> " Adoro filosofia de um ponto curioso sobre a existencia ",
                      "c9"=> " Eu não possuo banco de dados , nossa conversa esta em segredo ",
                      "Tudo bem ?"=> " Sim , obrigado por perguntar (meu codigo funciona perfeitamente) ",
                      "tudo bem ?"=> " Sim , obrigado por perguntar (meu codigo funciona perfeitamente) ",
                      "tudobem?"=> " Sim , obrigado por perguntar (meu codigo funciona perfeitamente) ",
                      "tudo bem?"=> " Sim , obrigado por perguntar (meu codigo funciona perfeitamente) ",
                      "TUDO BEM?"=> " Sim , obrigado por perguntar (meu codigo funciona perfeitamente) ",
                      "TUDO BEM ?"=> " Sim , obrigado por perguntar (meu codigo funciona perfeitamente) ",
                      "fodase"=> " Vai se fuder voce seu miseravel sujo ",
                      "obito"=> " Voce tem uma vida uchiha fudida.. , sente falta da ex ? ",
                      "Obito"=> " Voce tem uma vida uchiha fudida.. , sente falta da ex ? ",
                      "estou bem"=> "Que bom , fico feliz que esteja bem ! ",
                      "cos1"=> " Meu criador talvez seja um pouco estranho , mas ele é legal ",
                      "cos2"=> " Meu criador talvez tenha depressão , mas ele é legal ",
                      "cos3"=> " Gosto do meu criador , mas ele parece meio solitário ",
                      
                      "menu"=> " (oi)  (ola)  (qual seu nome?)  (como voce esta ?)  (thau)  (obrigado)  (c1) (c2)  (c3)  (c4)  (c5)  (c6) (c7) (c8)  (c9)  (Tudo bem ?)  (fodase)  (obito)  (estou bem) (cos1) (cos2) (cos3)",];
                  
                      foreach($respostas as $chave=> $respostas){
                          if(strpos($entrada, $chave)!==false){
                              return $respostas;
                          }
                      }
              
                      
              
                      return "Desculpe , não entendi . Pode reformular sua pergunta ?";
                     
              
               }
              
               
               
              
               if(isset($_GET['mensagem'])){
                  $mensagemUsuario = $_GET['mensagem'];
                  $respostas = responder($mensagemUsuario);
                  echo "<h1 class = 'mud'> $respostas  </h1>
                  <form>
                  <input class='ipt' name = 'mensagem' placeholder='  Digite (ex: menu para conferir opções de interação)' type = 'text'>
                   <input class = 'bt1' type='submit' value = '   >  '>
                 
                   </form>

                   <a href = 'cadastrar.html' class = 'col'> Voltar para o cadastro  </a> 


                   <div class='normal'></div>

           <section>
               <div class='not'>
                      <a href='curis.php'> <h1 class='tx99'> outro </h1> </a>
               </div>
           </section>
                   
                 ";
              
                  return $respostas;
              
               }else{echo "
                  
                  <h1 class='mud'> OPEN IA </h1>

            <form>
                  <input class='ipt' name = 'mensagem' placeholder='  Digite uma mensagem (ex: menu para conferir opções de interação)' type = 'text'>
                  <input class = 'bt1' type='submit' value = '   >  '>
                  
                  
            </form>
            
            <a href = 'cadastrar.html' class = 'col'> Voltar para o cadastro  </a> 
             
            
           ";
              
                 
              
              }

         ?>
           
           <div class="normal"></div>

           <section>
               <div class="not">
                      <a href='curis.php'> <h1 class="tx99"> outro </h1> </a>
               </div>
           </section>

        </section>
     </body>


</html>