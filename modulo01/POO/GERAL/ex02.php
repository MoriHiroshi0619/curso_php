<?php 
//Métodos getters, setters e construtor

class Login {
    private $nome;
    private $email;
    private $senha;
    private $logado;

    public function __construct($nome){
        $this->setNome($nome);
        $this->setLogado(false);
    }

    public function logar(){
        if(!$this->isLogado()){
            if($this->email == "hiroshi@gmail.com" && $this->senha == "123"){
                echo $this->getNome().", Logado com sucesso!\n";
                $this->setLogado(true);
            }else{
                echo $this->getNome().", Dados invalidos\n";
            }
        }else{
            echo $this->getNome().", Já está logado\n";
        }
    }

    public function deslogar(){
        if($this->isLogado()){
            echo $this->getNome().", Deslogado com sucesso!\n";
            $this->setLogado(false);
        }else{
            echo $this->getNome().", você já está deslogado\n";
        }
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $this->email = $e;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($s){
        $this->senha = $s;
    }

    public function isLogado(){
        return $this->logado;
    }
    public function setLogado($l){
        $this->logado = $l;
    }
}

$logar = new Login("Hiroshi");
var_dump($logar);
$logar->setEmail("hiroshi@gmail.com");
$logar->setSenha("123");
$logar->logar();
$logar->deslogar();
?>