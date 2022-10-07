<?php
    
    use \Controllers\Home;

    $router = new \Bramus\Router\Router();

    
    $router->get('/', function(){
        $home = new Home;
        $home->Read();
    });
    
    //Agregamos nuevos datos a la base de datos
    $router->post('/create',function(){
        $create = new Home;
        $create->Create();
    });
    
    $router->run();