<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(240, 83, 161);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h1 {
            color: #FF66B2;
        }
        input{
            padding: 10px;
            margin: 10px;
            width: 80%;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        select, button {
            padding: 10px;
            margin: 10px;
            width: 80%;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        button {
            background-color: #FF66B2;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #FF3385;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2em;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Conversor de Temperatura</h1>
        
        <form method="post">
            <input type="number" name="valor" step="any" placeholder="Digite o valor" required>
            
            <select name="de" required>
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
                <option value="kelvin">Kelvin</option>
            </select>
            
            <select name="para" required>
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
                <option value="kelvin">Kelvin</option>
            </select>
            
            <button type="submit" name="converter">Converter</button>
        </form>
        
        <?php
        if (isset($_POST['converter'])) {
            $valor = $_POST['valor'];
            $de = $_POST['de'];
            $para = $_POST['para'];
            
            $resultado = 0;

            
            if ($de == 'celsius') {
                if ($para == 'fahrenheit') {
                    $resultado = ($valor * 9/5) + 32;
                } elseif ($para == 'kelvin') {
                    $resultado = $valor + 273.15;
                } else {
                    $resultado = $valor;
                }
            } elseif ($de == 'fahrenheit') {
                if ($para == 'celsius') {
                    $resultado = ($valor - 32) * 5/9;
                } elseif ($para == 'kelvin') {
                    $resultado = ($valor - 32) * 5/9 + 273.15;
                } else {
                    $resultado = $valor;
                }
            } elseif ($de == 'kelvin') {
                if ($para == 'celsius') {
                    $resultado = $valor - 273.15;
                } elseif ($para == 'fahrenheit') {
                    $resultado = ($valor - 273.15) * 9/5 + 32;
                } else {
                    $resultado = $valor;
                }
            }
            
            echo "<div class='result'>Resultado: $resultado $para</div>";
        }
        ?>
    </div>
</body>
</html>
