<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>While</title>
</head>
<body>
    <h1>Faça uma contagem progressiva ou regressiva</h1>
    <fieldset>
        <h3>Esolha uma opção: </h3>
        <form action="exercicio6.php" method="get">
            <input type="radio" name="countType" value=1>
            <label for="">Contagem Progressiva</label>
            </br>
            <input type="radio" name="countType" value=2>
            <label for="">Contagem Regressiva</label>
            </br>
            <input type="submit" value="Enviar">
        </form>
        <div>
            <?php
                $countType = isset($_GET['countType']) ? intval($_GET['countType']) : 0;
                
                switch($countType){
                    case 1:           
                        echo "<h3>Contagem Progressiva:</h3>"; 
                        $auxiliaryProgressiveCount = 0;
                        while($auxiliaryProgressiveCount <= 10){
                            echo"$auxiliaryProgressiveCount, ";
                            $auxiliaryProgressiveCount++;
                        }
                    break;
                    case 2:           
                        echo "<h3>Contagem Regressiva:</h3>"; 
                        $auxiliaryRegressiveCount = 10;
                        while($auxiliaryRegressiveCount >= 0){
                            echo"$auxiliaryRegressiveCount, ";
                            $auxiliaryRegressiveCount--;
                        }
                    break;
                    default:
                    break;
                }
            ?>        
        </div>
    </fieldset>
</body>
</html>