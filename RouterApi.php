<?php
require_once 'RouterClass.php';
require_once 'api/ApiBeerController.php';

$router = new Router();

//armo la tabla de router de la API REST
 $router->addRoute('beers', 'GET', 'ApiBeerController', 'getAll');

//run
 $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);