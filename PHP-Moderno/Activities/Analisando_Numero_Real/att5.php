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

            echo "<p><strong>Valor original: </strong>" . number_format($number, 3, ',', '.') . "</p>";
            echo "<p><strong>Valor inteiro: </strong>" . number_format($numInt, 3, ',', '.') . "</p>";
            echo "<p><strong>Valor fracionário: </strong>" . number_format($numFloat, 3, ',', '.') . "</p>";
        ?>
        <h3><a href="javascript:history.go(-1)">Voltar para a página anterior</a></h3>
    </main>
</body>
</html>