<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php
        $year = isset($_GET['year']) ? $_GET['year'] : 'Ano não encontrado ou valor inválido';
        
        echo 'Ano digitado: ' . $year . '</br>  ';
        echo 'Sua idade é ' . (date("Y") - $year) . '</br>  ';

        echo (date("Y") - $year) >= 18 ? 'Pode votar' : 'Não pode votar';
                
        echo "</br><a href='exercicio1.html'><input type='button' value='Voltar'></a>"
    ?>
    </body>
</html>