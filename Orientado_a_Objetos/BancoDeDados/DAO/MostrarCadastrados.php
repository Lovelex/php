<?php  

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

// Nota - Objeto estático para ser json precisa ser lido como echo json_encode, diferente de um objeto instanciado que so precisamos usar echo pois usamos __toString() na classe Usuarios.

?>