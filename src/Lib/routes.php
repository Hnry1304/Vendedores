<?php
    
    $router = new \Bramus\Router\Router();

    // Define routes
    // ...

    // Run it!
    $router->get('/', function(){
        echo 'Hello World';
    });
    
    $router->run();