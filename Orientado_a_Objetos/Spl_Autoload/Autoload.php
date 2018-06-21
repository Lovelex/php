<?php

function incluirClasses($nomeClasse){
	
	// Função incluirClasses verifica se existe o arquivo especificado NA MESMA PASTA

	if(file_exists($nomeClasse.".php") === true){
	
	// File_exists verifica se o arquivo existe retornando um valor Boleano

		require_once($nomeClasse.".php");
	}
	
}

// Spl_autoload_register executa todas as requisições de uma classe a partir de uma função

spl_autoload_register("incluirClasses");

// Uma outra forma de fazer a função é criando ela dentro de spl_autoload_register (Função anônima).

spl_autoload_register(function($nomeClasse){

	if(file_exists("Abstratas". DIRECTORY_SEPARATOR . $nomeClasse.".php") === true)
	
	// DIRECTORY_SEPARATOR Cria uma barra '/' ou '\' de diretorio dependendo do seu sistema operacional.

	{ 
		require_once("Abstratas". DIRECTORY_SEPARATOR . $nomeClasse.".php");

	// "Abstratas". DIRECTORY_SEPARATOR . $nomeClasse.".php" - require o arquivo $nomeClasse (Objeto instanciado) DENTRO DA PASTA "ABASTRATAS".

	}

});


$carro = new DelRey();
$carro->acelerar(80);
echo "<br>";
$carro->trocarMarcha(": Segunda");
?>