<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Atividade números</title>
</head>

<body>

    <?php
    function examina_numero($num)
    {
        if( $num % 2 == 0){
            echo "O número $num é par, ";
        }else{
            echo "O número $num é ímpar, ";
        }
        if($num % 10 == 0){
            echo "redondo e ";
        }else{
            echo "não redondo e ";
        }
        if($num > 0){
            echo "é positivo.  ";
        }elseif($num < 0){
            echo "é negativo.  ";
        }else{
            echo "é neutro.  ";
        }
       
    }
    //Variáveis que carregam valores para a aplicação
    $n1 = 5;
    $n2 = 2; 
    $n3 = -4; 
    $n4 = 0; 
    $n5 = 20; 

    //Execução da função
    examina_numero($n1); 
    examina_numero($n2); 
    examina_numero($n3); 
    examina_numero($n4); 
    examina_numero($n5); 
    ?>
</body>
</html>