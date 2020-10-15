<?php
require_once "./View/UserView.php";
require_once "./Model/UserModel.php";


class UserController{

    private $userView;
    private $userModel;


    function __construct(){
        $this->userView = new UserView();
        $this->userModel = new UserModel();
    }

    function Login(){
        $this->userView->showLogin();
    }

    function Logout(){
        session_start();
        session_destroy();
        header("Location:" .LOGIN);
    }
     
    
    function verifyUser(){
        $userName = $_POST["input_user"];
        $password = $_POST["input_pass"];

        
        if(!empty($userName)&& !empty($password)){
            if(isset($userName)){
                $userFromDB= $this->userModel->GetUser($userName);
                if(isset($userFromDB)&& $userFromDB){

                    if (password_verify($password, $userFromDB->password)){
                        session_start();
                        $_SESSION['MAIL'] = $userFromDB->mail;
                        header("Location: " .HOME);
                    }else{
                        $this->userView->showLogin("Contraseña incorrecta");
                    }
                }else{
                    // No existe el user en la DB
                    $this->userView->showLogin("Usuario incorrecto");
                }
            }
        }
    }
        
        
        //Verifica que se haya iniciado sesion
        private function checkLoggedIn(){
            session_start();
            if(!isset($_SESSION["MAIL"])){
                header("Location: ".LOGIN);
                
            }
        }
        

      
        
    
}