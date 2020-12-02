<?php
class BeerModel{
    //Variable
    private $db;

    //Constructor
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_shelby;charset=utf8', 
        'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    //Metodos
    function getBeers(){
        $sentencia = $this->db->prepare("SELECT *, color.nombre FROM cerveza JOIN color ON cerveza.id_color = color.id_color");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);

    }

    function getBeer($id_cerveza){
        $sentencia = $this->db->prepare("SELECT *, color.nombre FROM cerveza JOIN color ON cerveza.id_color = color.id_color WHERE cerveza.id_cerveza= ?");
        $sentencia->execute(array($id_cerveza));
        $beer = $sentencia->fetch(PDO::FETCH_OBJ);
        return $beer;
    }

   //Filtra por color
    function getColourByFiltro($colorSolicitado){
        $sentencia = $this->db->prepare("SELECT *, color.nombre FROM cerveza JOIN color ON cerveza.id_color= color.id_color WHERE color.id_color= ?");
        $sentencia->execute(array($colorSolicitado));
        $colorFiltrado= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $colorFiltrado;
  
    }

 //Agrega una nueva cerveza
 function insertBeer($estilo, $volumen, $graduacion_alcoholica, $precio, $cantidad, $color, $image=null){
    $filepath=null;
    if($image){
        $filepath= $this->moveFile($image);
    }
    $sentencia = $this->db->prepare('INSERT INTO cerveza (estilo, volumen, graduacion_alcoholica, precio, cantidad, id_color, imagen) VALUES(?,?,?,?,?,?,?)');
    $sentencia->execute(array($estilo, $volumen, $graduacion_alcoholica, $precio, $cantidad, $color, $filepath));
}

  //Mueve el archivo
     function moveFile($imagen){
    $filepath= "img/". uniqid(). ".".strtolower(pathinfo($imagen["name"], PATHINFO_EXTENSION));
    $filepath= "imagenes/beer". uniqid(). ".".strtolower(pathinfo($imagen["name"], PATHINFO_EXTENSION));
    move_uploaded_file($imagen['tmp_name'], $filepath);
    
    return $filepath;
}

     //Elimina una cerveza
     function deleteBeer($id_cerveza){
        $sentencia = $this->db->prepare("DELETE FROM cerveza WHERE id_cerveza=?");
        $sentencia->execute(array($id_cerveza));
    }
    
     //Edita una cerveza
     //$this->beerModel->editBeer($estilo, $volumen,$graduacion_alcoholica,$precio,$cantidad,$color,$id);
     function editBeer($estilo, $volumen, $graduacion_alcoholica, $precio, $cantidad, 
     $color,$id_cerveza){ 
        $sentencia = $this->db->prepare("UPDATE cerveza SET estilo=?, volumen=?, 
        graduacion_alcoholica=?, precio=?, cantidad=?, id_color=?  WHERE id_cerveza=?");
        $sentencia->execute(array($estilo, $volumen, $graduacion_alcoholica, $precio,
        $cantidad, $color,$id_cerveza));
     }
}
