<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantos anos terá?</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php 
        $anoNasc = $_REQUEST['ano1'] ?? 0;
        $anoFuturo = $_REQUEST['ano2'] ?? 0;
        $idadeFuturo = $anoFuturo - $anoNasc;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="ano1">Em que ano você nasceu ?</label>
            <input type="number" id="ano1" name="ano1">
            <label for="ano2">Quer saber sua idade em que ano? <strong>Atualmente estamos em 2023</strong></label>
            <input type="number" id="ano2" name="ano2">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            if($anoFuturo <= 2023){
                echo "<p>Desculpe mas não podemos calcular sua idade</p>";
            }else{
                echo "<p>Quem nasceu em $anoNasc vai ter <strong>$idadeFuturo anos</strong> em $anoFuturo</p>";
            }
        ?>
    </section>
</body>
</html>