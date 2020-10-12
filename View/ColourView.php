<?php

require_once './libs/Smarty.class.php';

class ColourView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASEURL', BASE_URL);
    }

    function showColour($color){
        $this->smarty->assign('colour', $color);
        $this->smarty->display('templates/tablaColor.tpl');
    }



}