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
        <form action="conversao.php" method="post">
            <label for="din">Quantos R$ você tem na carteira?</label>
            <input type="number" name="din" id="din" step="0.01">
            <input type="submit" value="converter">
        </form>
    </main>
</body>
</html>