<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>
    <style>
        
        body {
            background:rgb(79, 79, 79);
            font-family: 'Segoe UI', Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: black;
            padding: 32px 28px;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            width: 340px;
        }
        .form-container h2 {
            margin-bottom: 18px;
            color: #333;
            text-align: center;
            font-weight: 600;
            
        }
        .form-group {
            margin-bottom: 18px;
            margin-right: 30px;
           
        }
        label {
            display: block;
            margin-bottom: 6px;
            color: black;
            font-size: 20px;
            color: white;


            
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccd6dd;
            border-radius: 6px;
            font-size: 15px;
            background: #f9fafb;
            transition: border-color 0.2s;
            
            
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #0078d7;
            outline: none;
            background: #fff;
           
        }
        button {
            width: 100%;
            padding: 12px;
            background: #0078d7;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            transition: 2s;
            cursor: pointer;
        }
        button:hover {
            transition: 2s;
            cursor: pointer;
             background:rgb(81, 6, 6);
            color: #fff;
        }

        .normal{
               block-size: cover;
               display: inline-block;
        }

        .bt2{
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 20px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 20px;
            padding-left: 140px;
            text-decoration: none;
            transition: 2s;
            cursor: pointer;
            background: #0078d7;
            color: white;
           
        }

        .bt2:hover{
            transition: 2s;
            cursor: pointer;
            background:rgb(81, 6, 6);
            color: #fff;
           
        }
    </style>
</head>
<body>
   


    <form class="form-container" action="outro.php" method="post">
        <h2>CADASTRO</h2>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">idade</label>
            <input type="text" id="email" name="idade" required>
        </div>
        <div class="form-group">
            <label for="senha">Telefone</label>
            <input type="text" id="senha" name="telefone" required>
        </div>
         <button type="submit">! CADASTRAR !</button>
         <br>
         <br>

         <a href="usuarioscad.php"> <h1 class="bt2"> ATIVAS </h1> </a>

    </form>

    

    <div class="normal"></div>
   
    
    
    

</body>
</html>