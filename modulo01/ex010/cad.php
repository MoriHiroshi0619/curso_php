<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <section>
        <h1>Analisador de Números</h1>
        <?php 
        $numero = ceil($_POST["numero"]);
        $inteira = ceil($numero);

        echo "<p>Analisando o número $numero informado pelo usuário: </p>"
        /*informar o parte inteira do numero e a parte float
        em formato de lista(ul) */
        ?>
        <button><a href="./index.php">voltar</a></button>
    </section>
</body>
</html>