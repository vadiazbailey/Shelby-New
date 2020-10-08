<?php
    require_once 'RouterClass.php';
    require_once './Controller/BeerController.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("BEERS", BASE_URL . 'BEERS');
    $r = new Router();

    //Rutas del navegador
    $r->addRoute("home", "GET", "BeerController", "showHome");
    $r->addRoute("cerveza", "GET", "BeerController", "showBeers");
    $r->addRoute("reserva", "GET", "BeerController", "showReserva");
    $r->addRoute("contacto", "GET", "BeerController", "showContacto");

    //Alta, baja y Modificar
    $r->addRoute("insert", "POST", "BeerController", "insertBeer");
    

    //Ruta por defecto.
    $r->setDefaultRoute("BeerController", "showHome");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>