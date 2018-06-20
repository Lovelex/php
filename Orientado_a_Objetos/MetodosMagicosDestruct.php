<?php

class Endereco{
	private $logradouro;
	private $numero;
	private $cidade;


	public function __construct ($logradouro, $numero, $cidade)
	{

		$this->logradouro = $logradouro;
		$this->numero = $numero;
		$this->cidade = $cidade;

	}

	public function __destruct(){

		var_dump("DESTRUIR");

	}


}

$meuEndereco = new Endereco("Rua Infinite Lopping", 450, "Belo Horizonte");
var_dump($meuEndereco);

unset($meuEndereco);
?>