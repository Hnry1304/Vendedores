<?php

    namespace Controllers\Config;
    use PDO;
    use Exception;
    class database{
        
        private  $conexion;

        public function __construct(){
            try{
                $this->conexion = new PDO('mysql:host=localhost;dbname=project1;','root','');
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                
            }catch(Exception $e){
                $this->conexion = 'Error De Conexion';
                echo "Error: " . $e->getMessage();
            }
        }

        public function connect(){
            return $this->conexion;
        }
    }
