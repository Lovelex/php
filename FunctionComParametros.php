<?php

 function ola($texto = "Mundo"){

 	return "Olá, $texto! <br>";

 }
echo ola();
echo ola("");
echo ola("Mundo");
echo ola("Matheus");

 function ola2($texto = "Mundo", $periodo = "Bom dia"){ 
 
 //Parâmetros sem valor padrão (=), Colocar a esquerda
 //Exemplo: function ola3($texto, $periodo = "Bom dia")
 	
	return "<br> Olá, $texto! $periodo ";

 }
echo ola2();

?>