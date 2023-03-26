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
            $cotacao = 5.17;
            if($real != 0){
                $dolar = $real / $cotacao;
            }else{
                $dolar = $real;
            }
            echo "<p>seus R\$". number_format($real, 2, ",", ".").
                " equivalem a US\$" . number_format($dolar, 2, ",", ".")
                . "</p>";
        ?>
        <button><a href="./corrigido.php">voltar</a></button>
    </main>
</body>
</html>