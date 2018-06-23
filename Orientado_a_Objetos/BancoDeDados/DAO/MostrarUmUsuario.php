<?php  

require_once("config.php");

$oito = new Usuarios();

$oito->loadById(9);

echo $oito;

?>