<!DOCTYPE html>
<html lang="bt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"] ?? "sem nome";
            echo "<p>o numero selecionado foi $numero</p>";
            $numero++;
            echo "<p>sucessor = $numero </p>";
            $numero -= 2;
            echo "<p>antecessor = $numero </p>";
        ?> 
        <p><a href="javascript:history.go(-1)">voltar para a página anterior</a></p>
    </main>
</body>
</html>