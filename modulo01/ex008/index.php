<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerador de numeros aleatórios</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header>
        <h1>trabalhando com números aleatórios</h1>
    </header>
    <section>
        <p>gerando um Número aleatório entre 0 e 100...</p>
        <?php
            $numero = rand(0,100);
            echo "<p>o número gerado foi $numero</p>"
        ?>
        <button onclick="reload()">
            Gerar outro
        </button>
    </section>
    
    <script>
        function reload(){
            location.reload();
        }
    </script>
</body>
</html>