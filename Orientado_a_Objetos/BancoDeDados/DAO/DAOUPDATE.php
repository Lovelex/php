<?php  

require_once("config.php");

// Altera o login e senha do usuario

$usuario = new Usuarios();

$usuario->loadById(13);

$usuario->update("professor","!@#$%¨&*");

echo $usuario;

?>