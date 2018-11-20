<?php
    require_once ("conexion.php");
    require_once ("Modelos/habitaciones.php");
    require_once ("Modelos/Usuarios.php");
    require_once ("Modelos/Vehiculos.php");

    class Alquiler extends conexion{

        public $id_alquiler;
        public $habitacion;
        public $cliente;
        public $valor_hora;
        public $ingreso;
        public $salida;
        public $vendedor;



        public function __construct(){
            parent::__construct();
        }

        public function save($hab, $cli ,$vh, $ing, $sal, $vend){
            $this->habitacion = $hab;
            $this->cliente = $cli;
            $this->valor_hora = $vh;
            $this->ingreso = $ing;
            $this->salida = $sal;
            $this->vendedor = $vend;

            $conexion = $this->getConexion();
            $stm = $conexion->prepare("INSERT INTO alquileres VALUES (:id_alquiler, :habitacion, :cliente, :valor_hora, :ingreso, :salida, :vendedor)");
            return $stm->execute((array)$this);
        }


        /**
         * @return array
         */
        public function listar(){
            $conexion = $this->getConexion();
            $stm = $conexion->prepare("SELECT * FROM alquileres");
            $stm->setFetchMode(PDO::FETCH_CLASS, 'alquiler');

            $alquiler = array();
            $stm->execute();

            while ($obj = $stm->fetch()) {

                //traemos el objeto habitacion con el id de todos los alquileres  y a habitacion
                // le volvemos a traer el objeto para que imprima todos los alquileres
                $hab = new habitaciones();
                $hab->findByPk($obj->habitacion);
                $obj->Habitacion =  $hab;

                $veh = new Vehiculos();
                $veh->findByPk($obj->cliente);
                $obj->Cliente = $veh;

                $cl = new Usuarios();
                $cl->findByPk($obj->vendedor);
                $obj->Vendedor = $cl;

                // imprimimos los objetos del alquiler para mostrarlos
                $alquiler[]=$obj;
            }
            return $alquiler;
        }


        public function update(){
            $conexion = $this->getConexion();
            $stm = $conexion->prepare("UPDATE alquileres SET habitacion = :habitacion, cliente = :cliente, valor_hora = :valor_hora, ingreso = :ingreso, salida = :salida, vendedor = :vendedor WHERE id_alquiler = :id");
            $stm->bindParam(":habitacion",$this->habitacion);
            $stm->bindParam(":cliente",$this->cliente);
            $stm->bindParam(":valor_hora",$this->valor_hora);
            $stm->bindParam(":ingreso",$this->ingreso);
            $stm->bindParam(":salida",$this->salida);
            $stm->bindParam(":vendedor",$this->vendedor);

            $stm->execute();

        }

        public function findByPk($id){
            $conexion = $this->getConexion();
            $stm = $conexion->prepare("SELECT * FROM alquileres WHERE id_alquiler = :id");
            $stm->setFetchMode(PDO::FETCH_INTO, $this);
            $stm->bindParam(":id",$id);
            $stm->execute();
            $stm->fetch();

            $hab = new habitaciones();
            $hab->findByPk($this->habitacion);
            $this->Habitacion =  $hab;

            $veh = new Vehiculos();
            $veh->findByPk($this->cliente);
            $this->Cliente = $veh;

            $cl = new Usuarios();
            $cl->findByPk($this->vendedor);
            $this->Vendedor = $cl;
        }

        public function delete($id){
            $conexion = $this->getConexion();
            $stm = $conexion->prepare("DELETE FROM alquileres WHERE id_alquiler = :id");

            $stm->bindParam(":id",$id);
            $stm->execute();
        }

    }