<?php

class AutenticacionController{


 // CONSTRUCTOR
 function __construct() {
    if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }   
}

// VERIFICA QUE SE HAYA INICIADO UNA SESIÓN
function login($usuarioLoggeado){
    session_start();
    $_SESSION["MAIL"] = $usuarioLoggeado->mail;
    $_SESSION['ADMIN'] = $usuarioLoggeado->admin;
    $_SESSION['ID_USUARIO'] = $usuarioLoggeado->id_usuario;
}

// VERIFICA SI HAY UNA SESIÓN ABIERTA
function checkLoggedIn(){
        //session_start();
        if (!isset($_SESSION['ALIAS'])) {
            return false;
        }else{
            return true;
        }
}

// VERIFICA SI EL USUARIO LOGGEADO ES ADMIN O ES UN USUARIO REGISTRADO
function checkAdmin(){
    if ($this->checkLoggedIn()){ 
        if ($_SESSION['ADMINISTRADOR'] == 1)
            return true;
        else{
            return false;
        }
    }
}

// CIERRA SESIÓN
function logout(){
    session_start();        
    session_destroy();
    header("Location: ". LOGIN);
}
}