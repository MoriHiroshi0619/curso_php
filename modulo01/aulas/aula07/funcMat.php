<?php 
    $r1 = abs(-2000); //retorna o valor absoluto
    echo "$r1";
    $r2 = base_convert(1000, 10, 16); // converte um numero de uma base numerica para outra
    echo "\n$r2";
    $r3 = intdiv(5,2); //retorna o resuldado de uma divisão inteira
    echo "\n$r3";
    $r4 = min(2,4,5,2,1,6,7,); //retorna o menor valor de uma sequencia
    echo "\n$r4";
    $r5 = max(2,4,5,9,2,1,6,7,); //retorna o menor valor de uma sequencia
    echo "\n$r5";
    $r6 = pow(5,3); //retorna a potencia de um valor
    echo "\n$r6";
    $r7 = sqrt(9); //retorna a raiz quadrada de um valor
    echo "\n$r7";
    //DICA
    //para calcular a raiz quadrada tambem podemos fazer da saguinte forma
    $r8 = 9 ** (1/2); //dessa forma podemos calcular raiz quadrada, cubica etc. apenas aumentado a divisão
    echo "\n$r8";
    //ex de raiz cubica
    $r9 = 27 ** (1/3);
    echo "\n$r9";
    echo "\n";
?>