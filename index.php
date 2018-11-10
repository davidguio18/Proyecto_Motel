<?php 
   
    session_start();
	$action = "home";
	$controller = "home";

	if (isset($_GET["a"])) 
		$action = $_GET["a"];
	

	if (isset($_GET["c"])) 
		$controller = $_GET["c"];
	
		switch ($controller) {
			case "usuarios":
				require "Controladores/UsuariosController.php";
				usuariosController::main($action);
				break;

			case"producto":
				require "Controladores/productosController.php";
				productosController::main($action);
				break;

			case "administrador":
				require "Controladores/AdministradorController.php";
				productosController::main($action);
				break;
			default;
				require "Controladores/homeController.php";
				homecontroller::main($action);
		}

 ?>