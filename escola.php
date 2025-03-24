<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


    <title>escola</title>
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>Escola raimundo</h1>
    </header>

    <main><div id="respostas" class="container ms-2 d-flex flex-column">
    </div></main>

<?php

class Aluno{
    public $nome;
    public $materia;
    private $nota;

    public function __construct($nome, $materia, $nota)
    {
        $this->nome = $nome;
        $this->materia = $materia;
        $this->nota = $nota;
    }
    public function VerNota(){
        return $this->nota;
    }
}

class Aluno extends Pessoa{

    public function apresentar()
    {
        echo "Oii! Meu nome é {$this->nome} e sou aluno da rede e minha matéria favorita é {$this->materia}";
    }
}

class Professor extends Pessoa{
    public function apresentar()
    {
        echo "Oi! Eu sou o Professor {$this->nome} e dou aula de {$this->materia}";
    }
}

// objetos
$daniluski = new Aluno("Daniluski", 17);
$isa = new Professor("isa", 17);

echo $daniluski->apresentar();
echo $isa->apresentar();
?>

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

$dani = new Aluno("Dani", "Historia" , 9);

echo $dani->nome;
echo $dani->verNota();
?>

