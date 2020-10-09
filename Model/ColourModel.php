<?php

class ColourModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_shelby;charset=utf8', 
        'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getColours(){
        $sentencia = $this->db->prepare("SELECT * FROM color");
        $sentencia->execute();
        $colours = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $colours;
    }

    //Agrega una nueva cerveza
    function insertColours($color){
        $sentencia = $this->db->prepare("INSERT INTO color (nombre) VALUES(?)");
        $sentencia->execute(array($color));
        }

          //Elimina una cerveza
     function DeleteBeer($color_id){
        $sentencia = $this->db->prepare("DELETE FROM color WHERE id=?");
        $sentencia->execute(array($color_id));
    }

     
    //Edita una cerveza
    function editBeer($id_color,$nombre){
      $sentencia = $this->db->prepare('UPDATE color SET nombre=? WHERE id_color=?');
      $sentencia->execute(array($nombre, $id_color));
    }

    
}