<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>atividade números</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href=''>
</head>

<body>
    <form method="post">
        <label for="num">Digite um número:</label>
        <input type="number" name="num" />
        <input type="submit" name="submit" value="Validar" />
    </form>

    <?php

    //Mostra se número é positivo ou negativo

    $num = $_POST["num"];
    if ($num > 0) {
        echo "O número é positivo, ";
    } else if ($num < 0) {
        echo "O número é negativo, ";
    } else {
        echo "O número 0 é neutro,";
    }

    //Mostra se número é par ou ímpar

    $num = $_POST["num"];
    if ($num % 2 == 0) {
        echo "o número é par, ";
    } else {
        echo "o número é ímpar, ";
    }

    //Mostra se número é redondo

    $num = $_POST["num"];
    if ($num % 10 == 0) {
        echo "o número é redondo.";
    } else {
        echo "o número não é redondo.";
    }
    
    ?>

</body>

</html>