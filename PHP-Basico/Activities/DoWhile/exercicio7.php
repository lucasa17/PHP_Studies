<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DoWhile</title>
</head>
<body>
    <fieldset>
        <form action="exercicio7.php" method="get">
            <label for="">Qual tabuada deseja?</label>
            <input type="number" name="numberValue">
            <input type="submit" value="Enviar">
        </form>
    </fieldset>

    <fieldset>
        <?php
            $number = isset($_GET['numberValue']) ? floatval($_GET['numberValue']) : null;
            $auxiliaryNumber = 0;
            if($number != null){
                do{
                    echo "<p>" . $number . " * " . $auxiliaryNumber . " = " . $number * $auxiliaryNumber . "</p>";
                    $auxiliaryNumber++;
                }while($auxiliaryNumber <= 10);
            }
        ?>
    </fieldset>
</body>
</html>