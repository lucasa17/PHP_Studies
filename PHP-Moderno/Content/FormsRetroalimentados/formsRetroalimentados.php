<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Forms retroalimentado</title>
</head>
<body>
    <?php
        $num1 = $_POST["num1"] ?? 0; 
        $num2 = $_POST["num2"] ?? 0; 
    ?>
    <header>
        <h1>Forms Soma</h1>
    </header>
    <main>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="num1">Número 1</label>
            <input type="number" name="num1" value="<?= $num1 ?>">
            <label for="num1">Número 2</label>
            <input type="number" name="num2" value="<?= $num2 ?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section id="secSoma"> 
        <h2>Resultado da Soma: </h2>
        <?php
            $soma = $num1 + $num2;
            echo "<p>$num1 + $num2 = $soma</p>";
            echo"<hr>";
        ?>
    </section>
</body>
</html>