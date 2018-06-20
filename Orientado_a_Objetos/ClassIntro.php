<?php 
class Pessoa{

	public $nome; // Atributos
	public $idade;

	public function dizerNome(){ // Método

		echo "O meu nome é: ".$this->nome. "<br>";

	}
	public function dizerIdade(){

		echo "A minha idade é: ".$this->idade;

	}

}

$lucas = new Pessoa();
$lucas->nome = "Lucas";
$lucas->dizerNome();
$lucas->idade = 24;
$lucas->dizerIdade();
