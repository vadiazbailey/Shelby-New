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



   
   // function loginForm(){
     //   $logged_in = $this->userController->checkLoggedIn();
      //  if ($logged_in == true){
      //      header("Location: ". HOME);
     //   }else{
     //       $user = "";
      //      $this->usersView->showLogin($logged_in, $user); 
      //  }
   // }
   function showLogin(){
       $this->userView->showLoginForm();
   }

    
    
    function verifyUser(){
        $userName = $_POST["email"];
        $password = $_POST["password"];
        
        
        if(!empty($userName)&& !empty($password)){
            
            //Obtengo el usuario
                $userLog= $this->userModel->getByEmail($userName);
                
                    if(isset($userLog) && $userLog){
                        // Existe el usuario
                        if ($userLog &&password_verify($password, $userLog->password)){
                           session_start();
                           $_SESSION['MAIL'] = $userLog->mail;
                         
                            header("Location: ". HOME);                    
                        }else{
                          $this->userView->showLoginForm("Contraseña incorrecta");
                        
                        }
                    }else{
                            $this->userView->showLoginForm("Usuario incorrecto");
                           
                        }
                }
        
        }
        
        
        //Verifica que se haya iniciado sesion
        function checkLoggedIn(){
            session_start();
            if(!isset($_SESSION["MAIL"])){
                header("Location: ".LOGIN);
            }
        }
        //funcion que CIERRA SESION
        function Logout(){
            session_start();
            session_destroy();
            header("Location:" .LOGIN);
        }
    }
    