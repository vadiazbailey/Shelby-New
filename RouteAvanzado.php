<?php
    require_once 'RouterClass.php';
    require_once './Controller/BeerController.php';
    require_once './Controller/ColourController.php';
    require_once './Controller/UserController.php';


    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("HOME", BASE_URL. 'showHome');
    define("CERVEZA", BASE_URL. 'showBeers');
    define("COLOR", BASE_URL.'showColours');
    define("RESERVA", BASE_URL.'showReserva');
    define("CONTACTO", BASE_URL.'showContacto');
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
    $r->addRoute("login", "GET", "UserController", "Login");
    $r->addRoute("logout", "GET", "UserController", "Logout");
    $r->addRoute("verifyUser", "POST", "UserController", "verifyUser");



    //Alta, baja y Modificar Cerveza
    $r->addRoute("insertBeer", "POST", "BeerController", "insertBeer");
    $r->addRoute("editBeer/:ID", "GET", "BeerController", "editBeer");
    $r->addRoute("deleteBeer/:ID", "GET", "BeerController", "deleteBeer");

    //Alta, baja y Modificar Cerveza
    $r->addRoute("insertColour", "POST", "ColourController", "insertColour");

    //Ruta por defecto.
    $r->setDefaultRoute("BeerController", "showHome");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>