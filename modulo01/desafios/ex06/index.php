<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resto da divisão</title>
    <link rel="stylesheet" href="../../style/style.css">
    <style>
        .anatomia{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-auto-rows: 100px;
        }
        .anatomia div{
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3rem;
        }
        .divisor{
            border-bottom: 2px solid black;
            border-left: 4px solid black;
        }
        .resultado{
            border-top: 2px solid black;
            border-left: 4px solid black;
        }
        .resto{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php 
        $dividendo = $_REQUEST['dividendo'] ?? 0;
        $divisor = $_REQUEST['divisor'] ?? 0;
        if($dividendo != 0 && $divisor != 0){
            $resultado = floor($dividendo / $divisor);
            $resto = $dividendo % $divisor;
        }else{
            $resultado = 0;
            $resto = 0;
        }
    ?>

    <main>
        <h1>Resto da divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="num1">dividendo</label>
            <input type="number" id="num1" name="dividendo">
            <label for="num2">divisor</label>
            <input type="number" id="num2" name="divisor">
            <input type="submit" value"Calcular">
        </form>
    </main>

    <section class="result">
        <h2>Anatomia da divisão</h2>
        <div class="anatomia">
            <div class="dividendo"><?=$dividendo?></div>
            <div class="divisor"><?=$divisor?></div>
            <div class="resto"><?=$resto?></div>
            <div class="resultado"><?=$resultado?></div>
        </div>
        
    </section>
</body>
</html>