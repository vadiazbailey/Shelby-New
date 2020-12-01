<?php
require_once 'RouterClass.php';
require_once 'api/ComentariosController.php';

$router = new Router();

//armo la tabla de router de la API REST
 $router->addRoute('comentarios', 'GET', 'ComentariosController', 'getComentarios');
 $router->addRoute('comentarios/:ID', 'GET', 'ComentariosController', 'getComentariosBeer');
 $router->addRoute('comentarios/:ID', 'DELETE', 'ComentariosController', 'deleteComentario');
 $router->addRoute('comentarios', 'POST', 'ComentariosController', 'addComentario');
 $router->addRoute('comentarios/:ID', 'PUT', 'ComentariosController', 'updateComentario');

 //run
 $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);