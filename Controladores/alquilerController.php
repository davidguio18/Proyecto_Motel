<?php

require_once ("Modelos/Alquiler.php");

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
                $nom = $_POST["Alquiler"]["nombres"];
                $ape = $_POST["Alquiler"]["apellidos"];
                $doc = $_POST["Alquiler"]["documento"];
                $con = $_POST["Alquiler"]["contrasenia"];

                $usuario = new Usuario();
                $guardo = $usuario->save($nom, $ape,$doc, $con, $est);

                if ($guardo) {
                    header("Location: index.php?c=usuarios&a=admin");
                }else{
                    echo "Ocurrio un error al guardar";
                }
            }else {
                require "Vistas/usuarios/create.php";
            }
        }


        private function admin(){

            $prod = new Productos();
            $productos = $prod->listar();

            require"Vistas/productos/admin.php";
        }


        private function update(){
            $producto = new Productos();
            $producto->findByPk($_GET["id"]);

            if(isset($_POST["Productos"])){
                $producto->nombre = $_POST["Productos"]["nombre"];
                $producto->marca = $_POST["Productos"]["marca"];
                $producto->cantidad = $_POST["Productos"]["cantidad"];
                $producto->precio = $_POST["Productos"]["precio"];
                $producto->estado = $_POST["Productos"]["estado"];


                $producto->update();
                header("Location: index.php?c=producto&a=admin");
            }else{
                require "Vistas/productos/update.php";
            }
        }


        private function delete(){

            $producto = new Productos();
            $producto->delete($_GET["id"]);

            if(isset($_GET["id"])){
                $producto->delete($_GET["id"]);

                header("Location: index.php?c=producto&a=admin");

            }else{
                header("Location: index.php?c=producto&a=admin");
            }

        }


    }