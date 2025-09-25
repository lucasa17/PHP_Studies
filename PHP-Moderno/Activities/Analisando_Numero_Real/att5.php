<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Atividade 5</title>
</head>
<body>
    <header>
        <h1>Analisando número real</h1>
    </header>
    <main>
        <?php 
            $number = $_POST["number"] ? floatval($_POST["number"]):null ?? 0; 

            $numInt = (int) $number;
            $numFloat = $number - $numInt;

            echo "<p><strong>Valor original: </strong>" . $number . "</p>";
            echo "<p><strong>Valor inteiro: </strong>" . $numInt . "</p>";
            echo "<p><strong>Valor fracionário: </strong>" . $numFloat . "</p>";
        ?>
        <h3><a href="javascript:history.go(-1)">Voltar para a página anterior</a></h3>
    </main>
</body>
</html>