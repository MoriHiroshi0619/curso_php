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
        <?php 
            $num = $_POST["num"] ?? 0;
            echo "<p>o sucessor de $num é ". ($num+1) ."</p>";
            echo "<p>o antecessor de $num é ". ($num-1) ."</p>";
        ?>
        <button><a href="./corrigido.php">voltar</a></button>
    </main>
</body>
</html>