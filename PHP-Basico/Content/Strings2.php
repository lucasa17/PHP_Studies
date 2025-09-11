<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strings</title>
</head>
<body>
    <?php
        $text = "TUDO MINUSCULO  TESTANDO";
        echo strtolower($text);

        echo "</br></br>";
        $text1 = "tudo maiusculo testando";
        echo strtoupper($text1);

        echo "</br></br>";
        $text2 = "lucas silva da rosa";
        echo ucfirst($text2); // Letra maiuscula no começo da primeira palavra

        echo "</br></br>";
        echo ucwords($text2); // Letra maiuscula no começo de todas as palvras

        echo "</br></br>";
        echo strrev($text2);// inverte

        echo "</br></br>";
        $text3 = "Testando código em PHP";
        echo strpos($text3,"PHP"); // mostra posição na string de onde a palavra do parametro 2 esta

        echo "</br></br>";
        $text4 = "Testando códigos em PHP para aprender PHP";
        echo substr_count($text4, "PHP"); // Conta quantas vezes a palavra aparece na string
        
        echo "</br></br>";
        $text5 = "Códigos para teste";
        echo substr($text5, 0, 20);  // segundo parametro mostra os caracteres,começo da string caso numero positivo e se negativo do fim,
                                    // terceiro parametro poem o tamanho da string

        echo "</br></br>";
        $text6 = "Guarana";
        echo str_pad($text6, 9, "p", STR_PAD_LEFT); // coloca caracteres desejados á esquerda
        echo "</br>";
        echo str_pad($text6, 9, "p", STR_PAD_RIGHT); // caracteres desejados á direita
        echo "</br>";
        echo str_pad($text6, 9, "p", STR_PAD_BOTH); // coloca desejados dividos em ambos os lados

        echo "</br></br>";
        echo str_repeat("PHP ", 5);    
        
        echo "</br></br>";
        $text7 = "Matemática é mo daora";
        echo $text7;
        echo "</br>";
        echo str_replace("Matemática", "PHP", $text7);

        


    ?>
</body>
</html>