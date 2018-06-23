<?php



class Usuarios{

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	// <======= Métodos ==========>

	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id
		));

		if (count($results) > 0){

			$row = $results[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));

		}
	}

	// <======= __toString ==========>

	public function __toString(){

		return json_encode(array(

			"idusuario"  =>$this->getIdusuario(),
			"deslogin"   =>$this->getDeslogin(),
			"dessenha" 	 =>$this->getDessenha(),
			"dtcadastro" =>$this->getDtcadastro()->format("d/m/Y H:i:s")

		));	

	}

	// <======= Getters ==========>

	public function getIdusuario(){

		return $this->idusuario;

	}
	public function getDeslogin(){

		return $this->deslogin;

	}
	public function getDessenha(){

		return $this->dessenha;

	}
	public function getDtcadastro(){

		return $this->dtcadastro;

	}

	// <======= Setters =======>

	public function setIdusuario($value){

		$this->idusuario = $value;

	}
	public function setDeslogin($deslogin){

	 	$this->deslogin = $deslogin;

	}
	public function setDessenha($dessenha){

		$this->dessenha = $dessenha;

	}
	public function setDtcadastro($dtcadastro){

		$this->dtcadastro = $dtcadastro;

	}

	


}
?>