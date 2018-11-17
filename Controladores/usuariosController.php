<?php 
//clase
require_once("Modelos/Usuarios.php");

class usuariosController{
	public static function main ($action){
		$_this = new usuariosController();
		switch ($action) {
			case 'create':
				$_this->create();
				break;
			case 'delete':
				$_this->delete();
				break;
			case 'update':
				$_this->update();
				break;
			case 'vew':
				$_this->vew();
				break;
			case "admin":
				$_this->admin();
				break;
			
			default:
				throw new Exception("Accion no definido");
				break;
		}
	}
	private function create(){
		if(isset($_POST["Usuarios"])){
			//guardar en la BBDD
			$nom = $_POST["Usuarios"]["nombres"];
			$ape = $_POST["Usuarios"]["apellidos"];
			$per = $_POST ["Usuarios"]["perfil"];
			$doc = $_POST["Usuarios"]["documento"];
			$con = $_POST["Usuarios"]["contrasena"];
			

			$usuarios = new Usuarios();
			$encrip = password_hash($con, PASSWORD_DEFAULT);
			$guardo = $usuarios->save($nom,$ape,$per,$doc,$encrip);
			if($guardo){
				header("Location: index.php?c=usuarios&a=admin");
			}else{
				echo "Ocurrio un error ak guardar";
			}
		}else

		require "Vistas/usuarios/create.php";
	}
	private function admin (){
		//consultamos listado de la BBDD
		$user = new Usuarios();
		$usuarios = $user->vew();

		require"vistas/usuarios/admin.php";
	}
	

	private function vew(){
			require "vistas/usuarios/admin.php";
	}

	private function update(){
		$usuario = new Usuarios();
		$usuario->findByPk($_GET["id"]);

		if(isset($_POST["Usuarios"])){
		
		$usuario->nombres = $_POST["Usuarios"]["nombres"];
		$usuario->apellidos  = $_POST["Usuarios"]["apellidos"];
		$usuario->perfil = $_POST ["Usuarios"]["perfil"];
		$usuario->documento = $_POST["Usuarios"]["documento"];
		$usuario->contrasena  = $_POST["Usuarios"]["contrasena"];
			
		$usuario->update();
		header("Location: index.php?c=usuarios&a=admin");
		}else{
		require "Vistas/usuarios/update.php";
		}
	}


private function delete(){
		$usuario = new Usuarios();
		if(isset($_GET["id"])){
			$usuario->delete($_GET["id"]); 
			
			header("Location: index.php?c=usuarios&a=admin");
		}

	}



}


 ?>