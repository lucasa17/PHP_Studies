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
        <h1>Sorteador</h1>
    </header>
    <main>
        <?php 
            $minimo = $_POST["intMinimo"] ? intval($_POST["intMinimo"]):null ?? 0; 
            $maximo = $_POST["intMaximo"] ? intval($_POST["intMaximo"]):null ?? 1; 

            echo "<h2>Sorteando um valor aleatório entre $minimo e $maximo</h2>";
            echo "Número sorteado: " . rand($minimo, $maximo);

            echo "</br></br>";
            echo "<button onclick='location.reload()'>Sortear novamente</button>";
        ?>
        <p><a href="index.html">Escolher outro intervalo</a></p>
    </main>
</body>
</html>