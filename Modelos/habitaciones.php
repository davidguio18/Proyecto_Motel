<?php
require_once("Conexion.php");

class habitaciones extends Conexion {

	public $id_habitacion;
	public $numero;
	public $tipo;
	public $valor_noche;
	public $estado;

	public function __construct(){
		parent::__construct();
	}

	public function save($num, $tip, $val, $est){
		$this->numero = $num;
		$this->tipo = $tip;
		$this->valor_noche = $val;
		$this->estado = $est;

		$conexion = $this->getConexion();
		$stm = $conexion->prepare("INSERT INTO habitaciones VALUES (:id_habitacion, :numero, :tipo, :valor_noche, :estado)");


		try{
		$stm->execute((array) $this);
}
	catch(Exception $e) {
    
    require "Vistas/habitacion/create.php";
}
	}

	public function findByPk($id){
		$conexion = $this->getConexion();
		$stm = $conexion->prepare("SELECT * FROM habitaciones WHERE id_habitacion= :id");
		$stm->setFetchMode(PDO::FETCH_INTO,$this);
		$stm->bindParam(":id",$id);
		$stm->execute();
		$stm->fetch();
		}
		
	public function update(){
		$conexion = $this->getConexion();
		$stm = $conexion->prepare("UPDATE habitaciones SET numero = :numero,
		tipo = :tipo, valor_noche = :valor_noche, estado = :estado WHERE id_habitacion = :id");
	
		$stm->bindParam(":numero",$this->numero);
		$stm->bindParam(":tipo",$this->tipo);
		$stm->bindParam(":valor_noche",$this->valor_noche);
		$stm->bindParam(":estado",$this->estado);
		$stm->bindParam(":id",$this->id_habitacion);

		$stm->execute();
	}

	public function delete($id){
		$conexion = $this->getConexion();
		$stm = $conexion->prepare("DELETE FROM habitaciones WHERE id_habitacion = :id");
		$stm->bindParam(":id",$id);
		$stm->execute();
	}

	public function listar(){
		$conexion = $this->getConexion();
		$stm = $conexion->prepare("SELECT * FROM habitaciones");
		$stm->setFetchMode(PDO::FETCH_CLASS,'habitaciones');

		$habitaciones = array();
		$stm->execute();

		while ($obj = $stm->fetch()) {
			$habitaciones[]=$obj;
		}
		return $habitaciones;
	}
}

	?>