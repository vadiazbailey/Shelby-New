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
    $query = $this->db->prepare('SELECT * FROM usuario');
    $ok = $query->execute();
    if (!$ok){
        var_dump($query->errorInfo());
        die();
    }
    $users = $query->fetchALL(PDO::FETCH_OBJ);
    return $users;
}

function getUserById($user){
    $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE usuario.id_usuario=?");
    $sentencia->execute(array($user));
    return $sentencia->fetch(PDO::FETCH_OBJ);
}

function insertUser($mail, $password){
    $query = $this->db->prepare('INSERT INTO usuario(mail, password) VALUES (?,?)');
    $ok = $query->execute(array($mail, $password));
    if (!$ok){
        var_dump($query->errorInfo());
        die();
    }
}

 function updatePermiso($permiso, $id){
    $sentencia = $this->db->prepare('UPDATE usuario SET admin=? WHERE id_usuario = ?');
    $sentencia->execute(array($permiso, $id));
}


function deleteUsuario($id){
    $sentencia = $this->db->prepare('DELETE FROM usuario WHERE usuario.id_usuario = ?' );
    $sentencia->execute(array($id));
}
}