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

class Pessoa{
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
        echo "Oii! Meu nome é {$this->nome} e sou aluno da rede e minha matéria favorita é {$this->materia}.<br>";
    }
}

class Professor extends Pessoa{
    public function apresentar()
    {
        echo "Oi! Eu sou o Professor {$this->nome} e dou aula de {$this->materia}.<br>";
    }
}

class Diretor extends Pessoa{
    public function apresentar()
    {
        echo "Oi! Sou o diretor {$this->nome}.<br>";
    }
}

class Funcionario extends Pessoa{
    public function apresentar()
    {
        echo "Oi! Sou funcionario da rede e meu nome é {$this->nome} e sou {$this->materia}.<br>";
    }
}

// criando objetos


$dani = new Aluno("Dani", "Historia" , 9);
$thalita = new Aluno ("Thalita","Artes", 10);
$rayanne = new Professor ("Rayanne", "Biologia", 54);
$thiago = new Aluno ("Thiago", "Ingles", 17);
$luzia = new Funcionario ("Luzia", "inspetora", 60);


echo $dani -> apresentar();
echo $thalita -> apresentar();
echo $thiago -> apresentar();
echo $rayanne -> apresentar();
echo $luzia -> apresentar();

?>

