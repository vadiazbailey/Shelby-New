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
        $loggedIn=$this->checkLoggedIn();
        if($loggedIn==true){
            header("Location: " . HOME);
        }

       $this->userView->showLogin($loggedIn);
    }


    function Logout(){
        session_start();
        session_destroy();
        header("Location: " . LOGIN);
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
                        //$loggedIn=false;
                       // $user=false;
                       //$loggedIn,$user,
                    $this->userView->showLogin("Contraseña incorrecta");
                    }
                }else{
                    // No existe el user en la DB
                    //$loggedIn=false;
                    //$user=false;
                    $this->userView->showLogin("Usuario incorrecto");

                }
            }
        }
    }
        
      //  function showHomeLog(){
       //     $loggedIn=$this->checkLoggedIn();
       //     $user = $_SESSION["MAIL"];
       //     if ($loggedIn==true) {
       //         header("Location: " .HOME);
        //    }

          //  $this->usersView->showLogin($loggedIn,$user,); 
           
       // }

        
        //Verifica que se haya iniciado sesion
        function checkLoggedIn(){
            session_start();
            if(!isset($_SESSION["MAIL"])){
               return  false;
                // header("Location: ".LOGIN);
            }else{
                return true;
            }
        }
        

      
        
    
}