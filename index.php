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
				require "Controladores/usuariosController.php";
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

            case "alquiler":
                require "Controladores/alquilerController.php";
                alquilerController::main($action);
                break;
			case "habitaciones":
				require "Controladores/habitacionesController.php";
				habitacionesController::main($action);
				break;
			case "vehiculos":
				require "Controladores/vehiculosController.php";
				vehiculocontroller::main($action);
				break;
			case "servicios":
				require "Controladores/serviciosController.php";
				serviciosController::main($action);
				break;	
			default;
				require "Controladores/homeController.php";
				homecontroller::main($action);
		}

 ?>