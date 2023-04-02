<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <section>
        <?php
            $valorReal = $_POST["valor"] ?? "[sem valor digitado]";
            $valorDolar = round(($valorReal / 5.22), 2);
            echo "<p>Seus R$$valorReal equivalem a U$$valorDolar </p>"
        ?>
        <p><strong>Cotação fixa de R$5,22</strong> informada diretamente no código</p>
        <button><a href="./index.php">voltar</a></button>
    </section>
</body>
</html>