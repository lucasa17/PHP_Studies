<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php
        $bim1 = isset($_GET['1bin']) ? floatval($_GET['1bin']) : 0;
        $bim2 = isset($_GET['2bin']) ? floatval($_GET['2bin']) : 0;
        $bim3 = isset($_GET['3bin']) ? floatval($_GET['3bin']): 0;
        $bim4 = isset($_GET['4bin']) ? floatval($_GET['4bin']) : 0;

        echo "Nota 1: ". $bim1 ."</br>";
        echo "Nota 2: ". $bim2 ."</br>";
        echo "Nota 3: ". $bim3 ."</br>";
        echo "Nota 4: ". $bim4 ."</br>";

        $average = ($bim1+$bim2+$bim3+$bim4)/4;
        echo "Média: ". $average ."</br>";
        echo $average >= 6 ? 'Passou na matéria' : 'Não passou na matéria';

        echo "</br><a href='exercicio2.html'><button>Voltar</button></a>"
    ?>
    </body>
</html>