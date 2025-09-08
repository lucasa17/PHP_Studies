<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function</title>
</head>
<body>
     <fieldset>
        <form action="exercicio9.php" method="get">
            <label for="">Qual tabuada deseja?</label>
            <input type="number" name="numberValue">
            <input type="submit" value="Enviar">
        </form>
    </fieldset>

    <fieldset>
        <?php
            $number = isset($_GET['numberValue']) ? floatval($_GET['numberValue']) : null;
            tabuada($number);

            function tabuada($number){
                if($number != null){
                    for($auxiliaryNumber = 0; $auxiliaryNumber <= 10; $auxiliaryNumber++){
                        echo "<p>" . $number . " * " . $auxiliaryNumber . " = " . $number * $auxiliaryNumber . "</p>";
                    }
                }
            }
        ?>
    </fieldset>
</body>
</html>