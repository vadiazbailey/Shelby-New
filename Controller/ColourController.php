<?php
//Include que necesito
require_once './Model/ColourModel.php';
require_once './View/ColourView.php';

class ColourController{
     //Variables
    private $colourModel;
    private $colourView;
    private $userController;

    //Constructor
    function __construct(){
        $this->colourModel = new ColourModel();
        $this->colourView = new ColourView();
        $this->userController = new UserController();
    }

    //Me muestra los colores de cerveza
    function showColours(){
        $colour = $this->colourModel->getColours();
        $loggedIn = $this->userController->checkLoggedIn();
        $user = $_SESSION["MAIL"];
        $this->colourView->showColours($colour,$loggedIn,$user);

    }

    //Función que muestra un color
    public function getColour($id_color){
        $loggedIn = $this->userController->checkLoggedIn();
        $user = $_SESSION["MAIL"];
        $colour = $this->colourModel->getColour($id_color);
       
        $this->view->showColours($colour,$loggedIn,$user);
    }

    //Me agraga un color de cerveza
    function insertColour(){
        $nombre=($_POST['nombre']);
        if (isset($nombre)){        
                var_dump($nombre);
            $this->colourModel->insertColour($nombre);
            $loggedIn = $this->userController->checkLoggedIn();
            if ($loggedIn == true){
                $user = $_SESSION["ALIAS"];
            }else{
                header("Location: " . COLOR);
             
            }      
        }      
    }

    //Funcion que me modifica un color
    function editColor($params = null){
        $id_color = $params[':ID'];
        $color = $this->colourModel->getColour($id_color);
        $loggedIn = $this->userController->checkLoggedIn();
            if ($loggedIn == true){
                $user = $_SESSION["MAIL"];
                $this->colourView->mostrarFormEditColor($color, $id_color,$loggedIn,$user);
            }else{
                header("Location: " . COLOR);
            } 
    }

    function mostrarColorActualizado(){
        $nombre = $_POST ['nombre'];
        $id_color = $_POST ['id_color'];
        $this->colourModel->editColor($nombre, $id_color);
        $loggedIn = $this->userController->checkLoggedIn();
        if ($loggedIn == true){
            $user = $_SESSION["ALIAS"];
        }else{
            $user = "";
        } 
        header("Location: " . COLOR);
    }

    //Función que elimina un color
    function deleteColor($params = null){
        $id_color = $params[':ID'];
        $color = $this->colourModel->getColour($id_color);
        $this->colourModel->DeleteColor($id_color);
        $loggedIn = $this->userController->checkLoggedIn();
        if ($loggedIn == true){
            $user = $_SESSION["ALIAS"];
        }else{
            $user = "";
        } 
        header ("Location: " . COLOR);
    }

    

    

}