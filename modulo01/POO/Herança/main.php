<?php 
//Herança é um recurso que perimite que classes compartilhem atributos e métodos
//afim de reaproveitar códigos ou comportamentos generalizados
class Veiculo{
    private $modelo;
    private $cor;
    private $ano;

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){
        $this->cor = $c;
    }

    public function getAno(){
        return $this->ano;
    }
    public function setAno($a){
        $this->ano = $a;
    }

    public function andar(){
        echo "Andou\n";
    }

    public function parar(){
        echo "Parou\n";
    }
}

class Carro extends Veiculo{
    public function ligarLimpadorParabrisa(){
        echo "limpando em 3 2 1...\n";
    }
}

class Moto extends Veiculo{
    public function darGrau(){
        echo "Bolololololololo vrummmmmmmmmmmm\n";
    }
}

$carro = new Carro();
$carro->setModelo("corolla");
$carro->setCor("prata");
$carro->setAno(2020);

var_dump($carro);
$carro->andar();

$moto = new Moto();
$moto->setModelo("gs300");
$moto->setCor("adventure");
$moto->setAno(2023);

var_dump($moto);
$moto->parar();

$carro->ligarLimpadorParabrisa();
$moto->darGrau();
?>