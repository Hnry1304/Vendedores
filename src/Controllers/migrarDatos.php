<?php
    
    namespace Controllers\Controllers;
    
    use \Controllers\Models\MigrarModels;

    class migrarDatos{

        public function __construct(){

            $this->m = new MigrarModels;
            $this->m->migrar();
            $this->m->deleteTemporal();

            header("Location: /Project1");
        }
    }