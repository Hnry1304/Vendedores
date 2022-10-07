<?php

namespace Controllers;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class Home
{

    public function __construct(){
        $this->loader =new FilesystemLoader('src/Views');
        $this->twig = new Environment($this->loader);
    }

    public function Create(){
        var_dump($_POST);
    }

    public function Read(){
        
        

        echo $this->twig->render('index.twig');
    }

    public function Update(){
    }

    public function Delete(){
    }
}
