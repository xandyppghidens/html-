<?php
    $servidor ="localhost";
    $usuario ="root";
    $senha ="";
    $banco ="gesto";

    $gesto = new mysqli($servidor,$usuario,$senha,$banco);

    $gesto->query("SET NAMES 'utf8'");
    $gesto->query("SET character_set_connection=utf8");
    $gesto->query("SET character_set_client=utf8");
    $gesto->query("SET character_set_results=utf8");


    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
?>