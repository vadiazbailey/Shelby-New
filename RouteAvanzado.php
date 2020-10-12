<?php
    require_once 'RouterClass.php';
    require_once './Controller/BeerController.php';
    require_once './Controller/ColourController.php';
    require_once './Controller/UserController.php';


    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("BEERS", BASE_URL . 'BEERS');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    $r = new Router();

    //Rutas del navegador
    $r->addRoute("home", "GET", "BeerController", "showHome");
    $r->addRoute("cerveza", "GET", "BeerController", "showBeers");
    $r->addRoute("color", "GET", "ColourController", "showColour");
    $r->addRoute("reserva", "GET", "BeerController", "showReserva");
    $r->addRoute("contacto", "GET", "BeerController", "showContacto");
    $r->addRoute("login", "GET", "UserController", "Login");
    $r->addRoute("logout", "GET", "UserController", "Logout");
    $r->addRoute("verifyUser", "POST", "UserController", "verifyUser");



    //Alta, baja y Modificar
    $r->addRoute("insertBeer", "POST", "BeerController", "insertBeer");
    

    //Ruta por defecto.
    $r->setDefaultRoute("BeerController", "showHome");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>