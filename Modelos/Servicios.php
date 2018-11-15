<?php 
	require_once("Conexion.php");

	class Servicios extends Conexion{

		public $id_servicio;
		public $producto;
		public $precio;
		public $solicitud;
		public $alquiler;
		public $cantidad;

		public function __construct(){
			parent::__construct();
			
		}

		public function save($pro, $pre, $sol, $alq, $can){
			$this->producto = $pro;
			$this->precio = $pre;
			$this->solicitud = $sol;
			$this->alquiler = $alq;
			$this->cantidad = $can;

			$conexion =$this->getConexion();
			$stm = $conexion->prepare("INSERT INTO servicios VALUES(:id_servicio, :producto, :precio, :solicitud, :alquiler, :cantidad)");
			return $stm->execute((array)$this);

		}

		public function listar(){
			$conexion =$this->getConexion();
			$stm = $conexion->prepare("SELECT * FROM servicios");
			$stm->setFetchMode(PDO::FETCH_CLASS,'Servicios');

			$servicios = array();
			$stm->execute();

			while ($obj = $stm->fetch()) {
				$servicios[]=$obj;
			}
			return $servicios;

		}

		

	}

 ?>