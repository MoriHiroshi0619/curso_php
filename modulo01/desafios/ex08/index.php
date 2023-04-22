<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php 
        $num = $_REQUEST['num'] ?? 0;
        $quadrada = sqrt($num);
        $cubica = pow($num, 1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Número</label>
            <input type="number" id="num" name="num" value="0">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <p>Analisando o <strong>número <?=$num?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong> <?=number_format($quadrada, 3)?></strong></li>
            <li>A sua raiz cúbica é <strong><?=number_format($cubica, 3)?></strong></li>
        </ul>
    </section>
</body>
</html>