<?php
    require "funcoes.php";
  //  if(nivelADM()){
    echo"
    <body class='body'>
<html>
    <head>
        <link rel='stylesheet' href='css/reset.css'>
        <link rel='stylesheet' href='css/padrao.css'>
        <link rel='stylesheet' href='css/style.css'>
    </head>
    <body>
        <section class='usuarios1 fxw centralizada'>
            <section class='div1 col-xl-4'>
                <img src='fotos/logo.png' class='img col-xl-11'>
            </section>
            <section class='div col-xl-4'>
                <form action='usuarioCreate.php'>
                <h1>Cadastrar novo Usuário</h1><br><BR>
                
                    <input type='text' name='usuario'  placeholder='usuário' class='input'><br><br><BR>
                   
                    <input name='senha' placeholder='senha' class='input'><br><br><BR><Br>
                   
                    <input name='nivel'  placeholder='nivel' class='input'><br><br><BR><br><br>
                    <br>
                    <input type='submit'  class='logar' value='Cadastrar Usuario'>
                </form>
            </section>
        </section>
    </body>
</html>

";
//}else{
      //  echo msg_erro("Acesso negado"); 
    //}
?>