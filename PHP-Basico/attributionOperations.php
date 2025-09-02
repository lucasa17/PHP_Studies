<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attribution Operations</title>
</head>
<body>
    <?php
        $a = 1;
        $b = 2;
        $c = 3;
        $c += 5;
        
        $a += $b;

        echo 'Antes A = ' . $a . ' Antes B = ' . $b . '</br>';
        echo 'A = ' . ++$a . ' e ' . $a++ . '</br>';
        echo 'B = ' . $b-- . ' e ' . --$b . '</br>';
        echo 'Depois A = ' . $a . ' Depois B = ' . $b . '</br></br>';

        $d = 3;
        $e = &$d;
        $e += 5;
        echo 'D = ' . $d . ' </br>E = ' . $e . '</br></br>';

        $teste = 'Lucas';
        $$teste = 'Rosa';

        echo $teste;
        echo '</br>';
        
        echo $Lucas;
    ?>
</body>
</html>
