<?php 
	require_once("Conexion.php");

	class Vehiculos extends Conexion{

		public $id_cliente;
		public $placa;
		public $marca;
		public $servicio;
		public $registro;
		

		public function __construct(){
			parent::__construct();
			
		}

		public function save($pla, $mar, $serv, $reg){
			$this->placa = $pla;
			$this->marca = $mar;
			$this->servicio = $serv;
			$this->registro= $reg;
			

			$conexion =$this->getConexion();
			$stm = $conexion->prepare("INSERT INTO vehiculos VALUES(:id_cliente, :placa, :marca, :servicio, :registro)");
			return $stm->execute((array)$this);

		}

		public function findByPk($id){
			$conexion =$this->getConexion();
			$stm = $conexion->prepare("SELECT * FROM vehiculos WHERE id_cliente = :id");
			$stm->setFetchMode(PDO::FETCH_INTO,$this);
			$stm->bindParam(":id",$id);
			$stm->execute();
			$stm->fetch();

		}

		public function listar(){
			$conexion =$this->getConexion();
			$stm = $conexion->prepare("SELECT * FROM vehiculos");
			$stm->setFetchMode(PDO::FETCH_CLASS,'vehiculos');

			$vehiculo = array();
			$stm->execute();

			while ($obj = $stm->fetch()) {
				$vehiculo[]=$obj;
			}
			return $vehiculo;

		}

		
	}

 ?>