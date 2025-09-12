<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<?php
    $teste[0] = 0;
    $teste[1] = 1;
    $teste[2] = 2;
    $teste[3] = 3;

    print_r($teste);
    echo "</br></br>";

    $teste1 = array(1,2,3,4,5,6);
    print_r($teste1);

    $teste1 [] = 7;
    echo "</br></br>";
    print_r($teste1);

    $teste2 = range(0, 20, 2);  // Primeiro parametro indica valor inicial [0] 
                                // Segundo parametro indica ultimo valor do vetor
                                // Terceiro parametro indica valor entre os numeros do vetor (opcional)
    echo "</br></br>";
    print_r($teste2);

    echo "</br></br>";

    echo"<table border= 2> <tr>";
    $teste3 = range(0, 15, 3);
    foreach($teste3 as $num){
        echo "<td>$num</td>";
    }
    echo"</tr> </table>";

    echo "</br>";
    $teste4 = array(1=> "Lucas", 4=>"José", 6=>"Luís");
    $teste4[2] = "Johann";
    $teste4[] = "Alisson";
    print_r($teste4);

    unset($teste4[7]);
    echo "</br>";
    print_r($teste4);

    echo "</br></br>";
    $testeAssociativo = array("nome"=>'Lucas', "idade"=>19, "altura"=>1.71);
    $testeAssociativo["Filhos"] = 0; 
    print_r($testeAssociativo);

    foreach($testeAssociativo as $campo => $valor){
        echo "</br>[$campo] =  $valor";
    }

    echo "</br></br>";
    $teste5 = array(array(2,3), array(4,5), array(6,3));
    $teste[2][0] = 1
    print_r($teste5);

?>    
</body>
</html>
