<?php  

require_once("config.php");

// Insere um usuário e senha com um construtor

$usuario = new Usuarios("construct","!@#$");

$usuario->insert();

echo $usuario;

?>