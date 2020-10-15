<?php
    require_once 'RouterClass.php';
    require_once './Controller/BeerController.php';
    require_once './Controller/ColourController.php';
    require_once './Controller/UserController.php';


    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("HOME", BASE_URL. 'home');
    define("CERVEZA", BASE_URL. 'cerveza');
    define("COLOR", BASE_URL.'color');
    define("RESERVA", BASE_URL.'reserva');
    define("CONTACTO", BASE_URL.'contacto');
    define("LOGIN", BASE_URL.'Login');
    define("LOGOUT", BASE_URL.'Logout');

    $r = new Router();

    //Rutas del navegador
    $r->addRoute("home", "GET", "BeerController", "showHome");
    $r->addRoute("cerveza", "GET", "BeerController", "showBeers");
    $r->addRoute("color", "GET", "ColourController", "showColours");
    $r->addRoute("reserva", "GET", "BeerController", "showReserva");
    $r->addRoute("contacto", "GET", "BeerController", "showContacto");

    //Rutas del usuario
    $r->addRoute("login", "GET", "UserController", "showLogin");
    $r->addRoute("logout", "GET", "UserController", "Logout");
    $r->addRoute("verifyUser", "POST", "UserController", "verifyUser");



    //Alta, baja y Modificar Cerveza
    $r->addRoute("insertBeer", "POST", "BeerController", "insertBeer");
    $r->addRoute("editBeer/:ID", "GET", "BeerController", "editBeer");
    $r->addRoute("deleteBeer/:ID", "GET", "BeerController", "deleteBeer");
    $r->addRoute("mostrarCervezaActualizada", "POST", "BeerController", "mostrarCervezaActualizada");

    //Alta, baja y Modificar Color
    $r->addRoute("insertColour", "POST", "ColourController", "insertColour");
    $r->addRoute("editColour/:ID", "GET", "ColourController", "editColor");
    $r->addRoute("deleteColour/:ID", "GET", "ColourController", "deleteColor");
    $r->addRoute("mostrarColorActualizado", "POST", "ColourController", "mostrarColorActualizado");
    
    //Ruta por defecto.
    $r->setDefaultRoute("BeerController", "showHome");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>