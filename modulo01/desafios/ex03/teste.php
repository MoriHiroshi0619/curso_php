<?php 
$cotacao = 5.17;
$real = 1000;
$dolar = $real / $cotacao;
//modo tradicional
//echo "seus R\$" . number_format($real, 2, ",", ".") ." equivalem a US\$" . number_format($dolar, 2, ",", ".") ."\n";
//modo mais proficional
//formatação de moedas com internacionalização

$padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
echo "seus " . numfmt_format_currency($padrao, $real, "BRL") ." equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") ."\n";
//echo "\n". numfmt_format_currency($padrao, 10000, "JPY"). "\n";
?>