<?php  

require_once("config.php");

// Mostra um usuário a partir de seu ID

$oito = new Usuarios();

$oito->loadById(9);

echo $oito;

?>