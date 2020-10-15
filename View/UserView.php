<?php

require_once './libs/Smarty.class.php';

class UserView
{
    //private $title;
    private $smarty;


    function __construct(){
        $this->smarty = new Smarty();
    }

    function showLoginForm($error = ""){
        
        $this->smarty->assign('title', "Login");
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/Log/login.tpl');

    }


    
}
