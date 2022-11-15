<?php

    namespace Controllers\Models;

    use Controllers\Models\Datos;
    use Controllers\Config\database;

    class MigrarModels{


        public function __construct(){

            $this->conexion = new database;
            $this->conexion = $this->conexion->connect();            
        }

        public function migrar(){
            $sql = "SELECT *FROM ventas";
            $sql1 = "INSERT INTO vendedores VALUES(
                NULL,:name,:producto,:cantidad,:ganancia
            )";


            $stament = $this->conexion->prepare($sql);
            $stament->execute();

            $data = $stament->fetchAll();


            foreach($data as $datas){                
                
                $stament = $this->conexion->prepare($sql1);
                $stament->execute(array(
                    ":name" => $datas['nombre'],
                    ":producto" => $datas['producto'],
                    ":cantidad" => $datas['cantidad'],
                    ":ganancia" => $datas['ganancia']
                ));
            }
        }

        public function deleteTemporal(){

            $sql = "DELETE FROM ventas";

            $stament = $this->conexion->prepare($sql);
            $stament->execute();
        }
    }
