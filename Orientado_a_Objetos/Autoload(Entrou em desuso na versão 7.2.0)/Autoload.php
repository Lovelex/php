<?php

function __autoload($nomeClasse)
// Carrega todos os requirimentos de um objeto ou classe.
// O parâmetro ($nomeClasse) é preenchido automaticamente com o nome da classe instanciada (DelRey)
// require_once usa os parametros do __autoload com a extensão .php para carregar todas as dependencias

{
	// Nesse var_dump em especifico, mostra todas as dependencias chamadas por autoload
	
	var_dump($nomeClasse);
	echo "<br><br>";
	require_once("$nomeClasse.php");
}

$carro = new DelRey();
$carro->acelerar(80);
echo "<br>";
$carro->trocarMarcha(": Segunda");
?>