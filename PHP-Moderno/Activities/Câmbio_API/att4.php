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
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            //var_dump($dados);
            $cotacao = $dados['value'][0]['cotacaoCompra'];
            echo $cotacao;
            
            $money = $_POST["intMoney"] ? floatval($_POST["intMoney"]):null ?? 0;
             
            echo "<p>Seus R$" . number_format($money, 2, ',') . " equivalem <strong>US$" .  number_format(($money/$cotacao), 2, ',') . "</strong></p>";
            echo "Usando o câmbio de $cotacao - Segundo a API do Banco Centra do Brasil ";
            
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>