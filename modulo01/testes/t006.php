<?php 
    class Pessoa{
        private string $nome;
        private int $idade;


        public function __construct()
        {
            $this->nome = "Indefinido....";
            $this->idade = 0;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($n){
            $this->nome = $n;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($i){
            $this->idade = $i;
        }
    }

    $p = new Pessoa();
    $p->setIdade(21);
    $p->setNome("Hiroshi");

    echo "nome = " . $p->getNome();
    echo "\nidade = " . $p->getIdade();
    echo "\n";
?>