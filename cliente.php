<?php

class Cliente //Criação de classe (Lembrando que o nome da classe sempre deve ser maiúsculo).
{
    public $nome = "Fulano"; //Criação de variáveis com visibilidade pública. 
    public $idade = 22; 


    public function apresentar() //Criação de uma função. 
    {
        echo "Nome: {$this -> nome} <br>";
        echo "Idade: {$this -> idade} <br>";
    }
}

$cliente1 = new Cliente(); //Instanciamente de um objeto da classe Cliente().
$cliente1 -> apresentar(); //Aqui estamos chamando a função para o objeto instanciado. 

/*
* Para adicionar novos dados na função, não é necessário criar outra função. 
* Basta instanciar um novo objeto da classe, atribuir as variáveis com os seus respectivos dados
* e chamar a função novamente. Veja o exemplo a seguir: 
*/

$cliente2 = new Cliente(); //Instanciamente de outro objeto da classe Cliente().
$cliente2 -> idade = 200; //Criando as variáveis com os novos dados.
$cliente2 -> nome = "Irineu, você não sabe e nem eu."; //Criando as variáveis com os novos dados.
$cliente2 -> apresentar(); //Aqui estamos chamando a função para o novo objeto instanciado. 


