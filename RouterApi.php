<?php
require_once 'RouterClass.php';
require_once 'api/ComentariosController.php';

$router = new Router();

//armo la tabla de router de la API REST
 $router->addRoute('comentarios', 'GET', 'ComentariosController', 'getComentarios');
 $router->addRoute('comentarios/:ID', 'GET', 'ComentariosController', 'getComentariosBeer');
//run
 $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);