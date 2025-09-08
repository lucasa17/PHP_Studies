<?php
    function test(){
        $values = func_get_args();//Valores passados fazendo um vetor
        $total = func_num_args();//Quantidade de valores no vetor
        echo "Quantidade de valores passados: " . $total . "</br>";

        for($i = 0; $i < $total; $i++){
            echo "Valor " . $i+1 . ": " . $values[$i] . "</br>";
        }
    }

    function tabuada($number){
        if($number != null){
            for($auxiliaryNumber = 0; $auxiliaryNumber <= 10; $auxiliaryNumber++){
                echo "<p>" . $number . " * " . $auxiliaryNumber . " = " . $number * $auxiliaryNumber . "</p>";
            }
        }
    }
?>