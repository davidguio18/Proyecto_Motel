<?php 
	require_once("Conexion.php");
	require_once ("Modelos/Productos.php");

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

				$prod = new Productos();
                $prod->findByPk($obj->producto);
                $obj->Producto =  $prod;


				$servicios[]=$obj;
			}
			return $servicios;

		}

		public function update(){
			$conexion =$this->getConexion();
			$stm = $conexion->prepare("UPDATE servicios SET producto = :producto, precio = :precio, solicitud = :solicitud, alquiler = :alquiler, cantidad = :cantidad WHERE id_servicio = :id");

			$stm->bindParam(":id",$this->id_servicio);
			$stm->bindParam(":producto",$this->producto);
			$stm->bindParam(":precio",$this->precio);
			$stm->bindParam(":solicitud",$this->solicitud);
			$stm->bindParam(":alquiler",$this->alquiler);
			$stm->bindParam(":cantidad",$this->cantidad);

			$stm->execute();

		}

		public function findByPk($id){
			$conexion =$this->getConexion();
			$stm = $conexion->prepare("SELECT * FROM servicios WHERE id_servicio = :id");
			$stm->setFetchMode(PDO::FETCH_INTO,$this);
			$stm->bindParam(":id",$id);
			$stm->execute();
			$stm->fetch();

		}

		public function delete($id){
			$conexion =$this->getConexion();
			$stm = $conexion->prepare("DELETE  FROM servicios WHERE id_servicio = :id");
			$stm->bindParam(":id",$id);
			$stm->execute();

		}

	}

 ?>