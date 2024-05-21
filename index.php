<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Atividade números</title>
</head>

<body>
    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="nume[]" /><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="nume[]" /><br>

        <label for="num3">Número 3:</label>
        <input type="number" name="nume[]" /><br>

        <label for="num4">Número 4:</label>
        <input type="number" name="nume[]" /><br>

        <label for="num5">Número 5:</label>
        <input type="number" name="nume[]" /><br>

        <input type="submit" name="submit" value="Validar" />
    </form>

    <?php
    function examina_numero($num)
    {
        $resultado = "";

        // Mostra se número é positivo, negativo ou neutro
        if ($num > 0) {
            $resultado .= "O número é positivo, ";
        } else if ($num < 0) {
            $resultado .= "O número é negativo, ";
        } else {
            $resultado .= "O número 0 é neutro, ";
        }

        // Mostra se número é par ou ímpar ou neutro
        if ($num == 0) {
            $resultado .= "o número é neutro, ";
        } else if ($num % 2 == 0) {
            $resultado .= "o número é par, ";
        } else {
            $resultado .= "o número é ímpar, ";
        }

        // Mostra se número é redondo ou não redondo
        if ($num == 0) {
            $resultado .= "o número é neutro.";
        } else if ($num % 10 == 0) {
            $resultado .= "o número é redondo.";
        } else {
            $resultado .= "o número não é redondo.";
        }
        return $resultado;
    }

    if (isset($_POST['submit'])) {
        $nums = $_POST['nums'];
        foreach ($nums as $index => $num) {
            if ($num !== "") { // Verifica se tem número nos campos
                echo "Para o número " . ($index + 1) . ": " . examina_numero($num) . "<br>";
            }
        }
    }
    ?>
</body>
</html>