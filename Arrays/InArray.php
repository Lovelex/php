<?php 

$array = array ('a','b','c','d');

// in_array verifica se o elemento existe dentro do array, nesse caso 'a', Primeiro coloque o elemento que deseja fazer a verificação depois onde está o array.
// in_array retorna um valor boleano.

if (in_array('a',$array)) 
{

   print('O valor está no array');

}

else
{

   print('Não está no array');

}


 ?>