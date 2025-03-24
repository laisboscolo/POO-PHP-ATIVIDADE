<?php

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar(){
        echo "Olá sou {this->nome} e tenho {this->idade}";
    }

}

class Aluno extends Pessoa{
    public function estudar(){
        echo "{this->nome} está estudando";
    }
}

class Professor extends Pessoa{
    public function ensinar(){
        echo "Professor {this->nome} está ensinando";
    }
}

// criando objetos
$thalita = new Aluno ("Thalita", 16);
$rayanne = new Professor ("Rayanne", 54);

$thalita->apresentar();
$thalita->estudar();
$rayanne->ensinar();
$rayanne->apresentar();

?>




