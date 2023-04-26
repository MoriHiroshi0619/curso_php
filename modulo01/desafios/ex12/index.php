<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora do tempo</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" id="seg" name="seg">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>