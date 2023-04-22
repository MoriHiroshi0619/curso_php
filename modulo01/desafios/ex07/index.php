<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salários e o capitalismo</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php 
        $salario = $_REQUEST['salario'] ?? 0;
        if($salario != 0){
            $resultado = floor($salario / 1380);
            $resto = $salario % 1380;
        }else{
            $resultado = 0;
            $resto = 0;
        }
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="sal">Salário (R$)</label>
            <input type="number" id="sal" name="salario" step="0.01" value="0">
            <p>Considerando o salário de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de R$<?=number_format($salario, 2, ",", ".")?> ganha <strong><?=$resultado?> salários mínimos</strong> + R$<?=number_format($resto, 2, ',', '.')?></p>
    </section>
</body>
</html>