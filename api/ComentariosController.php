<?php
require_once 'ApiController.php';
require_once './Model/ComentariosModel.php';
require_once './Model/BeerModel.php';

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
        $id_beer = $this->beerModel->getBeer($id);
        if(!empty($id_beer)){
            $comentarios = $this->comentariosModel->getComentarioByBeer($id);
            $this->view->response($comentarios,200);
        }
        else{
            $this->apiView->response("La cerveza con id=$id no existe.", 404);
        }
    }

    // AGREGAR COMENTARIO
    function addComentario($params = null){
        $body = $this->getData();
        $idComentario = $this->comentariosModel->insertComentario($body->texto, $body->puntaje, $body->id_usuario, $body->id_cerveza, $body->id_usuario);
        if(!empty($idComentario)) // verifica si existe el comentario
            $this->apiView->response($this->comentariosModel->getComentarioByBeer($idComentario), 200);
        else
            $this->apiView->response("El comentario no se pudo agregar.", 404);
    }

    function deleteComentario($params = null) {
        $id = $params[':ID'];
        $comment = $this->comentariosModel->deleteComentario($id);
        if($comment > 0){
            $this->apiView->response("El comentario con el id=$id fue eliminado.", 200);
        }else{
            $this->apiView->response("El comentario con el id=$id no existe.", 404);
        }
    }
    function updateComentario($params = null){
        $id = $params[':ID'];
        $body = $this->getData();
        $comentario = $this->comentariosModel->getComentarioByBeer($id);
        if (empty($comentario)) {
            $this->apiView->response("El comentario con el id=$id no existe.", 404);
        }else{
            $comment = $this->comentariosModel->updateComentario($id, $body->texto, $body->puntaje);
            if($comment > 0)
                $this->apiView->response($this->comentariosModel->getComentarioByBeer($id), 200);
            else
                $this->apiView->response("El comentario con el id=$id no fue actualizado.", 204);
        }
    }



      
 
 

}