<?php
require_once './Model/BeerModel.php';
require_once './View/BeerView.php';

class BeerController{
    //Variables
    private $beerModel;
    private $beerView;
    private $colour;

    //Constructor
    function __construct(){
        $this->beerModel = new BeerModel();
        $this->beerView = new BeerView();
        $this->colour = new ColourController();
    }

    private function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["MAIL"])){
            header("Location: ".LOGIN);
            
        }
    }

    //Metodos
    function showHome(){
        $this-> beerView-> showHome();
    }

    function showBeers(){
        $beers = $this->beerModel->getBeers();
        $this-> beerView-> showBeers($beers);
    }

    function showReserva(){
        $this-> beerView-> showReserva();
    }

    function showContacto(){
        $this-> beerView-> showContacto();
    }

    function insertBeer(){
        $estilo=($_POST['cerveza']);
        $volumen=($_POST['volumen']);
        $graduacion_alcoholica=($_POST['graduacion']);
        $precio=($_POST['precio']);
        $cantidad=($_POST['cantidad']);
        $color=($_POST['color']);


        if (!empty($estilo) && !empty($volumen) && !empty($graduacion_alcoholica) && !empty($precio) 
        && !empty($cantidad) && !empty($color)){
            
            $this->model->insertBeer($estilo,$volumen,$graduacion_alcoholica,$precio,
                $cantidad,$color);
                
            }      
            header("Location: " . BEERS);
    }


   
}