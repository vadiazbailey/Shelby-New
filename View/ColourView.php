<?php

require_once './libs/Smarty.class.php';

class ColourView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASEURL', COLOR);
    }

    function showColours($colour){
        $this->smarty->assign('colour', $colour);
        $this ->smarty-> display('templates/tablaColor.tpl');
    }

    function mostrarFormEditColor($color){
        //var_dump($color);
        //die();
        $this->smarty->assign('nombre', $color);        
        $this ->smarty-> display('templates/editColor.tpl');

    }


}