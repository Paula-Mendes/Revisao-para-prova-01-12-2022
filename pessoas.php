<?php

class Pessoas
{
    public $nome = "Paula.";
    public $idade = 24;
    public $datanascimento = "22/11/1998";
    public $trabalho = "Estagiária.";
    public $hobby = "Tocar guitarra.";

    public function apresentarPessoa()
    {
        echo "Nome: {$this -> nome} <br>";
        echo "Idade: {$this -> idade} <br>";
        echo "Data de nascimento: {$this -> datanascimento} <br>";
        echo "Trabalho: {$this -> trabalho} <br>";
        echo "Hobby: {$this -> hobby} <br>";
    }

    public $qualidade1 = "Responsabilidade";
    public $qualidade2 = "sinceridade";
    public $qualidade3 = "eficiência";
    public $qualidade4 = "honestidade";
    public $qualidade5 = "independência";

    public function qualidadesPessoas()
    {
        echo "Cinco qualidades de um ser humano: {$this -> qualidade1}, {$this -> qualidade2}, 
        {$this -> qualidade3}, {$this -> qualidade4} e {$this -> qualidade5}. <br>";
    }
}

$pessoa1 = new Pessoas();
$pessoa1 -> apresentarPessoa();
$pessoa1 ->qualidadesPessoas();