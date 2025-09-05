<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch</title>
</head>
<body>
    <?php
        $number = isset($_GET['number']) ? floatval($_GET['number']) : 0;
        $operation = isset($_GET['operation']) ? intval($_GET['operation']) : null;

        echo "Valor digitado: " . $number;
        switch($operation){
            case 0:
                echo "</br>Dobro: " . $number * 2;
            break;
            
            case 1:
                echo "</br>Raiz quadrada: " . sqrt($number);
            break;

            case 2:
                echo "</br>Ao cubo: " . pow($number, 3);
            break; 

            default:
                echo "</br>Erro na seleção de operação";
            break;
        }
        echo "</br><a href='exercicio3.html'><input type='button' value='Voltar'></a>"

    ?>
</body>
</html>