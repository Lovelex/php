<?php

class Encapsulamento{

	public 		$publico ;
	// Todas class e objetos podem acessar quem for PUBLIC
	protected	$protegido = "Protegido";
	// Essa class e filhos podem acessar quem for PROTECTED
	private 	$privado = "Privado";
	// Somente essa class pode acessar PRIVATE

	public function verPrivado(){

		echo "Posso ver a variável " .$this->privado. " em um Objeto ou uma classe a partir de uma Função Pública" ;

	}

//=================================================================================================================//


} class Filha extends Encapsulamento{
	// Class Herdeira de Encapsulamento{}

	/*-----------------------------------------------------------------------

	// public 		$publico; 
	
	// protected	$protegido; // Pode ser herdado por ser Filha ou extendida.
	
	// $Privado não pode ser herdado por ser Private
	
	-----------------------------------------------------------------------*/
	public function verProtegido(){

		echo "Posso ver a variável " .$this->protegido. " em um Objeto ou uma classe a partir de uma Função Pública" ;

	}
}

$objetoPrivado = new Encapsulamento();
$objetoPrivado->verPrivado();
// Mostra na tela: Posso ver a variável Privado em um Objeto ou uma classe a partir de uma Função Pública


echo "<br>";

// Mostra na tela: Posso ver a variável Protegido em um Objeto ou uma classe a partir de uma Função Pública
$objetoProtegido = new Filha();
$objetoProtegido->verProtegido();



?>