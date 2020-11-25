<?php
require_once './Model/BeerModel.php';
require_once './api/APIView.php';

class ApiBeerController{
    
    private $model;
    private $view;


    function __construct(){
        $this->model = new BeerModel();
        $this->view = new APIView();
    }
    
    //trae todas las cervezas
    function getAll(){
        $beers= $this->model->getBeers();
        $this->view->response($beers);
    }
    
}