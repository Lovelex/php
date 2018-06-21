<?php
	require_once "Config.php";

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Djalma Sindeaux");
	$cad->setEmail("djalma@hcode.com.br");
	$cad->setSenha("123456");

	$cad->registrarVenda();
?>