<?php

class UserModel{
//Variables
private $db;

//Constructor-> le declaro con que base de datos se va a comunicar
function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_shelby;charset=utf8', 
    'root', '');
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

//Va a buscar el mail
function getByEmail($userName){
   $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE mail=?");
   $sentencia->execute(array($userName));
   return  $sentencia->fetch(PDO::FETCH_OBJ);
    
}
}