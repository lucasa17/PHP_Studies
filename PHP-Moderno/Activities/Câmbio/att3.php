<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Formulário</title>
</head>
<body>
    <header>
        <h1>Câmbio Real para Dolar</h1>
    </header>
    <main>
        <?php 
            $money = $_POST["intMoney"] ? floatval($_POST["intMoney"]):null ?? 0; 
            echo "<p>Seus R$" . number_format($money, 2, ',') . " equivalem <strong>US$" .  number_format(($money/5.32), 2, ',') . "</strong></p>";
            echo "Usando o câmbio de 5,32 - dia 24/09/2025 ";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>