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
        $segundos_input = $_REQUEST['seg'];
        $total_minutos = floor($segundos_input / 60);
        $total_segundos = $segundos_input - ($total_minutos * 60);
        $total_horas = floor($total_minutos / 60);
        $total_minutos = $total_minutos - ($total_horas * 60);
        $total_dias = floor($total_horas / 24);
        $total_horas = $total_horas - ($total_dias * 24);
        $total_semanas = floor($total_dias / 7);
        $total_dias = $total_dias - ($total_semanas * 7);

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
        <p>Analisando o valor que você digitou, <strong><?=$segundos_input?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$total_semanas?> semanas</li>
            <li><?=$total_dias?> dias</li>
            <li><?=$total_horas?> horas</li>
            <li><?=$total_minutos?> minutos</li>
            <li><?=$total_segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>