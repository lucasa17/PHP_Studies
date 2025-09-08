<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        test(2,9,4,6,7,8,4,554);
        function test(){
            $values = func_get_args();
            $total = func_num_args();
            echo "Quantidade de valores passados: " . $total . "</br>";
            for($i = 0; $i < $total; $i++){
                echo "Valor " . $i+1 . ": " . $values[$i] . "</br>";
            }
        }
    ?>
</body>
</html>