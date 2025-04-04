<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade</title>
    <link rel="stylesheet" href="style.css"> 
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f0f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
    text-align: center;
}

h1 {
    color: #4CAF50;
    margin-bottom: 20px;
    font-size: 2rem;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

label {
    font-size: 1.1rem;
    color: #333;
}

input[type="date"] {
    padding: 12px;
    border: 2px solid #ccc;
    border-radius: 5px;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Idade</h1>
        <form method="post">
            <label for="data_nascimento">Informe sua data de nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>
            <button type="submit">Calcular Idade</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data_nascimento = $_POST['data_nascimento'];

            
            if (!empty($data_nascimento)) {
                
                $data_nasc = new DateTime($data_nascimento);
                $hoje = new DateTime();
                $idade = $hoje->diff($data_nasc);

                echo "<p>A sua idade é: " . $idade->y . " anos.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
