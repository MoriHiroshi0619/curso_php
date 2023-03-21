<?php 
//Classes, Atributos e Métodos

class Pessoa{
    public $nome;
    public $idade;
    public $genero;

    public function falar(){
       echo "$this->nome Falou\n";
    }
}

$p = new Pessoa();
var_dump($p);
$p->nome = "Hiroshi";
$p->idade = 21;
$p->genero = "masculino";
$p->falar();
var_dump($p);
echo "\n";
?>