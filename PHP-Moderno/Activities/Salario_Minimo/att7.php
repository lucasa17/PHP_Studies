<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Atividade 7</title>
</head>
<body>

    <?php
        $minimo = 1621;
        $salario = $_GET["salary"] ?? 0;
    ?>

    <main>
        <h1>Informe seu salário: </h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário</label>
            <input type="number" name="salary" id="salary" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário minimo de <strong><?=number_format($minimo, 2, ",", ".")?></strong> </p>
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            $total = intdiv($salario, $minimo);
            $dif = $salario % $minimo;

            $letter = $total > 1 ? "s" : "";  

            echo"<p>Salário: R\$ ". number_format($salario, 2, ",", ".") ."</br>
            Resultado: $total salário" . $letter . " mínimo" . $letter . " + R\$ ". number_format($dif, 2, ",", ".") ."</p>";
        ?>
    </section>
</body>
</html>