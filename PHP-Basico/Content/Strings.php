<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strings</title>
</head>
<body>
    <?php
        $text = "Teste, testando, teste";   
        $textWrap = wordwrap($text, 5, "</br>", false);//o numero remete a quantidade de caracteres
        echo $text . "</br>";
        echo $textWrap   . "</br>";

        $text1 = "Teste, testando, teste";   
        $textWrap = wordwrap("</br>" . $text, 3, "</br>", true);//true ele quebra toda linha a cada 3 carcteres, caso seja false ele deixa as palavras completas
        echo $textWrap   . "</br>";

        $text2 = "Teste, testando, teste";
        $length = strlen($text2);
        echo "</br>Tamanho da String: " . $length;

    ?>
</body>
</html>