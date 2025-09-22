<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        $nome = "Lucas"; //variavel
        const PAIS = "Brasil"; //constante usada no global
        define("PI", 3.14); //constante usada em tempo real, dentro de funções por exemplo

        $nome = "José";
        echo "$nome";
        echo "<br> ". PAIS;
        echo "<br> ". PI; 
    ?>
</body>
</html>