<?php

class ComentariosModel{
     //Variable
     private $db;

     //Constructor
     function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_shelby;charset=utf8', 
         'root', '');
         $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     }

     function getComentarios(){
         $sentencia = $this->db->prepare('SELECT *FROM comentario');
         $sentencia->execute();
         return $sentencia->fetchAll(PDO::FETCH_OBJ);
     }

  

     //VERR
     public function getComentarioByBeer($id){
        $sentencia=$this->db->prepare('SELECT * FROM comentario where id_cerveza=?');
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

     function insertComentario($texto,$puntaje,$id_usuario, $id_cerveza) {
            $sentencia = $this->db->prepare('INSERT INTO comentario(texto,puntaje,id_usuario,id_cerveza) VALUES(?,?,?,?)');
            $sentencia->execute(array($texto,$puntaje,$id_usuario,$id_cerveza));
            return $this->db->lastInsertId();
     }

         // Actualiza un comentario 
      function updateComentario($id, $texto, $puntaje){
        $sentencia = $this->db->prepare('UPDATE comentario SET texto=?, puntaje=? WHERE id_comentario = ?');
        $sentencia->execute(array($texto, $puntaje, $id));
        return $sentencia->rowCount();
    }

    // Elimina un comentario de la BDD
    function deleteComentario($id) {
        $sentencia = $this->db->prepare('DELETE FROM comentario WHERE id_comentario = ?');
        $sentencia->execute(array($id));
        return $sentencia->rowCount();
    }
     


}