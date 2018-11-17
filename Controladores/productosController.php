<?php 
require "Modelos/Productos.php";
class productosController{
	public static function main($action){
        $_this= new productosController();
		switch ($action) {

				case "create":
				$_this->create();
				break;

				case "update":
				$_this->update();
				break;

				case "delete":
				$_this->delete();
				break;

				case "admin":
				$_this->admin();
				break;

				case "getPrecio":
				$_this->getPrecio();
				break;

				default:
				throw new Exception("Accion no definida");
				break;
				
				
				
			}
	}


private function create(){
	if(isset($_POST["Productos"])){
		echo "el usuario quiere guardar el producto";
		$nom = $_POST["Productos"]["nombre"];
		$mar = $_POST["Productos"]["marca"];
		$can = $_POST["Productos"]["cantidad"];
		$pre = $_POST["Productos"]["precio"];
		$est = "Activo";
		
		$producto = new Productos();
		$guardo = $producto->save($nom, $mar, $can, $pre, $est);

		if($guardo==true){
			header("Location: index.php?c=producto&a=admin");
		}else{
		echo "Ha Ocurrido un error al guardar";
	}
		
	}
	require "Vistas/productos/crearp.php";
}


	
	private function admin(){

		$prod = new Productos();
		$productos = $prod->listar();

		require"Vistas/productos/admin.php";
	}


private function update(){
		$producto = new Productos();
		$producto->findByPk($_GET["id"]);

		if(isset($_POST["Productos"])){
			$producto->nombre = $_POST["Productos"]["nombre"];
			$producto->marca = $_POST["Productos"]["marca"];
			$producto->cantidad = $_POST["Productos"]["cantidad"];
			$producto->precio = $_POST["Productos"]["precio"];
		$producto->estado = $_POST["Productos"]["estado"];


			$producto->update();
			header("Location: index.php?c=producto&a=admin");
			}else{
		require "Vistas/productos/update.php";
	}
}


private function delete(){

		$producto = new Productos();
		$producto->delete($_GET["id"]);

		if(isset($_GET["id"])){
			$producto->delete($_GET["id"]); 
			
			header("Location: index.php?c=producto&a=admin");

			}else{
				header("Location: index.php?c=producto&a=admin");
			}

	}

	private function getPrecio(){
		$pr = new Productos();
		$pr->findByPk($_POST["id"]);
		echo $pr->precio; 
	}

}

 ?>