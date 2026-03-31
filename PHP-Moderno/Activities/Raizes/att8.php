<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Atividade 8</title>
</head>
<body>
    <?php
    
        $number = $_GET["num"] ?? 0;
    
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="num" id="num" value="<?=$number?>">
            <input type="submit" value="Checar">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            $rq = $number ** (1/2);
            $rc = $number ** (1/3);

            echo"<p>Número: $number </br>
            Raiz quadarada: ". number_format($rq, 2, ",", ".") ."</br>
            Raiz cúbica: ". number_format($rc, 2, ",", ".") ."";
        ?>
    </section>
</body>
</html>