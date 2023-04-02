<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de números</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <main>
        <h1>Analisador de números</h1>
        <?php 
            $num = $_POST["num"] ?? 0;
            $inteira = (int) $num; 
            $fra = $num - $inteira;
            //echo"<p>$num - $inteira - $fra </p>";
            
            echo "<p>Analisando o número <strong>". number_format($num, 3, ",", ".") ."</strong> informando pelo usuario...</p>";

            echo "<ul>
                <li>A parte inteira do número é <strong>". number_format($inteira, 0, ",", ".") ."</strong></li>
                <li>A parte inteira do número é <strong>". number_format($fra, 3, ",", ".") ."</strong></li>
            </ul>";

        ?>
        <button><a style="color: aliceblue;" href="./corrigido.php">Voltar</a></button>
    </main>
</body>
</html>