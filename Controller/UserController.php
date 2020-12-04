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
                        $_SESSION['ADMIN'] = $userFromDB->admin;
                        $isAdmin=$userFromDB->admin;
                        header("Location: " .HOME);
                     }else{
                        header("Location: " .LOGIN);
                 }
                }
            }
        }
        
    }
    
   
        function isAdmin(){
           session_start();
          //  var_dump($_SESSION);
           // die();
            if (isset($_SESSION['ADMIN']) AND $_SESSION['ADMIN'] == 1){
            return true;

        }else{
            return false;

        }
        }

           
               
        
    
    
    
        //Verifica que se haya iniciado sesion
        function checkLoggedIn(){
            session_start();
            if(!isset($_SESSION["MAIL"])){
               return  false;
            }else{
                return true;
            }
        }
        
        // REGISTRA USUARIO
        function registerUser(){
            $mail = $_POST['mail'];
            $passwordForm = $_POST['password'];

            if(!empty($mail) && !empty($passwordForm)){
                $password = password_hash($passwordForm, PASSWORD_DEFAULT);
                $this->userModel->insertUser($mail, $password);
                $usuario =$this->userModel->GetUser($mail);
                $this->Login($usuario);
            }

            header("Location: " . HOME);
                             
        }

        
        function showRegisterUser(){
            $loggedIn = false;
            $user = "";
            $this->userView->showRegisterUser($loggedIn, $user);
        }

        function showPermisos(){
            $loggedIn = $this->checkLoggedIn();
            if($loggedIn){
                $user = $_SESSION["MAIL"];
            }else{
                $user = "";
            }
            $admin=$this->isAdmin();
            

            //$admin= $this->checkAdmin(); 
            $usuarios = $this->userModel->getUsers();
            $this->userView->showPermisos($loggedIn, $user, $usuarios,$admin);
        }
                    
    
        function updatePermiso($params = null){
            $admin=$this->isAdmin();
            if(isset($params[':ID'])){
                $id = $params[':ID'];
               if ($admin){
                    $isAdmin = $this->userModel->getUserById($id);
                   // var_dump($isAdmin);
                   // die();   
                    if ($isAdmin->admin==1){
                            $permiso = 0;
                        }else{
                            $permiso = 1; 
                        }                
                        $this->userModel->updatePermiso($permiso, $id);
                        $usuarios = $this->userModel->getUsers($usuario);                
                        header("Location: " . PERMISOS);
                    
                }else{
                    header("Location: " . HOME);
                } 
            }  
                        
        }

        function deleteUser($params =null){
            $admin=$this->isAdmin();
    
            if(isset($params[':ID'])){
                $id = $params[':ID'];
               if ($admin){
                    $isAdmin = $this->userModel->getUserById($id);
                   // var_dump($isAdmin);
                   // die();   
                    if ($isAdmin->admin==1){
                        $this->userModel->deleteUsuario($id);
                        $usuarios = $this->userModel->getUsers($usuario);                
                        header("Location: " . PERMISOS);
                    
                        }                
               
                    } 
                    header("Location: " . HOME);
                }  
        }

       
    }


