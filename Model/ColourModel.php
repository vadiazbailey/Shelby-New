<?php

class ColourModel{
    //Variables
    private $db;

    //Constructor
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_shelby;charset=utf8', 
        'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    //Me trae los colores de cervezas
    function getColours(){
        $sentencia = $this->db->prepare("SELECT * FROM color");
        $sentencia->execute();
        $colours = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $colours;
    }

    function getColour($id_color){
        $sentencia = $this->db->prepare("SELECT * FROM color WHERE id_color= ?");
        $sentencia->execute(array($id_color));
        $colour = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $colour;    
    }

    //Agrega un color de cerveza
    function insertColour($nombre){
        var_dump($nombre);
        $sentencia = $this->db->prepare('INSERT INTO color (nombre) VALUES ?');
        $sentencia->execute(array($nombre));
        }

          //Elimina una cerveza
     function DeleteBeer($color_id){
        $sentencia = $this->db->prepare("DELETE FROM color WHERE id=?");
        $sentencia->execute(array($color_id));
    }

     
    //Edita una cerveza
    function editBeer($id_color,$nombre){
      $sentencia = $this->db->prepare('UPDATE color SET nombre=? WHERE id_color=?');
      $sentencia->execute(array($id_color,$nombre));
    }

    
}