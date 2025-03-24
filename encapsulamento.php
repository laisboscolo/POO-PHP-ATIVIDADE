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

$dani = new Aluno("Dani", "Historia" , 9);

echo $dani->nome;
echo $dani->verNota();
?>



