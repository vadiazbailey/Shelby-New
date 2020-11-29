<?php
require_once 'ApiController.php';
require_once './Model/ComentariosModel.php';

class ComentariosController extends ApiController{

    function __construct() {
        parent::__construct();
        $this->comentariosModel = new ComentariosModel();
        $this->beerModel = new BeerModel();
        $this->apiView = new APIView();
    }

    
    //trae todos los comentarios
    function getComentarios($params = null){
        $comentarios= $this->comentariosModel->getComentarios();
        $this->apiView->response($comentarios, 200);
    }

    // OBTENER UN COMENTARIO DETERMINADO POR EL ID
    function getComentariosBeer($params = null){
        $id = $params [':ID'];
        $id_beer = $this ->beerModel->getBeer($id);
        if(!empty($id_beer)){
            $comentarios = $this->comentariosModel->getComentariosByBeer($id);
            $this->view->response($comentarios,200);
        }
        else{
            $this->apiView->response("El pedido con id=$id no existe.", 404);
        }
    }

    // AGREGAR COMENTARIO
    function addComentario($params = null){
        $body = $this->getData();
        $idComentario = $this->comentariosModel->insertComentario($body->texto, $body->puntaje, $body->id_usuario, $body->id_pedido, $body->id_usuario);
        if(!empty($idComentario)) // verifica si existe el comentario
            $this->apiView->response($this->comentariosModel->getComentario($idComentario), 201);
        else
            $this->apiView->response("El comentario no se pudo insertar.", 404);
    }

      
 
 

}