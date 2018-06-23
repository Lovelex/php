<?php



class Usuarios{

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	// <======= Métodos ==========>

	public function loadById($id){

		// carrega um usuario pelo ID

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id
		));

		if (count($results) > 0){

			$this->setData($results[0]);

		}
	}

	public static function getList(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

	}

	public static function search($login){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
			':SEARCH'=>"%".$login."%"
		));

	}

	public function login($login, $password){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN and dessenha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));

		if (count($results) > 0){

			$this->setData($results[0]);

		} else {

			throw new Exception("Login e/ou senha inválidos");	

		}

	}

	public function setData($data){

			$this->setIdusuario($data['idusuario']);
			$this->setDeslogin($data['deslogin']);
			$this->setDessenha($data['dessenha']);
			$this->setDtcadastro(new DateTime($data['dtcadastro']));

	}

	public function insert(){

		$sql = new sql();

		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha()
		));

		if (count($results) > 0) {
			$this->setData($results[0]);
		}

	}

	public function update($login, $password){

		// Altera o login e senha do usuario

		$this->setDeslogin($login);
		$this->setDessenha($password);

		$sql = new Sql();

		$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha(),
			':ID'=>$this->getIdusuario()
		));

	}

	public function delete(){

		// Deleta um usuário 

		$sql = new Sql();

		$sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
			':ID'=>$this->getIdusuario()
		));

		$this->setIdusuario(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(new DateTime());

	}

	// <======= __construct ==========>

	public function __construct($login = "", $password = ""){

		$this->setDeslogin($login);
		$this->setDessenha($password);

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