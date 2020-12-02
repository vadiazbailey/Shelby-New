<?php
//Include que necesito
require_once './Model/BeerModel.php';
require_once './Model/ColourModel.php';
require_once './View/BeerView.php';
require_once './Controller/UserController.php';

class BeerController{
    //Variables
    private $beerModel;
    private $colourModel;
    private $beerView;
    private $userController;

    //Constructor
    function __construct(){
        $this->beerModel = new BeerModel();
        $this->colourModel = new ColourModel();
        $this->beerView = new BeerView();
        $this->userController = new UserController();
    }

    //Metodos
    function showHome(){
        $loggedIn = $this->userController->checkLoggedIn();
        if ($loggedIn == true){
            $user = $_SESSION["MAIL"];
        }else{
            $user = "";
        }
        $this->beerView->showHome($loggedIn,$user);
    }

    //Me muestra las cervezas
    function showBeers(){
        $beers = $this->beerModel->getBeers();
        $colour = $this->colourModel->getColours();
        $loggedIn = $this->userController->checkLoggedIn();
        if ($loggedIn == true){
            $user = $_SESSION["MAIL"];
        }else{
            $user = "";
        } 
        $this->beerView->showBeers($beers, $colour,$loggedIn,$user);
    }

    //Me muestra el html de reserva
    function showReserva(){
        $loggedIn = $this->userController->checkLoggedIn();
        if($loggedIn){
            $user = $_SESSION["MAIL"];
        }else{
            $user = "";
        }
        $this->beerView->showReserva($loggedIn, $user);

    }
    function showOpinion(){
        $loggedIn = $this->userController->checkLoggedIn();
        if($loggedIn){
            $user = $_SESSION["MAIL"];
        }else{
            $user = "";
        }
        $this->beerView->ShowCommentsCSR($loggedIn, $user);

    }
  

    //Me muestra el html de contacto
    function showContacto(){
        $loggedIn = $this->userController->checkLoggedIn();
        if($loggedIn){
            $user = $_SESSION["MAIL"];
        }else{
            $user = "";
        }
        $this->beerView->ShowCommentsCSR($loggedIn, $user);    
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
            $loggedIn = $this->userController->checkLoggedIn();
            if ($loggedIn == true){
                $user = $_SESSION["MAIL"];
            }else{
                $user = "";
            } 

            if ($_FILES['imagen']['name']) {
                if ($_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/png") {     
                    $this->beerModel->insertBeer($estilo, $volumen, $graduacion_alcoholica, $precio, $cantidad, $color, $_FILES['imagen']);
                }
                else {
                    $this->view->showError("Formato no aceptado");
                    die();
                }
            }
            else{
                $this->beerModel->insertBeer($estilo, $volumen, $graduacion_alcoholica, $precio, $cantidad, $color); 
            }
        }
            header("Location: " . CERVEZA);
        } 

   //Elimina una cerveza
   function deleteBeer($params = null){
        $id_cerveza = $params[':ID'];
        $this->beerModel->deleteBeer($id_cerveza);
        $loggedIn = $this->userController->checkLoggedIn();
            if ($loggedIn == true){
                $user = $_SESSION["MAIL"];
            }else{
                $user = "";
            } 
            header("Location: " . CERVEZA);
            
    
    }
   
     //Edita una cerveza
    function editBeer($params = null){
       
        $id_cerveza = $params[':ID'];
        $beer = $this->beerModel->getBeer($id_cerveza);
        $colour=$this->colourModel->getColours();
        $loggedIn = $this->userController->checkLoggedIn();
        if ($loggedIn == true){
            $user = $_SESSION["MAIL"];
            $this->beerView->mostrarFormEditBeer($beer,$colour,$loggedIn, $user);
        }else{
            header ("Location: " . CERVEZA);
           
        } 

        
     }

    function mostrarCervezaActualizada(){
        $estilo=$_POST['estilo'];
        $volumen=$_POST['volumen'];
        $graduacion_alcoholica=$_POST['graduacion_alcoholica'];
        $precio=$_POST['precio'];
        $cantidad=$_POST['cantidad'];
        $color=$_POST['color'];
        $id=$_POST['id_cerveza'];
        $image= $_FILES['imagen'];

        $ruta= $this->beerModel->moveFile($image);
        
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
        
        $this->beerModel->editBeer($estilo, $volumen,$graduacion_alcoholica,$precio,$cantidad,$color,$id, $ruta);
        $loggedIn = $this->userController->checkLoggedIn();
            if ($loggedIn == true){
                $user = $_SESSION["MAIL"];
            }else{
                $user = "";
            } 
        header("Location: " . CERVEZA);
    }
    //Funcion para filtrar cervezas por color
   function showFiltroColor(){ 
    $loggedIn = $this->userController->checkLoggedIn();
    if ($loggedIn == true){
        $user = $_SESSION["MAIL"];
    }else{
        $user = "";
    } 
    $color = $this->colourModel->getColours();
    $colorSolicitado = $_GET["colorParaFiltrar"];
    if(!empty($colorSolicitado)){
        $cervezas = $this->beerModel->getColourByFiltro($colorSolicitado);
        $this->beerView->showFiltroColor($cervezas, $color, $loggedIn,$user);
    }
    else{
        //Poner mensaje
    }
}

    
}