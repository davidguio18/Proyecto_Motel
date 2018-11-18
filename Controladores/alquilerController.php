<?php

    require_once ("Modelos/Alquiler.php");
    require_once ("Modelos/habitaciones.php");
    require_once ("Modelos/Usuarios.php");
    require_once ("Modelos/Vehiculos.php");

    class alquilerController{

        public static function main($action){
            $_this = new alquilerController();
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
            if(isset($_POST["Alquiler"])){
                //GUARDAR EN BD
                $hab = $_POST["Alquiler"]["habitacion"];
                $cli = $_POST["Alquiler"]["cliente"];
                $vh = $_POST["Alquiler"]["valor_hora"];
                $ing = $_POST["Alquiler"]["ingreso"];
                $sal = null;// = $_POST["Alquiler"]["salida"];
                $ven = $_POST["Alquiler"]["vendedor"];

                $alquiler = new Alquiler();
                $guardo = $alquiler->save($hab, $cli, $vh, $ing, $sal, $ven);

                if ($guardo) {
                    header("Location: index.php?c=alquiler&a=admin");
                }else{
                    echo "Ocurrio un error al guardar";
                }
            }else {
                // carga el numero de las habitaciones Disponibles
                $hab = new habitaciones();
                $numHab = $hab->listar();

                //cargar la placa de los usuarios
                $vehiculos = new Vehiculos();
                $placaVehiculo = $vehiculos->listar();

                // carga el nombre y apellidos del vendedor
                $usuario = new Usuarios();
                $vendedores = $usuario->vew();

                // carga la vista de crear alquiler
                require "Vistas/alquiler/create.php";
            }
        }

        private function admin(){
            $alq = new Alquiler();
            $alquileres = $alq->listar();
            require "Vistas/alquiler/admin.php";
        }


        private function update(){
            $alquiler = new Alquiler();
            $alquiler->findByPk($_GET["id"]);

            if(isset($_POST["Alquiler"])){
                $alquiler->habitacion = $_POST["Productos"]["nombre"];
                $alquiler->cliente = $_POST["Productos"]["marca"];
                $alquiler->valor_hora = $_POST["Productos"]["cantidad"];
                $alquiler->ingreso = $_POST["Productos"]["precio"];
                $alquiler->salida = $_POST["Productos"]["estado"];
                $alquiler->vendedor = $_POST["Productos"]["estado"];

                $alquiler->update();
                header("Location: index.php?c=alquiler&a=admin");
            }else{
                require "Vistas/alquiler/update.php";
            }
        }

        private function delete(){
            $alquiler = new Alquiler();
            $alquiler->delete($_GET["id"]);
            if(isset($_GET["id"])){
                $alquiler->delete($_GET["id"]);
                header("Location: index.php?c=alquiler&a=admin");
            }else{
                header("Location: index.php?c=alquiler&a=admin");
            }
        }
    }