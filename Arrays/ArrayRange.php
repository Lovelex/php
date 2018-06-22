<?php 

// Range() faz uma contagem de números ou letras sempre em ordem crescente.

foreach (range(1,5) as $ordem)
{

     print('Ordem : '.$ordem.'<br>');

}

echo "<br>";

foreach (range("a","e") as $ordem)
{

     print('Ordem : '.$ordem.'<br>');

}

echo "<br>";

foreach (range(10, 50, 10) as $ordem) 
{
	
	print('Ordem : '.$ordem.'<br>');

}



 ?>