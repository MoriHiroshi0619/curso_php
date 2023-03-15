<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <section>
        <h1>Analisador de Números</h1>
        <?php 
        $numero = $_POST["numero"];
        $inteira = floor($numero);
        $decimal = round(($numero - $inteira), 3);
        echo "<p>Analisando o número $numero informado pelo usuário: </p>";
        /*informar o parte inteira do numero e a parte float
        em formato de lista(ul) */
        echo "<ul>
                <li>
                    <p>
                        parte inteira do número = $inteira
                    </p>
                </li>
                <li>
                    <p>
                        parte decinam do número = $decimal
                    </p>
                </li>
        </ul>";
        ?>
        <button><a href="./index.php">voltar</a></button>
    </section>
</body>
</html>