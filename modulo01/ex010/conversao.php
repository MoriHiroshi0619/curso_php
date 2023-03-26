<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 03</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            $real = $_REQUEST["din"] ?? 0;

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date(("m-d-Y"));

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            if($real != 0){
                $dolar = $real / $cotacao;
            }else{
                $dolar = $real;
            }

            /* $real = number_format($real, 2, ",", ".");
            $dolar = number_format($dolar, 2, ",", "."); */

            echo "<p>cotação de <strong>R\$". number_format($cotacao, 2, ",", ".") . "</strong> retirado diretamente do site do <a href=\"https://www.bcb.gov.br/\" target=\"_blank\">Banco Central do Brasil</a> </p>"; 

            echo "<p>seus R\$". number_format($real, 2, ",", ".").
                " equivalem a US\$" . number_format($dolar, 2, ",", ".")
                . "</p>";   
        ?>
        <button><a href="./corrigido.php">voltar</a></button>
    </main>
</body>
</html>