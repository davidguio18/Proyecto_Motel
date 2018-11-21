<?php 

	require_once("Modelos/Usuarios.php");

	class homecontroller{

		public static function main($action){
            // verificamos el inico de sesion
            if (!isset($_SESSION["Usuario"]) && $_GET["a"] != "login" && $_GET["a"] != "home")
                    header("location: index.php?c=home&a=home");
	        $_this = new homeController();
			switch ($action) {
                case "home":
                    $_this->home();
                    break;
				case "homeAdmin":
					$_this->homeAdmin();
					break;
                case "homeVendedor":
                    $_this->homeVendedor();
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
            include ("portada.php");
        }

		private function homeAdmin(){
            include("Vistas/home/home.php");
		}

        private function homeVendedor(){
            header("location: index.php?c=habitaciones&a=admin2");
        }

		private function login(){
			if (isset($_POST["Login"]) && $_POST["Login"]["documento"] != "" && $_POST["Login"]["contrasena"] != "") {
                // Iniciar Sesion
                $documento = $_POST["Login"]["documento"];
                $contrasena = $_POST["Login"]["contrasena"];

                $usuario = new Usuarios();
                $usuario->findByDocument($documento);
                if (password_verify($contrasena,$usuario->contrasena) && $usuario->perfil == "Administrador") {
                    $_SESSION["Usuario"] = $usuario;
                    $_SESSION["Perfil"] = "Administrador";

                    echo "soy Administrador";
                    header("location: index.php?c=home&a=homeAdmin");
                }else if(password_verify($contrasena,$usuario->contrasena) && $usuario->perfil == "Vendedor"){
                    $_SESSION["Usuario"] = $usuario;
                    $_SESSION["Perfil"] = "Vendedor";

                    echo "soy vendedor";
                    header("location: index.php?c=home&a=homeVendedor");

                }else{
                    header("Location: index.php?c=home&a=login&error=true");
                }
            }else{
                session_destroy();
                require "login.php";
            }
		}

		private function logout(){
			session_destroy();
			header("location: index.php?c=home&a=login");
		}
	}


 ?>