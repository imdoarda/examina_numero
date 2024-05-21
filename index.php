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

    <?php

    // Bloco de declaração de função

    function examina_numeros($num)
    {
        if ($num > 0) {
            echo "O número informado é positivo";
        } elseif ($num < 0) {
            echo "O número informado é negativo";
        } else {
            echo "O número informado é neutro";
        }

        if ($num % 10 == 0) {
            echo "O número informado é redondo";
        } else {
            echo "O número informado não é redondo";
        }

        if ($num % 2 == 0) {
            echo "O número informado é par.";
        } else {
            echo "O número informado é ímpar.";
        }
    }

    //Variáveis que carregam valores para a aplicação
    $n1 = 5;
    $n2 = 2;
    $n3 = -4;
    $n4 = 0;
    $n5 = 3;

    //Execução da função
    examina_numeros($n1, $n2, $n3, $n4, $n5);
    ?>

</body>

</html>