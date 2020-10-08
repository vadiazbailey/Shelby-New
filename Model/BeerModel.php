<?php
class BeerModel{
    //Variable
    private $db;

    //Constructor
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_shelby;charset=utf8', 
        'root', '');
    }

    //Metodos
    function getBeers(){
        $sentencia = $this->db->prepare("SELECT * FROM cerveza");
        $sentencia->execute();
        $beers = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $beers;
    }

    //Agrega una nueva cerveza
    function insertBeer($estilo, $volumen, $graduacion_alcoholica, $precio, $cantidad, 
    $color){
    $sentencia = $this->db->prepare("INSERT INTO cerveza (estilo, volumen, 
    graduacion_alcoholica, precio, cantidad, id_color) VALUES(?,?,?,?,?,?)");
    $sentencia->execute(array($estilo, $volumen, $graduacion_alcoholica, $precio, 
                $cantidad, $color));
    }
}