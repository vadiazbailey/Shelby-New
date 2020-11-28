<?php
require_once './Model/BeerModel.php';
require_once './api/APIView.php';

abstract class ApiController{
    
    protected $model;
    protected $view;
    private $data;


    function __construct(){
        $this->view = new APIView();
        $this->data = file_get_contents("php://input"); 
    }
    
 // Transforma a json los datos 
 function getData(){ 
    return json_decode($this->data); 
} 



}