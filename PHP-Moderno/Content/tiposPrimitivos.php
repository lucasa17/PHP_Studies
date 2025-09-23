<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplos</h1>
    <?php 
        // Tipos Primitivos
        $number0 = 3.14; // double
        var_dump($number0);

        echo "<br>";
        $number1 = 3e2; // notação cientifica 3 * 10 ^ 2
        var_dump($number1);

        echo "<br>";
        $num0 = 12; // int
        var_dump($num0);

        echo "<br>";
        $num1 = -1; // int
        var_dump($num1);

        echo "<br>";
        $num2 = 0x1A; // hexadecimal
        var_dump("" . $num2);

        echo "<br>";
        $aberto = true; // boolean
        var_dump($aberto);
        echo "<br>";
        $aberto = false; // boolean
        var_dump($aberto);

        echo "<br>";
        $estado = "RJ"; // string
        var_dump($estado);

        echo "<br>";
        $teste0 = "false"; // string
        var_dump($teste0);

        echo "<br>";
        $teste1 = ""; // string
        var_dump($teste1);

        echo "<br><br>";
        $teste2 = "1024"; // string
        var_dump($teste2);
        echo "<br>";
        $teste2 = (integer) $teste2; // cast para integer
        var_dump($teste2);
    ?>
</body>
</html>