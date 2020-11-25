<?php

require_once './libs/Smarty.class.php';

class UserView{
    //private $title;
    private $smarty;

    
    function __construct(){
        $this->smarty = new Smarty();
       // $this->smarty->assign('BASEURL', BASE_URL);
    }


    function showLogin($loggedIn,$message=""){
      
    
       //Muestro el template
       $this->smarty->assign('loggedIn', $loggedIn);
       $this->smarty->assign('message', $message);
        $this->smarty->display('templates/login.tpl');
    }

    

}