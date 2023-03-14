<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>interação com formulario HTML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Apresente-se </h1>
    </header>

    <section>
        <form action="cad.php" method="get">
            <label for="numero">Informe um Numero:</label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>