<?php
//Include que necesito
require_once './Model/ColourModel.php';
require_once './View/ColourView.php';

class ColourController{
     //Variables
    private $colourModel;
    private $colourView;

    //Constructor
    function __construct(){
        $this->colourModel = new ColourModel();
        $this->colourView = new ColourView();
    }

    //Me muestra los colores de cerveza
    function showColours(){
        $colour = $this->colourModel->getColours();
        $this->colourView->showColours($colour);

    }

    //Función que muestra un color
    public function getColour($id_color){
        $colour = $this->colourModel->getColour($id_color);
        $this->view->showColours($colour);
    }

    //Me agraga un color de cerveza
    function insertColour(){
        $nombre=($_POST['nombre']);
        if (isset($nombre)){        
                var_dump($nombre);
            $this->model->insertColour($nombre);     
        }      
        header("Location: " . BEERS);
    }

    //Funcion que me modifica un color
    function editColour(){
        if(isset($_POST['nombre'])){
            $id_color = ($_POST['id']);
            $nombre=($_POST['nombre']);
        }
        $this->model->editColour($id_color, $nombre);
        header("Location: " . BEERS);
    }

    //Función que elimina un color
    function deleteColour($id_color){
        $this->model->deleteColour($id_color);
        header ("Location: " . BEERS);
    }

}