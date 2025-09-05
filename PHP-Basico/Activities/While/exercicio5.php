<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>While</title>
</head>
<body>
    <?php
        echo "<h1>Contagem Regressiva</h1>";
        $n = 10;
        while($n >= 0){
            echo $n . "</br>";
            $n -= 1;
        }
    ?>
</body>
</html>
