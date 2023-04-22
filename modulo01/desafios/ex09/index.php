<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medias simples e ponderada</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php 
        $n1 = $_REQUEST['num1'] ?? 0;
        $n2 = $_REQUEST['num2'] ?? 0;
        $p1 = $_REQUEST['peso1'] ?? 0;
        $p2 = $_REQUEST['peso2'] ?? 0;
        $n3 = $_REQUEST['num3'] ?? 0;
        $p3 = $_REQUEST['peso3'] ?? 0;
        if($n1 != 0 && $n2 != 0){
            $ms = ($n1 + $n2 + $n3) / 3;
            $mp = ($n1*$p1+$n2*$p2+$n3*$p3) / ($p1+$p2+$p3);
        }else{
            $ms = 0;
            $mp = 0;
        }

    ?>
    <main>
        <h1>Média Aritméricas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="num1">1º valor</label>
            <input type="number" id="num1" name="num1">
            <label for="peso1">1º peso</label>
            <input type="number" id="peso1" name="peso1">
            <label for="num2">2º valor</label>
            <input type="number" id="num2" name="num2">
            <label for="peso2">2º peso</label>
            <input type="number" id="peso2" name="peso2">
            <label for="num3">3º valor</label>
            <input type="number" id="num3" name="num3">
            <label for="peso3">3º peso</label>
            <input type="number" id="peso3" name="peso3">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$n1?> e <?=$n2?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=$ms?></li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$p1?> e <?=$p2?> é igual a <?=number_format($mp, 2)?></li>
        </ul>
    </section>
</body>
</html>