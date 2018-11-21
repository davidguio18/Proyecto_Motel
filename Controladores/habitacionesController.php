<?php 

require "Modelos/habitaciones.php";

class habitacionesController {

	public static function main ($action){
		$_this = new habitacionesController();
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
            case "update2":
                $_this->update2();
                break;
			case "view":
				$_this->view();
				break;
			case "admin":
				$_this->admin();
				break;
			case "admin2":
				$_this->admin2();
				break;
            case "getValor":
                $_this->getvalor();
                break;
			default:
				throw new Exception("Accion no definida");		
				break;
		}
	}
		private function admin(){
		$habit = new habitaciones();
		$habitacion = $habit->listar();

		require "Vistas/habitacion/admin.php";

		}

        private function admin2(){
            $habit = new habitaciones();
            $habitacion = $habit->listar2();

            require "Vistas/habitacion/admin2.php";

        }

        private function create(){
            if(isset($_POST["habitaciones"])){
                //GUARDAR EN LA BBDD
                $num = $_POST["habitaciones"]["numero"];
                $tip = $_POST["habitaciones"]["tipo"];
                $val = $_POST["habitaciones"]["valor_noche"];
                $est = "Activo";

                $habitacion = new habitaciones();
                $habitacion->findBynumber($numero);
                $guardo = $habitacion->save($num,$tip,$val,$est);

                if($guardo){
                $_SESSION["numero"] = $numero;
                    header("Location: index.php?c=habitaciones&a=admin");
                }else{
                    header("Location: index.php?c=habitaciones&a=create&error=true");
                }

            }else
            require "Vistas/habitacion/create.php";
        }

        private function update(){
            $habitacion = new habitaciones();
            $habitacion->findByPK($_GET["id"]);

            if(isset($_POST["habitaciones"])){
                $habitacion->numero = $_POST["habitaciones"]["numero"];
                $habitacion->tipo = $_POST["habitaciones"]["tipo"];
                $habitacion->valor_noche = $_POST["habitaciones"]["valor_noche"];
                $habitacion->estado = $_POST["habitaciones"]["estado"];

                $habitacion->update();
                header("Location: index.php?c=habitaciones&a=admin");
            }else{
                require "Vistas/habitacion/update.php";
            }
        }

        private function update2(){
            $habitacion = new habitaciones();
            $habitacion->findByPK($_GET["id"]);

            if(isset($_POST["habitaciones"])){
                $habitacion->estado = $_POST["habitaciones"]["estado"];

                $habitacion->update2();
                header("Location: index.php?c=habitaciones&a=admin2");
            }else{
                require "Vistas/habitacion/update2.php";
            }
        }

	private function delete(){
		$habitacion = new habitaciones();
		

		if(isset($_GET["id"])){
			$habitacion->delete($_GET["id"]);

			header("Location: index.php?c=habitaciones&a=admin");
		}else{
			header("Location: index.php?c=habitaciones&a=admin");
		}
	}

	private function view()
    {
        $habitacion = new habitaciones();
        if($_POST['hbt']!= "")
        	$habitacion = $habitacion->view($_POST['hbt']);
        else
        	$habitacion = $habitacion->listar();
        require "Vistas/habitacion/admin.php";
    }

	private function search(){
		
	}

    private function getValor(){
        $vh = new habitaciones();
        $vh->findByPk($_POST["id"]);
        echo $vh->valor_noche;
        //return $valor_hora;
    }

	
}

 ?>