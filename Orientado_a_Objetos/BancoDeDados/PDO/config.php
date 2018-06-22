<?php

$conn = new PDO("mysql:dbname=scrimers;host=127.0.0.1", "root", "");

// 

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

// Mostra todos resultados da tabela em um array 

foreach ($results as $row) {
	
	foreach ($row as $key => $value) {
			
			echo ("<strong>".$key.": </strong>".$value."<br>");

		}	

		echo "<=========================================================><br>";
}

?>