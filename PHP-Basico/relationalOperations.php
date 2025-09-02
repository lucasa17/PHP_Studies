<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relational Operations</title>
</head>
<body>
    <?php
        $a = 5;
        $b = 10;

        echo $a<$b ? '( '.true.' )':'( '.false.' )';//menor
        echo '</br>';
        echo $a<=$b ? '( '.true.' )':'( '.false.' )';//menor igual
        echo '</br>';

        echo $a>$b ? '( '.true.' )':'( '.false.' )';//maior
        echo '</br>';
        echo $a>=$b ? '( '.true.' )':'( '.false.' )';//maior igual
        echo '</br>';

        echo $a<>$b ? '( '.true.' )':'( '.false.' )'; //diferente
        echo '</br>';
        echo $a!=$b ? '( '.true.' )':'( '.false.' )'; //difertente
        echo '</br>';

        echo $a==$b ? '( '.true.' )':'( '.false.' )'; //igual   
        echo '</br>';
        echo $a===$b ? '( '.true.' )':'( '.false.' )'; //igual e do mesmo tipo     
        echo '</br>';
        echo '</br>';

        $c = 7;
        $d = 8;

        echo $c===$d || $c < $d ? '( '.true.' )':'( '.false.' )';
        echo '</br>';
        echo $c===$d && $c < $d ? '( '.true.' )':'( '.false.' )';
        echo '</br>';
        echo $c===$d xor $c < $d ? '( '.true.' )':'( '.false.' )';
        ?>
</body>
</html>