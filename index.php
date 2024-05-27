<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Atividade números</title>
</head>

<body>

    <?php
    function parImpar($num)
    {
        if($num == 0){
            echo "O número $num é neutro. ";
        }
        else if( $num % 2 == 0){
            return "O número $num é par, " . redondoNao($num) . " e " . positivoNao($num);
        }else{
            return "O número $num é ímpar, " . redondoNao($num) . " e " . positivoNao($num);
        }
    }

    function redondoNao($num){
        if($num % 10 == 0){
            return "redondo";
        } else{
            return "não redondo";
        }
    }

    function positivoNao($num){
        if($num > 0){
            return "positivo.";
        }elseIF($num < 0){
            return "negativo.";
        }
    }

    //Variáveis que carregam valores para a aplicação
    $numeros = [5, 2, -4, 0, 20]; 

    //Execução da função
    foreach ($numeros as $num){
        echo parImpar($num) . "<br>";
   }
   
     
     
    ?>
</body>
</html>