<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Atividade 6</title>
</head>
<body>
    <?php
        $dividendo = floatval($_POST["dividendo"]) ?? 0; 
        $divisor = floatval($_POST["divisor"]) ?? 0; 
    ?>
    <header>
        <h1>Anatomia de uma Divisão</h1>
    </header>
    <main>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="num1">Dividendo</label>
            <input type="number" name="dividendo" step="0.10" value="<?= $dividendo ?>">
            <label for="num1">Divisor</label>
            <input type="number" name="divisor" step="0.10" value="<?= $divisor ?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section id="secDivisao"> 
        <h2>Anatomia da Divisão:</h2>
        <?php
            $quociente = $dividendo / $divisor;
            $resto = $dividendo % $divisor;
        ?>
        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $quociente ?></td>
            </tr>
        </table>
    </section>
</body>
</html>