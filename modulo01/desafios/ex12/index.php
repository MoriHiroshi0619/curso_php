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
    <?php 
        $halibi = 0;
        $total_segundos = $_REQUEST['seg'] ?? 0;
        $total_minutos = $total_segundos % 60;

    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" id="seg" name="seg" value="0">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=$total_segundos?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$halibi?> semanas</li>
            <li><?=$halibi?> dias</li>
            <li><?=$halibi?> horas</li>
            <li><?=$total_minutos?> minutos</li>
            <li><?=$total_segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>