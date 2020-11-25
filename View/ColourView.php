<?php

require_once './libs/Smarty.class.php';

class ColourView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('BASEURL', COLOR);
    }

    function showColours($colour,$loggedIn,$user){
        $this->smarty->assign('colour', $colour);
        $this->smarty->assign('loggedIn', $loggedIn);
        $this->smarty->assign('user', $user);
        $this->smarty-> display('templates/tablaColor.tpl');
    }

    function showFiltroColor($colorFiltro){ 
        $this->smarty->assign('colorFiltro', $colorFiltro); 
        $this->smarty->display('templates/filtroColor.tpl');
    }

    function mostrarFormEditColor($color, $id_color,$loggedIn,$user){
        $this->smarty->assign('color', $color);
        $this->smarty->assign('id', $id_color);
        $this->smarty->assign('loggedIn', $loggedIn);
        $this->smarty->assign('user', $user);
        $this ->smarty->display('templates/editColor.tpl');
    }


}