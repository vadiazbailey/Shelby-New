<?php

require_once './libs/Smarty.class.php';

class UserView{
    //private $title;
    private $smarty;

    
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASEURL', BASE_URL);
    }


    function showLogin(){
       // $smarty->assign('titulo_s', $this->title);
      //  $smarty->assign('message', $message);

        //Muestro el template
       // $this->smarty->assign('user',$user);
        $this->smarty->display('templates/login.tpl');
    }

}