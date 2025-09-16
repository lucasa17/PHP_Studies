<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
    <?php
        $vetor = array("a", "b", "c", "d", "e");
        print_r($vetor);

        echo "</br></br>";
        var_dump($vetor);

        echo "</br></br>";
        echo count($vetor);

        echo "</br></br>";
        array_push($vetor, 7); // adiciona no fim da array
        print_r($vetor);

        echo "</br></br>";
        array_pop($vetor); //retira o ultimo da array
        print_r($vetor);

        echo "</br></br>";
        array_unshift($vetor, 7); // adiciona no inicio da array
        print_r($vetor);

        echo "</br></br>";
        array_shift($vetor); // retira o adicionado
        print_r($vetor);

        echo "</br></br>";
        $array1 = array("cor" => "vermelho", 2, 4);
        $array2 = array("a", "b", "cor" => "verde", "forma" => "trapezoide", 4);
        $result = array_merge($array1, $array2); // juntar 2 arrays
        print_r($result);

        echo "</br></br>";
        $array3 = array(0 => 'zero_a', 1 => 'two_a', 3 => 'three_a');
        $array4 = array(2 => 'one_b', 4 => 'three_b', 5 => 'four_b'); // tem que estar com os indices seguidos
        $result2 = $array3 + $array4;
        print_r($result2);

        echo "</br></br>";
        $vetor2 = array(2,9,7,6,4,3);
        print_r($vetor2);
        
        echo "</br></br>";
        sort($vetor2); // poem em ordem crescente
        print_r($vetor2);

        echo "</br></br>";
        rsort($vetor2); // poem em ordem decrescente
        print_r($vetor2);

        echo "</br></br>";
        asort($vetor2); // poem em ordem crescente e mantem o indice original
        print_r($vetor2);

        echo "</br></br>";
        arsort($vetor2); // poem em ordem decrescente e mantem o indice original
        print_r($vetor2);

        echo "</br></br>";
        $teste = array(2 => 1, 0 => 5, 1 => 2);
        print_r($teste);
        echo "</br>";
        ksort($teste); // poem em ordem do indice original
        print_r($teste);

        echo "</br></br>";
        $teste = array(2 => 1, 0 => 5, 1 => 2);
        print_r($teste);
        echo "</br>";
        krsort($teste); // poem em ordem do indice original
        print_r($teste);
        ?>
</body>
</html>