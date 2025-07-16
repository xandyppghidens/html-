<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        .calc-container {
            background: #fff;
            padding: 30px 40px;
            margin: 60px auto;
            width: 320px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        input[type="number"], select {
            width: 90px;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            padding: 8px 18px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .resultado {
            margin-top: 18px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="calc-container">
        <h2>Calculadora Simples</h2>
        <form method="post">
            <input type="number" name="num1" step="any" required placeholder="Número 1"
                value="<?php if(isset($_POST['num1'])) echo htmlspecialchars($_POST['num1']); ?>">
            <select name="operador">
                <option value="+" <?php if(isset($_POST['operador']) && $_POST['operador']=='+') echo 'selected'; ?>>+</option>
                <option value="-" <?php if(isset($_POST['operador']) && $_POST['operador']=='-') echo 'selected'; ?>>-</option>
                <option value="*" <?php if(isset($_POST['operador']) && $_POST['operador']=='*') echo 'selected'; ?>>×</option>
                <option value="/" <?php if(isset($_POST['operador']) && $_POST['operador']=='/') echo 'selected'; ?>>÷</option>
            </select>
            <input type="number" name="num2" step="any" required placeholder="Número 2"
                value="<?php if(isset($_POST['num2'])) echo htmlspecialchars($_POST['num2']); ?>">
            <button type="submit">Calcular</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = floatval($_POST['num1']);
            $num2 = floatval($_POST['num2']);
            $operador = $_POST['operador'];
            $resultado = '';

            switch ($operador) {
                case '+':
                    $resultado = $num1 + $num2;
                    break;
                case '-':
                    $resultado = $num1 - $num2;
                    break;
                case '*':
                    $resultado = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 == 0) {
                        $resultado = "Erro: Divisão por zero!";
                    } else {
                        $resultado = $num1 / $num2;
                    }
                    break;
                default:
                    $resultado = "Operação inválida!";
            }
            echo '<div class="resultado"><strong>Resultado: </strong>' . $resultado . '</div>';
        }
        ?>
    </div>
</body>
</html>