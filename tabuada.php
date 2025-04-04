<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taboada</title>
</head>
<body>
    <form method="POST">
        <input type = "text" name = "num">
        <button type="submit" >Montar tabuada</button>
    </form>
    <?php
    error_reporting(0);
    $numero = $_POST['num'];

    if(!isset($_POST['num'])){
        echo "informe um número";
        return;
    }

    while(true){
        echo " ";

    }
    ?>
</body>
</html>