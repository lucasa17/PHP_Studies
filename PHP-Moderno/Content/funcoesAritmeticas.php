<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Funções</h1>
    <?php 
        echo "Valor absoluto: " . abs(-100);
        echo "</br></br>";

        // param1 = valor, param2 = base, param3 = base que vai se tornar
        echo "Decimal(254) para octal: " . base_convert(254, 10, 8); 
        echo "</br>";
        echo "Decimal(254) para hexa: " . base_convert(254, 10, 16); 
        echo "</br>";
        echo "Decimal(254) para binario: " . base_convert(254, 10, 2); 

        echo "</br></br>";
        echo "Arredondando 5.55 ";
        echo "<br>Para cima: " . ceil(5.55);
        echo "<br>Para baio: " . floor(5.55);
        echo "<br>Arredondando padrão: " . round(5.55);

        echo "</br></br>";
        echo "Hipotenusa de catetos 4 e 3 =  " . hypot(4, 3);

        echo "</br></br>";
        echo "Divisão inteira: " . intdiv(5, 2);
        echo "</br>";
        echo "Divisão normal: " . 5/2;

        echo "</br></br>";
        $vetor = [1, 6, 9, 3, 0, 7];
        print_r($vetor);
        echo "</br>";
        echo "Valor minimo: " . min($vetor);
        echo "</br>";
        echo "Valor maximo: " . max($vetor);
        
        echo "</br></br>";
        echo "PI: " . M_PI;
        echo "</br>";
        echo "PI: " . pi();

        echo "</br></br>";
        echo "Seno: " . sin(M_PI / 4);
        echo "</br>";
        echo "Cosseno: " . cos(M_PI / 4);
        echo "</br>";
        echo "Tangente: " . tan(M_PI / 4);

        echo "</br></br>";
        echo "Raiz quadrada 81: " . sqrt(81);
    ?>
</body>
</html>