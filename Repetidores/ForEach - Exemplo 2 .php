<form method="get">
	<label for="dname"> Seu nome </label><br>
	<input type="text" placeholder="Nome" id="dname" name="nome">
	<br><br>
	<label for="dnascimento"> Nascimento </label><br>
	<input type="date" id="dnascimento" name="data">
	<br><br>
	<input type="submit" name="" value="Enviar">
</form>
<br><br>


<?php  

	if (isset($_GET)) {
		foreach ($_GET as $key => $value) {
			
			echo "Nome do campo: ". $key;

			echo "Valor do campo: " . $value;

			echo "<hr>";
		}
	}


?>