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
        <h1>Antecessor e Sucessor</h1>
    </header>
    <main>
        <?php 
            $num = $_POST["intnum"] ? intval($_POST["intnum"]):null ?? 0; 
            echo "<p><strong>Número:</strong> $num</p>";
            echo "<p><strong>Sucessor:</strong> " . $num + 1 . "</p>";
            echo "<p><strong>Antecessor:</strong> " . $num - 1 . "</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>