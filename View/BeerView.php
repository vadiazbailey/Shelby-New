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

    function showHome($log,$user,$admin){
        $this->smarty->assign('loggedIn',$log);
        $this->smarty->assign('user',$user);
        $this->smarty->assign('admin',$admin);
     
        $this->smarty->assign('title', 'Shelby Beer');
        $this ->smarty-> display('templates/home.tpl');
    }

    function showBeers($beers, $colour,$log,$user,$admin){
        $this->smarty->assign('cervezas', $beers);
        $this->smarty->assign('colour', $colour);
        $this->smarty->assign('loggedIn',$log);
        $this->smarty->assign('user',$user);
        $this->smarty->assign('admin',$admin);

        $this ->smarty-> display('templates/table.tpl');
       
    }

    function showReserva($log, $user){
        $this->smarty->assign('loggedIn',$log);
        $this->smarty->assign('user',$user);
        $this ->smarty-> display('templates/reservas.tpl');
    }

    function showContacto($log, $user){
        $this->smarty->assign('loggedIn',$log);
        $this->smarty->assign('user',$user);
        $this ->smarty->display('templates/contacto.tpl');
    }

    function mostrarFormEditBeer($beer,$colors,$log,$user,$admin){
        $this->smarty->assign('cerveza', $beer);
        $this->smarty->assign('colors', $colors);
        $this->smarty->assign('loggedIn', $log);
        $this->smarty->assign('user', $user);
        $this->smarty->assign('admin', $admin);
        $this->smarty->display('templates/editBeer.tpl');
    }

    function ShowCommentsCSR($log, $user,$admin) {
        $this->smarty->assign('loggedIn',$log);
        $this->smarty->assign('user',$user);
        $this->smarty->assign('admin',$admin);
        $this->smarty->display('templates/createComment.tpl'); // muestro el template 
    }

    function showFiltroColor($cerveza, $color,$log,$user){;
        $this->smarty->assign('loggedIn', $log);
        $this->smarty->assign('user', $user);
        $this->smarty->assign('colorFiltro', $cerveza);
        $this->smarty->assign('colors', $color);
        $this->smarty->display('templates/cervezasFiltrada.tpl');
    }

}