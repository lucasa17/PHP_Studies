<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplos</h1>
    <?php
        //Tipos compostos   
        $vetor = [3e2, "Lucas", 3, true, 0x1A];
        var_dump($vetor);   

        echo "<br><br>";
        class Pessoa {
            private string $nome;

            public function __construct(string $nome) {
                $this->nome = $nome;
            }
        }
        $p = new Pessoa("Lucas");
        var_dump($p);
    ?>
</body>
</html>