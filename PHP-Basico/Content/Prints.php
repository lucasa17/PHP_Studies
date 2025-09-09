<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Printf</title>
</head>
<body>
    <?php
        $item = "Açucar";
        $valor = 5.55;
        printf("Custo do %s: %.2f",$item, $valor);
        printf("</br>Custo do %s: %u", $item, $valor);//não printa número negativo
        printf("</br>Custo do %s: %d", $item, $valor);
        printf("</br></br>");

        $x[0] = 6;
        $x[1] = 7;
        $x[2] = 8;
        print_r($x);

        printf("</br>");
        
        $vet = array(1,2,3,4,5);
        print_r($vet);

    ?>  
</body>
</html>
