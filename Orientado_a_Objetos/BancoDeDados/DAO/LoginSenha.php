<?php  

require_once("config.php");

// Verifica se Login e Senha estão corretos. Se verdadeiro: Traz os registros do BD para o usuario, Senão retorna um erro

$login = new Usuarios();
$login->login("jose","qwerty");
echo ($login);

?>