<?php 

require_once("conexion.php");

class Productos  extends conexion{

	public $id_producto;
	public $nombre;
	public $marca;
	public $cantidad;
	public $precio;
	public $estado;
	
	public function __construct(){
	parent::__construct();
	}



public function save($nom, $mar ,$can, $pre, $est){

		$this->nombre = $nom;
		$this->marca = $mar;
		$this->cantidad = $can;
		$this->precio = $pre;
		$this->estado = $est;

	$conexion = $this->getConexion();
	$stm = $conexion->prepare("INSERT INTO productos VALUES (:id_producto, :nombre, :marca, :cantidad, :precio, :estado)");
	return $stm->execute((array)$this);
  }


 	public function listar(){
  	$conexion = $this->getConexion();
  	$stm = $conexion->prepare("SELECT * FROM productos");
  	$stm->setFetchMode(PDO::FETCH_CLASS, 'productos');

  	$productos = array();
  	$stm->execute();

  	while ($obj = $stm->fetch()) {
  		$productos[]=$obj;
  	}
  	return $productos;
  }



  public function findByPk($id){
  	$conexion = $this->getConexion();
  	$stm = $conexion->prepare("SELECT * FROM productos WHERE id_producto = :id");
  	$stm->setFetchMode(PDO::FETCH_INTO, $this);
 	$stm->bindParam(":id",$id);
	$stm->execute();
	$stm->fetch();
}










}


?>