<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch</title>
</head>
<body>
    <?php
        $dayOfTheWeek = isset($_GET['dayOfTheWeek']) ? intval($_GET['dayOfTheWeek']) : 0;

        switch($dayOfTheWeek){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Precisa ir para a escola";
            break;

            case 1:
            case 7:
                echo "Não precisa ir para a escola";
            break;

            default:
                echo "Erro na seleção de dia da semana";
            break;
        }
        echo "</br><a href='exercicio4.html'><input type='button' value='Voltar'></a>"
    ?>
</body>
</html>