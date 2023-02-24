<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
        //  0x = hexadecimal - 0b binario - 0 = octal
        /* $num = 300;
        $num2 = 0x1A; 
        $num3 = 0b1010;
        $num4 = 010; 
        echo "o valor da variavel é $num - $num2 - $num3 - $num4"; */
        $v = "ola mundo";
        var_dump($v);

        echo "<br>";
        $num = (int) 3e2; // 3 * 10(2)
        var_dump($num);

        $n = (int) "127";
        echo "<br>";
        var_dump($n);
        echo "<br>";

        $casado = false;
        var_dump($casado);
        echo "<br>";
        echo "\ncasado = $casado";

        $vet = [6, 4, 5, "ola mundo"];
        echo "<br>";
        var_dump($vet);

        class Pessoa {
            public string $nome;
            public int $idade;
            public bool $casado;

            public function __construct($n, $i, $c)
            {
                $this->nome = $n;
                $this->idade = $i;
                $this->casado = $c;
            }
        }
        
        echo "<br>";
        $p = new Pessoa("hiroshi", 21, true);
        var_dump($p);
        echo "<br>nome = $p->nome
            <br>idade = $p->idade
            <br>casado = $p->casado";
    ?>
</body>
</html>









