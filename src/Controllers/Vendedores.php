<?php

    namespace Controllers\Controllers;

    use Controllers\Models\VendedoresModels;
    use \Twig\Loader\FilesystemLoader;
    use \Twig\Environment;

    class Vendedores{

        public function __construct(){
            $this->loader = new FilesystemLoader('src/Views');
            $this->twig = new Environment($this->loader);
        }

        public function readVendors($vendedor){
            
            $info = new VendedoresModels;
            $datos = $info->readTable($vendedor);

            echo $this->twig->render('Vendedores/infoVendedor.twig',['datos' => $datos]);
        }
    }