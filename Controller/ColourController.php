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
            $this->colourModel->insertColour($nombre);     
        }      
        header("Location: " . COLOR);
    }

    //Funcion que me modifica un color
    function editColor($params = null){
        $id_color = $params[':ID'];
        $color = $this->colourModel->getColour($id_color);
        $this->colourView->mostrarFormEditColor($color);
        header("Location: " . COLOR);
    }

    function mostrarColorActualizado(){
        $nombre = $_POST ['nombre'];
        $id = $_POST ['id_color'];
        if (empty($nombre)){
            die("estilo vacio");
        }
        $this->colourModel->editColor($nombre, $id);
       // header("Location: " . COLOR);   
    }

    //Función que elimina un color
    function deleteColor($params = null){
        $id_color = $params[':ID'];
        $color = $this->colourModel->getColour($id_color);
        $this->colourModel->DeleteColor($id_color);
        header ("Location: " . COLOR);
    }

    

    

}