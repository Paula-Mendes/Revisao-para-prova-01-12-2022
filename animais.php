<?php

class Animais 
{
    public $tipo = "Cachorro";
    public $raca = "SRD";
    public $nome = "Rayla";
    public $porte = "Grande.";
    public $idade = 10;

    public function tipoAnimal()
    {
        echo "Tipo do animal: {$this -> tipo} <br>";
        echo "Raça: {$this -> raca} <br>";
        echo "Nome: {$this -> nome} <br>";
        echo "Porte: {$this -> porte} <br>";
        echo "Idade: {$this -> idade} anos <br>";
    }

    public $qualidade1 = "Companhia";
    public $qualidade2 = "lealdade";
    public $qualidade3 = "amor sem interesses";
    public $qualidade4 = "vigilância do território";
    public $qualidade5 = "menos sedentarismo.";

    public function qualidadesAnimal()
    {
        echo "As cinco qualidades são: {$this -> qualidade1}, {$this -> qualidade2}, 
        {$this -> qualidade3}, {$this -> qualidade4} e {$this -> qualidade5}. <br>";
    }

}

$rayla = new Animais();
$rayla -> tipoAnimal();
$rayla -> qualidadesAnimal();