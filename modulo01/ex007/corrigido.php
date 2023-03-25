<?php 
/* $num = 12;
echo "o antecessor de $num é " . ($num - 1) . "\n";
echo "o sucessor de $num é " . ($num + 1) . "\n"; */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio PHP</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main>
        <h1>informe um Número</h1>
        <form action="resposta.php" method="post">
            <label for="num">Número: </label>
            <input type="number" id="num" name="num">
            <input type="submit" value="calcular">
        </form>
    </main>
</body>
</html>

