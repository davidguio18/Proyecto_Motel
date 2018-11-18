<?php 
	require "Modelos/Vehiculos.php";

	class vehiculocontroller{

		public static function main($action){

	        $_this = new vehiculoController();
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
				case "view":
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
			if(isset($_POST["Vehiculos"])){
				//GUARDAR EN BD
				$pla = $_POST["Vehiculos"]["placa"];
				$mar = $_POST["Vehiculos"]["marca"];
				$reg = $_POST["Vehiculos"]["registro"];
				$serv = $_POST["Vehiculos"]["servicio"];
				

                $vehiculo = new Vehiculos();
                $guardo = $vehiculo->save($pla, $mar, $serv, $reg);

				if ($guardo) {
					header("Location: index.php?c=vehiculos&a=admin");
				}else{
					echo "Ocurrio un error al guardar";
				}

			}else
				require "Vistas/vehiculos/create.php";
			
		}
		
		private function delete(){
			$vehiculo = new Vehiculos();

			if (isset($_GET["id"])) {
			
				$vehiculo->delete($_GET["id"]);
				header("Location: index.php?c=vehiculos&a=admin");

			}else{
				header("Location: index.php?c=vehiculos&a=admin");
		    }
		}


		private function update(){
			$vehiculo = new Vehiculos();
			$vehiculo->findByPk($_GET["id"]);

			if (isset($_POST["Vehiculos"])) {
				$vehiculo->placa = $_POST["Vehiculos"]["placa"];
				$vehiculo->marca = $_POST["Vehiculos"]["marca"];
				$vehiculo->servicio = $_POST["Vehiculos"]["servicio"];
				$vehiculo->registro = $_POST["Vehiculos"]["registro"];
				
				$vehiculo->update();
				header("Location: index.php?c=vehiculos&a=admin");

			}else{
			require "Vistas/vehiculos/update.php";
			}
		}
		private function view(){
			require "Vistas/vehiculos/view.php";
		} 
		private function admin(){
			//CONSULTAR LISTADO DE LA BD
			$user = new Vehiculos();
			$vehiculos = $user->listar();

			require "Vistas/vehiculos/admin.php";
		}
	}

 ?>