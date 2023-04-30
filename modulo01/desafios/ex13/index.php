<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletronico</title>
    <link rel="stylesheet" href="../../style/style.css">
    <style>
        li{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <?php 
        $halibi = 0;
        $total_valor = $_REQUEST['valor'] ?? 0;

        $cem = floor($total_valor / 100);
        $resto_valor = $total_valor % 100;

        $cinquenta = floor($resto_valor / 50);
        $resto_valor = $resto_valor % 50;

        $dez = floor($resto_valor / 10);
        $resto_valor = $resto_valor % 10;

        $cinco = floor($resto_valor / 5);
        $resto_valor = $resto_valor % 5;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="valor">Qual valor você deseja sacar?</label>
        <input type="number" id="valor" name="valor" value="235">
        <p>•notas disponiveis: R$100, R$50, R$10, R$5</p>
        <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=number_format($total_valor, 2, ',', '.')?> realizado</h2>
        <p>O caixa eletrônico vai te entragar as seguintes notas:</p>
        <ul>
            <li>
                <span> • </span>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/100_Brazil_real_Second_Obverse.jpg/220px-100_Brazil_real_Second_Obverse.jpg" alt="cédula de R$100 reais">
                <span>X <?=$cem?></span>
            </li>
            <li>
                <span> • </span>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/50_Brazil_real_Second_Obverse.jpg/220px-50_Brazil_real_Second_Obverse.jpg" alt="cédula de R$50 reais">
                <span>X <?=$cinquenta?></span>
            </li>
            <li>    
                <span> • </span>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/10_Brazil_real_Second_Obverse.jpg/220px-10_Brazil_real_Second_Obverse.jpg" alt="cédula de R$10 reais">
                <span>X <?=$dez?></span>
            </li>
            <li>
                <span> • </span>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/5_Brazil_real_Second_Obverse.jpg/220px-5_Brazil_real_Second_Obverse.jpg" alt="cédula de R$50 reais">
                <span>X <?=$cinco?></span>
            </li>
        </ul>
    </section>
</body>
</html>