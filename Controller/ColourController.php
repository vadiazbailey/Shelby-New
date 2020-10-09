<?php
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


    function showColour(){
        $colour = $this->colourModel->getColours();
        $this->colourView->showColour($colour);

    }


}