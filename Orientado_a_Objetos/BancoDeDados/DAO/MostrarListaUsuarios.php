<?php  

require_once("config.php");

// Carrega uma lista de usuários

$lista = Usuarios::getList();

echo json_encode($lista);

?>