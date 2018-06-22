<?php

$array = array ('a','b','c','d','a');

$unique = array_unique ($array);

// array_unique não deixa repetir um elemento no array nesse caso 'a'.

foreach ($unique as $letra)
{

     print('Letra: '.$letra.'<br>');

}

?>