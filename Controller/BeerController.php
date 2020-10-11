<?php
//Include que necesito
require_once './Model/BeerModel.php';
require_once './Model/ColourModel.php';
require_once './View/BeerView.php';

class BeerController{
    //Variables
    private $beerModel;
    private $colourModel;
    private $beerView;
    

    //Constructor
    function __construct(){
        $this->beerModel = new BeerModel();
        $this->colourModel = new ColourModel();
        $this->beerView = new BeerView();
    }

    //Metodos 
    //Me muestra el home
    function showHome(){
        $this-> beerView-> showHome();
    }

    //Me muestra las cervezas
    function showBeers(){
        $beers = $this->beerModel->getBeers();
        $colour = $this->colourModel->getColours();
        $this-> beerView-> showBeers($beers, $colour);
    }

    //Me muestra el html de reserva
    function showReserva(){
        $this-> beerView-> showReserva();
    }

    //Me muestra el html de contacto
    function showContacto(){
        $this-> beerView-> showContacto();
    }

    //Me inserta una cerveza
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

    //Elimina una cerveza
    public function deleteBeer($id_cerveza){
        $this->model->deleteBeer($id_cerveza);

        header ("Location: " . BEERS);
    }
   
    //Edita una cerveza
    public function editBeer(){
        //var_dump($_POST); die;
        if(isset($_POST['estilo'])&&
                ($_POST['volumen'])&&
                ($_POST['graduacion_alcoholica'])&&
                ($_POST['precio'])&&
                ($_POST['cantidad'])&&
                ($_POST['color'])&&
                ($_POST['id_cerveza'])){

            $id_cerveza = ($_POST['id_cerveza']);
            $estilo=($_POST['estilo']);
            $volumen=($_POST['volumen']);
            $graduacion_alcoholica=($_POST['graduacion_alcoholica']);
            $precio=($_POST['precio']);
            $cantidad=($_POST['cantidad']);
            $color=($_POST['color']);

            $this->model->editAlumno ($id_cerveza, $estilo, $volumen, 
            $graduacion_alcoholica, $precio, $cantidad,$color);
            header ("Location: " . BEERS);
        }
    }


   
}