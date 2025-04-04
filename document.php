<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class = "g">
    <div>
        <form method = "POST">
    <input type="text" name="Nome">
    <button type="submit">Enviar</button>
        </form>
    </div>
   </div>
</body>
</html>

<?php

$Nome = $_POST["Nome"];

echo $Nome;

//Criando

setcookie("usuário", $Nome, time()+60);

//Lendo



?>