<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustes de Preços</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php 
        $valor = $_REQUEST['valor'] ?? 0;
        $porAjuste = $_REQUEST['ajuste'] ?? 0;
        $porAjuste = $porAjuste / 100;
        $novoValor = ($valor * $porAjuste) + $valor;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="valor">Preço do Produto (R$)</label>
            <input type="number" id="valor" name="valor" step="0.01" value="0">
            <label for="ajuste">Qual será o percentual de reajuste ? <strong>(<output class="porcetagem"></output>%)</strong> </label>
            <input type="range" id="ajuste" name="ajuste" min="0" max="100" >
            <input type="submit" value="Calcular Reajuste">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($valor, 2, ',' ,'.')?>, com <strong><?=$porAjuste * 100?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($novoValor, 2, ',', '.')?></strong> a partir de agora.</p>
    </section>

    <script>
        let por = document.querySelector('.porcetagem');
        let input = document.querySelector('#ajuste');
        por.textContent = input.value;
        input.addEventListener('input', (event) =>{
            por.textContent = event.target.value;
        })
    </script>
</body>
</html>