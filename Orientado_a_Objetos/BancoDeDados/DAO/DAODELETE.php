<?php  

require_once("config.php");

// Deleta um usuário pelo ID

$usuario = new Usuarios();

$usuario->loadById(12);

$usuario->delete();

echo $usuario;

?>