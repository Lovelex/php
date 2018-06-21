<?php  

$conn = new mysqli("127.0.0.1", "root", "", "scrimers");
										
// mysqli() é a classe para se conectar no Banco de dados
// A ordem dos parâmetros são ($IP, $USUARIO, $SENHA, $NOME_DO_BANCO)

if ($conn->connect_error) {
	
	// ->connect_error armazena algum erro na conexão do DB

	echo "Error: ". $conn->connect_error;

	// echo ->connect_error Mostra o erro

}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

// $-> Cria uma "zona" de preparo para avisar que vai executar algo, nesse caso insere algo em "deslogin" e "dessenha".
// Os parâmetros (?, ?) indicam quantos dados você vai enviar

$stmt->bind_param("ss", $login, $pass);

// em bind_param primeiro você deve informar qual o tipo do valor e quantos você vai usar. Nesse caso informamos que vamos usar 2 valores "s" que são Strings.
// Depois você deve informar o que vai cadastrar ou preencher sempre em uma variável. Nesse caso usamos as variávels $login (que recebe "user") e $pass (que recebe "12345") 


$login = "user";
$pass = "12345";

$stmt->execute();

?>