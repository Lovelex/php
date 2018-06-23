<?php  

require_once("config.php");

// Busca usuários que CONTEM os caractéres inseridos

$busca = Usuarios::search("jo");

echo json_encode($busca);

?>