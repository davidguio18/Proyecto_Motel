<?php 

require_once("Conexion.php");

class Usuarios extends Conexion{ 

	public $id_usuario;
	public $nombres;
	public $apellidos;
	public $perfil;
	public $documento;
	public $contrasena;
	

	public function __construct(){
	
		parent::__construct();
	}
	public function save($nom,$ape,$per,$doc,$con){

		$this->nombres = $nom;
		$this->apellidos = $ape;
		$this->perfil = $per;
		$this->documento = $doc;
		$this->contrasena = $con;
		

		$conexion = $this->getConexion();
		$stm = $conexion-> prepare("INSERT INTO usuarios VALUES (:id_usuario,:nombres,:apellidos,:perfil,:documento,:contrasena)");
		return $stm->execute((array) $this);
	}
	
	

	public function vew (){
		$conexion = $this->getConexion();
		$stm = $conexion->prepare("SELECT * FROM Usuarios");
		$stm ->setFetchMode(PDO::FETCH_CLASS,'Usuarios');

		$usuarios = array();
		$stm-> execute();

		while ($obj = $stm->fetch()) {
			$usuarios[]=$obj;
		}
		return $usuarios;
	}

}


 ?>
