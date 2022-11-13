<?php
    
    namespace Controllers\Models;
    use Controllers\Models\Datos;
    
    use Controllers\Config\database;

    class CrudModels extends Datos{

        public function __construct(){
            $this->conexion = new database;
            $this->conexion = $this->conexion->connect();
        }

        public function CreateTable(){
            $sql = "INSERT INTO ventas VALUES (NULL,:name,:producto,
            :cantidad,:ganancia)";

            $statement = $this->conexion->prepare($sql);
            
            $statement->execute(array(
                ":name" => $this->getNombre(),
                ":producto" => $this->getProducto(),
                ":cantidad" => $this->getCantidad(),
                ":ganancia" => $this->getGanancia()
            ));

        }

        public function ReadData(){
            $sql = "SELECT *FROM ventas";
            
            $statement = $this->conexion->prepare($sql);
            $statement->execute();

            $data = $statement->fetchAll();

            return $data;
        }

    }