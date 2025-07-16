<?php

       require "conexao.php";
                          $sql = "select * from infor";
                          $executar = mysqli_query($conexao , $sql);
 
                          while($c = $executar->fetch_object()){
                            echo "<div class='col-xl-3 fl centraliza Rcontato'>
                            <h1>$c->nome </h1>
                          </div>
 
                        <div class='col-xl-3 fl centraliza Rcontato'>
                            <h1> $c->email </h1>
                       </div>
                       ";

                          }

                          



?>