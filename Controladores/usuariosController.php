<?php 
//clase
require "Modelos/Usuarios.php";

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
			$guardo = $usuarios->save($nom,$ape,$per,$doc,$con);
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
			require "vistas/usuarios/vew.php";
	}
}

 ?>