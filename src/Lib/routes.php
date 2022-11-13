<?php
    
    use Controllers\Controllers\Home;
    use Controllers\Controllers\migrarDatos;
    use Controllers\Controllers\Vendedores;

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
    
    $router->get('/vendedor/{vendedor}', function($vendedor){
        $nombre = new Vendedores;
        $nombre->readVendors($vendedor);
    });
    

    $router->get('/migrar', function(){
        $migrate = new migrarDatos;
        
    });

    $router->run();