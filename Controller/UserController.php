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

 // VERIFICA SI EL USUARIO LOGGEADO ES ADMIN O ES UN USUARIO REGISTRADO
    function checkAdmin(){ 
        if ($_SESSION['ADMIN'] == 1)
            return true;
        else{
            return false;
        }
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
            $usuarios = $this->userModel->getUsers();
            $this->userView->showPermisos($loggedIn, $user, $usuarios);
        }
                    
    


        function updatePermiso($params = null){
            $loggedIn = $this->checkLoggedIn();
            $admin = $this->checkAdmin();
            if ($loggedIn){
                $user = $_SESSION["MAIL"];
            }else{
                $usuario = '';
            }        
                $id = $params[':ID'];
                if ($admin){
                    $usuario = $this->usersModel->getUserById($id);
                    if ($usuario){
                        if ($usuario->$admin == 1){
                            $permiso = 0;
                        }else{
                            $permiso = 1; 
                        }                
                        $this->usersModel->updatePermiso($permiso, $id);
                        $usuarios = $this->usersModel->getUsers($user);                
                        header("Location: " . PERMISO);
                }else{
                    header("Location: " . HOME);
                }   
                        
        }
    }
}

