<?php
 require "sessao1.php";
 require "sessao2.php";
 require "sessao3.php";
 require "sessao4.php";
 require "conexao.php";
 require "funcoes.php";
?>
<html>
    <meta charset="UTF-8">

    <head>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/padrao.css">
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf8">
    </head>

    <body>


        <header class=" col-xl-12 fxw header">

        <div class="ml-xl-1  col-xl-3">
            <img src="fotos/logo.png" class="col-xl-2 logo1">
        </div>

        
        <div class="col-xl-6 ">
        <nav >
            <ul class="fxw">
                <li class="ml-xl-1 textoheader"> Home </li>
                <li class="ml-xl-1 textoheader"> GIFs  </li>
                <li class="ml-xl-1 textoheader"> Sobre nós </li>
                <li class="ml-xl-1 textoheader"> Ajuda  </li>
            </ul>
        </nav>

        </div>

        <div class="col-xl-2"> 
            <?php
                 @$usuario = $_SESSION["usuario"];
                 if($usuario != ""){
                     echo "Bem vindo $usuario";
                     echo "<a href= 'deslogar.php'> deslogar </a>";
                 }else{
                     echo "<a href= 'logar.php'>Logar</a>";
                 }
                ?>
        </div>


        </header>

        <section class="col-xl-12 s1 fxw">
            <?php
                $sql = "select * from sessao1";
                $executar = mysqli_query($conexao,$sql);
                while($m = $executar->fetch_object()){
                echo"
                <div class='col-xl-7'>
                     <img class = 'col-xl-6 logo2' src='fotos/$m->imagem1'>
                    <h1 class='col-xl-7 textoS2 centraliza'> $m->descricao</h1>
            </div>

            <div class='col-xl-4 fxw'>
                <h1> <img class='s1img' src='fotos/$m->imagem2' ></h1>
            </div>
                ";}
                ?>
            
        </section>
        <section class="col-xl-11 s2titulo">
            <?php
            $sql = "select * from sessao2titulo ";
            $executar = mysqli_query($conexao,$sql);
            while($s2titulo = $executar->fetch_object()){
                echo"
                <section class='col-xl-11 s2titulo'>
                    <div class='col-xl-5 '>
                        <h1 class='exemplo'> $s2titulo->titulo</h1>
                    </div>
                </section>
                ";
            }
            $sql = "select * from sessao2";
            $executar = mysqli_query($conexao,$sql);
            while  ($sessao2 = $executar-> fetch_object()){
                echo"
                    <section class='col-xl-11 s2 '>
                        <div class=' col-xl-5 fx'>
                            <h1> <img src='fotos/$sessao2->imagem' alt=''></h1>
                            <h1> seta </h1>
                         </div>
                    </section>
                ";
            }
        ?>

        <section class="col-xl-11 s3titulo">
            <?php
            $sql = "select * from sessao3titulo";
            $executar = mysqli_query($conexao,$sql);
            while($m = $executar->fetch_object()){
            echo "
            <div class='col-xl-5'>
                    <h1 class='exemplo'>$m->titulo</h1>
            </div>
            ";
            }
            ?>
        </section>
         <section class="col-xl-11 s3 ">
            <?php
            $sql = "select * from sessao3";
            $executar = mysqli_query($conexao,$sql);
            while($m = $executar->fetch_object()){
            echo "
            <div class=' col-xl-5 fx'>
                    <h1> <img src='fotos/$m->imagem' alt=''></h1>
                    <h1> seta </h1>
            </div>
            ";
            }
            ?>
        </section>

        <section class="col-xl-11 s4titulo">
            <?php
             $sql = "select * from sessao4titulo";
                $executar = mysqli_query($conexao,$sql);
                while($m = $executar->fetch_object()){
            echo ";
            <div class=' col-xl-5 '>
                    <h1 class='exemplo'>$m->titulo</h1>
            </div>
         ";
            }
         ?>
         </section>
            <section class='col-xl-11 s4 '>
            <?php
            $sql = "select * from sessao4";
                $executar = mysqli_query($conexao,$sql);
                while($m = $executar->fetch_object()){
            echo "
             <div class=' col-xl-5 fx'>
                    <h1> <img src='fotos/$m->imagem' alt=''></h1>
                    <h1> seta </h1>
            </div>
            ";
            }
            ?> 
        </section>
        <section class="col-xl-11 s5 titulo">
            <?php
            $sql = "select * from sessao5";
            $executar = mysqli_query($conexao,$sql);
            while($m = $executar->fetch_object()){
            echo "
            <div class=' col-xl-5 '>
                    <img class = 'col-xl-6 logo2' src='fotos/$m->imagem'>
                    <h1 class='col-xl-7 textoS2 centraliza'>$m->texto</h1>
                    <h1>$m->link</h1>
            </div>
            ";
            }
            ?>
        </section>

        <section class=" fxw">
            <div class="col-xl-5"> 
                </div>
                <div class="col-xl-5 inscrever" id="C">
                <h1 >Nome:</h1>
                <input class="textos" type="text" name="nome">
                <h1> E-mail: </h1>
                <input  class="textos" type="text" name="email">
                <h1> Telefone:</h1>
                <input class="textos" type="text" name="telefone">
                <h1>  Assunto:</h1>
                <input class="textos" type="text" name="assunto">
                <h1> Mensagem:</h1>
                <input class="louca" type="text" name="mensagem" size=200px>
                <br>
                <input class='boton' value='Inscrever-se' type="submit" >
            </form>
                </div>
            </section>
    </body>
</html>