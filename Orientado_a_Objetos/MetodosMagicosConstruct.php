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


}

$meuEndereco = new Endereco("Rua Infinite Lopping", 450, "Belo Horizonte");
var_dump($meuEndereco);
?>