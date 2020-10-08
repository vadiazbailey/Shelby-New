<?php
require_once './Model/BeerModel.php';
require_once './View/BeerView.php';

class BeerController{
    //Variables
    private $beerModel;
    private $beerView;

    //Constructor
    function __construct(){
        $this->beerModel = new BeerModel();
        $this->beerView = new BeerView();
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

        if(isset($_POST['estilo'])&&($_POST['volumen'])&&($_POST['graduacion_alcoholica'])
        &&($_POST['precio'])&&($_POST['cantidad'])&&($_POST['color'])){
            $estilo=($_POST['estilo']);
            $volumen=($_POST['volumen']);
            $graduacion_alcoholica=($_POST['graduacion_alcoholica']);
            $precio=($_POST['precio']);
            $cantidad=($_POST['cantidad']);
            $color=($_POST['color']);

        }      
        $this->model->insertBeer($estilo,$volumen,$graduacion_alcoholica,$precio,
            $cantidad,$color);
        header("Location: " . BEERS);
    }


   
}