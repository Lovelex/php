<?php 
require_once("config.php");
	$session = session_status();
	switch ($session) {
		case 0:
			echo "Sessão Desativada";
			break;
		case 1:
			echo "Sem Sessão";
			break;
		case 2:
			echo "Sessão Ativa";
			break;	
	}


 ?>