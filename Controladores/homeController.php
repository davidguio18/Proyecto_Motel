<?php 

	require_once("Modelos/Usuarios.php");

	class homecontroller{

		public static function main($action){
            // verificamos el inico de sesion
            if (!isset($_SESSION["Usuario"]) && $_GET["a"] != "login")
                    header("location: index.php?c=home&a=login");
	        $_this = new homeController();
			switch ($action) {
				case "home":
					$_this->home();
					break;
				case "login":
				    $_this->login();
				    break;	
				case "logout":
					$_this->logout();
					break;	
				default:
				    throw new Exception("Accion no definida");	
				
			}
		}


		private function home(){
			header("location: index.php?c=habitaciones&a=admin2");
		}
		private function login(){
			if (isset($_POST["Login"]) && $_POST["Login"]["documento"] != "" && $_POST["Login"]["contrasena"] != ""){
			    // Iniciar Sesion
                $documento = $_POST["Login"]["documento"];
                $contrasena = $_POST["Login"]["contrasena"];

                $usuario = new Usuarios();
                $usuario->findByDocument($documento);

                if ($usuario->contrasena == $contrasena){
                    $_SESSION["Usuario"] = $usuario;
                    $_SESSION["Perfil"] = "Administrador";

      
                    header("location: index.php?c=home&a=home");
                }else{
                    header("Location: index.php?c=home&a=login&error=true");
                }
            }else{
                require "login.php";
            }
		}
		private function logout(){
			session_destroy();
			header("location: index.php?c=home&a=login");
		}
	}


 ?>