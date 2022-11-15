<?php

    namespace Controllers\Models;

    use Controllers\Config\database;

    class VendedoresModels{

        public function __construct(){
            $this->conexion = new database;
            $this->conexion = $this->conexion->connect();
        }


        public function readTable($nombre){

            $sql = "SELECT *FROM vendedores WHERE nombre = :name";

            $statement = $this->conexion->prepare($sql);

            $statement->execute(array(
                ":name" => $nombre
            ));

            $data = $statement->fetchAll();

            return $data;
        }
        
    }
