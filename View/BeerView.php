<?php
//Llama a la libreria Smarty
require_once './libs/Smarty.class.php';

class BeerView{
    private $smarty;

    function __construct(){
        //Variables
        $this->smarty = new Smarty();
        $this->smarty->assign('BASEURL', BASE_URL);
    }

    function showHome(){
        $this ->smarty-> display('templates/home.tpl');
    }

    function showBeers($beers, $colour){
        $this->smarty->assign('cervezas', $beers);
        $this->smarty->assign('colour', $colour);
        $this ->smarty-> display('templates/table.tpl');
    }

    function showReserva(){
        $this ->smarty-> display('templates/reservas.tpl');
    }

    function showContacto(){
        $this ->smarty-> display('templates/contacto.tpl');
    }
}