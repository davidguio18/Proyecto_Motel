<?php 
	require_once ("Modelos/Servicios.php");
	require_once ("Modelos/Alquiler.php");

	class servicioscontroller{

		public static function main($action){

	        $_this = new serviciosController();
			switch ($action) {
				case "create":
					$_this->create();
					break;
				case "delete":
				    $_this->delete();
				    break;	
				case "update":
					$_this->update();
					break;	
				case "search":
					$_this->view();
					break;
				case "admin":
					$_this->admin();
					break;		
				default:
				    throw new Exception("Accion no definida");	
			}
		}
		private function create(){
			if(isset($_POST["Servicios"])){
				//GUARDAR EN BD
				$pro = $_POST["Servicios"]["producto"];
				$pre = $_POST["Servicios"]["precio"];
				$sol = $_POST["Servicios"]["solicitud"];
				$alq = $_POST["Servicios"]["alquiler"];
				$can = $_POST["Servicios"]["cantidad"];

				$servicio = new Servicios();
				$guardo = $servicio->save($pro, $pre, $sol, $alq, $can);

				if ($guardo) {
					header("Location: index.php?c=servicios&a=admin");
				}else{
					echo "Ocurrio un error al guardar";
				}
			}else {
                // carga el numero de las habitaciones Disponibles
                $alq = new Alquiler();
                $codAlq = $alq->listar();

                require "Vistas/servicios/create.php";
            }
		}

		private function update(){
			$servicio = new Servicios();
			$servicio->findByPk($_GET["id"]);

			if (isset($_POST["Servicios"])) {
				$servicio->producto = $_POST["Servicios"]["producto"];
				$servicio->precio = $_POST["Servicios"]["precio"];
				$servicio->solicitud = $_POST["Servicios"]["solicitud"];
				$servicio->alquiler = $_POST["Servicios"]["alquiler"];
				$servicio->cantidad = $_POST["Servicios"]["cantidad"];
				
				$servicio->update();
				header("Location: index.php?c=servicios&a=admin");

			}else{
			require "Vistas/servicios/update.php";

			}
		}

		private function delete(){
		$servicio = new Servicios();
		
			if(isset($_GET["id"])){
				$servicio->delete($_GET["id"]);

				header("Location: index.php?c=servicios&a=admin");
			}else{
				header("Location: index.php?c=servicios&a=admin");
			}
		}
		
		private function admin(){
			$ser = new Servicios();
			$servicios = $ser->listar();

			require "Vistas/servicios/admin.php";
		}

		private function search(){
		
		}
	}

 ?>