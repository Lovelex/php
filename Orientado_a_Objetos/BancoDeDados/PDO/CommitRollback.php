<?php 

$conn = new PDO("mysql:host=127.0.0.1;dbname=scrimers", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 7;

$stmt->execute(array($id));

// $conn->rollback();
$conn->commit();

echo "Delete OK!";


 ?>