<?php 

// IMPLODE

$array = array ('a','b','c','d');

print(implode(',',$array));

// implode() transforma um array em uma string a partir de algum separador (vírgulas, espaços, traços etc).

echo "<br>";

$array = array ('a','b','c','d');

print(implode(' ',$array));

echo "<br>";

$array = array ('a','b','c','d');

print(implode('-',$array));


// <=======================================================>

echo "<br><br><hr><br><br>";

// <=======================================================>


// EXPLODE

$string = 'O PHP é bacana.';

$array = explode (' ',$string);

print_r($array);

// explode() transforma uma string em um array a partir de algum separador (vírgulas, espaços, traços etc).

?>