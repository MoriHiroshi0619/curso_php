<?php 
//rand()
//mt_rand()
/* $min = 0;
$max = 100;
for($i = 0; $i < 10; $i++){
    $num = mt_rand($min, $max);
    echo "$num\t";
}
echo "\n"; */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 02</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com Números aleatórios</h1>
        <?php 
            $num = mt_rand(0, 100);
            echo "<p>Gerando um número aleatório entre 0 e 100<br>o valor gerado foi <strong>$num</strong>...</p>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504: gerar outro</button>
    </main>
</body>
</html>