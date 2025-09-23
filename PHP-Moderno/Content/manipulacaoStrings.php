<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <h1>Manipulação de Strings</h1>
    <?php 
        $teste = "PHP\u{1F418}"; // Interpreta a String
        $teste0 = 'PHP\u{1F418}'; // Não interpreta a String
        const TESTE = "testando\u{1F991}"; 

        echo $teste . " e " . $teste0 . "</br>";  
        echo "TESTE " . ' TESTE  ' . TESTE; // Conteúdo da constante apenas aparede atraves do .

        $nome = "Rodrigo";
        $sobrenome = "Nogueira";
        echo "</br></br>";
        echo '$nome "Minotauro" $sobrenome';
        echo "</br>";
        echo "$nome \"Minotauro\" $sobrenome"; // \ é uma sequencia de escape

        echo "</br></br>";
        $curso = "PHP Moderno \u{1F418}";
        $ano = date('Y');
        echo <<< TESTE
            Estou estudando
                o $curso 
                    agora em $ano 
        TESTE;// String herdoc (ver no codigo fonte)

        echo "</br></br>";
        echo <<< 'TESTE'
            Estou estudando
                o $curso 
                    agora em $ano 
        TESTE;// String nowdoc (ver no codigo fonte)
    ?>
</body>
</html>