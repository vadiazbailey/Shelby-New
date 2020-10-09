<?php

require_once "./lib/smarty/Smarty.class.php";

class UserView{
    private $title;
    

    function __construct(){
        $this->title= "Login";
    }

    function showLogin($message = ""){
        $smarty =new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('message', $message);

        //Muestro el template
        $smarty->display('templates/login.tpl');
    }
}