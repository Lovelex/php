<?php  

$conn = new mysqli("127.0.0.1", "root", "", "scrimers");

// mysqli() é a classe para se conectar no Banco de dados
// A ordem dos parâmetros são ($IP, $USUARIO, $SENHA, $NOME_DO_BANCO)

if ($conn->connect_error) {
	
	// ->connect_error armazena algum erro na conexão do DB

	echo "Error: ". $conn->connect_error;

	// echo ->connect_error Mostra o erro

}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

	// Envia uma consulta MySQL (Nesse caso retorna os usuarios cadastrados da tabela "tb_usuarios" em ordem alfabética por deslogin)

$data = array();

while ($row = $result->fetch_assoc()) {
	
	// While vai listar o que tem na variável $result (Que fez a consulta) enquanto fetch_assoc() estiver coletando os dados nas colunas
	// fetch_assoc() retorna a listagem de cada linha consultada em forma de array (um pouco simplificada)

	array_push($data, $row);

	// array_push envia o resultado de $row para $data

}

echo json_encode($data);

?>