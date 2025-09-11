<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strings</title>
</head>
<body>
    <?php
        $text = "Teste, testando, teste";   
        $textWrap = wordwrap($text, 5, "</br>", false); //o numero remete a quantidade de caracteres
        echo $text . "</br>";
        echo $textWrap   . "</br>";

        $text1 = "Teste, testando, teste";   
        $textWrap = wordwrap("</br>" . $text, 3, "</br>", true); //true ele quebra toda linha a cada 3 carcteres, caso seja false ele deixa as palavras completas
        echo $textWrap   . "</br>";

        $text2 = "Teste, testando, teste";
        $length = strlen($text2);
        echo "</br>Tamanho da String: " . $length . "</br>";

        $text3 = "xxxLucasxSilvaxdaxRosaxxx</br>";
        echo "</br>Texto usado: " . $text3 . "Left trim: " . ltrim($text3, 'x') . "";
        echo "Right trim: " . rtrim($text3, 'x') . "</br>";
        
        $text4 = "Estou estudando PHP";
        echo 'Frase usada: "' . $text4 . '"';
        echo "</br>Número de palavras: " .str_word_count($text4, 0);//Conta as palavras
        echo "</br>";
        $array1[] = str_word_count($text4, 1); //coloca as palavras num array
        print_r($array1);
        echo "</br>";
        $array2[] = str_word_count($text4, 2); //coloca num array associativo, onde a chave é a posição numérica da palavra dentro da string e o valor é a própria palavra 
        print_r($array2);

        $text5 = "Lucas Silva da Rosa";
        echo "</br></br>Frase usada: " . $text5 . "</br>";
        $vetorText5 = explode(" ", $text5);
        print_r($vetorText5);

        $text6 = "Lucas";
        echo "</br></br>Palavra usada: " . $text6 . "</br>";
        print_r(str_split($text6));

        echo "</br></br>";

        $vetTeste[0] = "Testando";
        $vetTeste[1] = "Implode";
        $vetTeste[2] = "no";
        $vetTeste[3] = "PHP";
        print_r(implode(" ", $vetTeste)); //primeiro parametro é o que estara entre as posiçoes do vetor

        $charQualquer = chr(65); // Escreve char a partir do código
        echo "</br></br>" . $charQualquer;

        $letraQualquer = "A"; // Escreve código da letra a partir da letra
        echo "</br></br>" . ord($letraQualquer);
    ?>
</body>
</html>