<?php

namespace Controllers\Controllers;

use GUMP;
use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;
use \Controllers\Models\CrudModels;

class Home
{

    public function __construct()
    {
        $this->loader = new FilesystemLoader('src/Views');
        $this->twig = new Environment($this->loader);
    }

    public function Create()
    {

        $gump = new GUMP();

        $gump->validation_rules([
            'vendedor' => 'required',
            'producto' => 'required',
            'cantidad' => 'required',
            'ganancia' => 'required'
        ]);

        $valid_data = $gump->run($_POST);

        session_start();
        if ($gump->errors()) {
            $_SESSION['errores'] =  $gump->get_errors_array();
            header("Location: /Project1");
        } else {
            $crear = new CrudModels;
            $crear->setNombre($valid_data['vendedor']);
            $crear->setProducto($valid_data['producto']);
            $crear->setCantidad($valid_data['cantidad']);
            $crear->setGanancia($valid_data['ganancia']);

            $crear->CreateTable();

            header("Location: /Project1");
        }
    }

    public function Read(){
        session_start();
        
        $data = new CrudModels;
        $datos = $data->ReadData();
        
        $nombre = "Henry";
        
        if(isset($_SESSION['errores'])){
            $mensaje = $_SESSION['errores'];

            
            echo $this->twig->render('index.twig',['datos' => $datos, 'errores' => $mensaje, 'nombre' => $nombre]);
        }else{
            echo $this->twig->render('index.twig',['datos' => $datos, 'nombre' => $nombre]);
        }
    }

    public function Update()
    {
    }

    public function Delete()
    {
    }
}
