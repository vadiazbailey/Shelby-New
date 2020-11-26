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

function GetUser($user){
   $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE mail=?");
   $sentencia->execute(array($user));
   return  $sentencia->fetch(PDO::FETCH_OBJ);
    
}

public function getUsers(){
    $query = $this->db->prepare('SELECT * FROM usuarios');
    $ok = $query->execute();
    if (!$ok){
        var_dump($query->errorInfo());
        die();
    }
    $users = $query->fetchALL(PDO::FETCH_OBJ);
    return $users;
}

public function insertUser($mail, $password){
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = $this->db->prepare('INSERT INTO usuarios(nombre, email, password) VALUES (?,?,?)');
    $ok = $query->execute(array($mail, $hash));
    if (!$ok){
        var_dump($query->errorInfo());
        die();
    }
}
}