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
        //$logeado = $this->userName->checkLoggedIn();     
        $estilo=$_POST['cerveza'];
        $volumen=$_POST['volumen'];
        $graduacion_alcoholica=$_POST['graduacion'];
        $precio=$_POST['precio'];
        $cantidad=$_POST['cantidad'];
        $color=$_POST['color'];
        if(!empty($estilo)&& !empty($volumen)&& !empty($graduacion_alcoholica)&& !empty($precio)&&!empty($cantidad)&&!empty($color)){
            $this->beerModel->insertBeer($estilo, $volumen, $graduacion_alcoholica, $precio, $cantidad, $color);
            header("Location: " . CERVEZA);
        }     
    }

   //Elimina una cerveza
   public function deleteBeer($params = null){
    $id_cerveza = $params[':ID'];
    $this->beerModel->deleteBeer($id_cerveza);
    header ("Location: " . CERVEZA);
}
   
     //Edita una cerveza
     public function editBeer($params = null){
       
        $id_cerveza = $params[':ID'];
        $beer = $this->beerModel->getBeer($id_cerveza);
        $colour=$this->colourModel->getColours();
        $this->beerView->mostrarFormEditBeer($beer,$colour);
        //header ("Location: " . CERVEZA);

        
     }

    function mostrarCervezaActualizada(){
        $estilo=$_POST['estilo'];
        $volumen=$_POST['volumen'];
        $graduacion_alcoholica=$_POST['graduacion_alcoholica'];
        $precio=$_POST['precio'];
        $cantidad=$_POST['cantidad'];
        $color=$_POST['color'];
        $id=$_POST['id_cerveza'];
        
        if (empty($estilo)){
            die("estilo vacio");
        }
        if (empty($volumen)){
            die("volumen vacio");
        }
        if (empty($graduacion_alcoholica)){
            die("graduacion vacio");
        }
        if (empty($precio)){
            die("precio vacio");
        }
        if (empty($cantidad)){
            die("cantidad vacio");
        }
        if (empty($color)){
            die("color vacio");
        }
        $this->beerModel->editBeer($estilo, $volumen,$graduacion_alcoholica,$precio,$cantidad,$color,$id);
        header("Location: " . CERVEZA);
    }


   
}