<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetical Operations</title>
</head>
<body>
    <?php

    $num1 = 10;
    $num2 = 5;
    echo 'Valor1: '.$num1.'</br>Valor2: '.$num2.'</br>';
    echo $num1 + $num2 . '</br>';
    echo $num1 - $num2 . '</br>';
    echo $num1 * $num2 . '</br>';
    echo $num1 / $num2 . '</br>';
    echo $num1 % $num2 . '</br>';
    echo ($num1 + $num2)/2 . '</br>';

    //Para pegar o get basta escrever n URL:num3=..&num4=..
    $num3 = $_GET['num3'];
    $num4 = $_GET['num4'];
    echo '</br>Valor3: '.$num3.'</br>Valor4: '.$num4.'</br>';
    echo $num3 + $num4 . '</br>';
    echo $num3 - $num4 . '</br>';
    echo $num3 * $num4 . '</br>';
    echo $num3 / $num4 . '</br>';
    echo $num3 % $num4 . '</br>';
    echo ($num3 + $num4)/2 . '</br>';

    $num5 = $_GET['num5'];
    echo '</br>Valor5: '.$num5.'</br>';
    echo abs($num5). '</br>';
    echo pow($num5, 2). '</br>';
    echo sqrt(abs($num5)). '</br>';
    echo round(sqrt(abs($num5))). '</br>';
    echo '</br>10000 em formatação de moeda: '. number_format(10000,2,',','.');
    ?>
</body>
</html>
