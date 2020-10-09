<?php
require_once "./View/UserView.php";
require_once "./Model/UserModel.php";


class UserController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new UserView();
        $this->model = new UserModel();
    }

    function Login(){
        $this->view->showLogin();
    }

    function verifyUser(){
        $user = $_POST["input_user"];
        $password = $_POST["input_password"];

        if(isset($user)){
            //traigo el usuario de la DB 
            $userFromDB = $this->model->GetUser($user);
            
            if(isset($userFromDB) && $userFromDB)){
                //existe el usuario

                if(password_verify($password,$userFromDB->password)){
                    header("Location:" .BASE_URL. "home");
                    else{
                        $this->view->ShowLogin("Contraseña Incorrecta");
                    }
                }
            }else{
                //no existe el user en la DB
                $this->view->showLogin("El usuario no existe");
            }
        }
    }
}

?>