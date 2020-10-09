<?php


namespace projeto\src\controller;

use projeto\src\model\dao\ClienteDAO;

class AuthController
{


    
    public function login(){
        require __DIR__ . "/../view/auth/login.php";
    }

    public function dashboad(){
        require __DIR__ . "/../view/auth/dashboard.php";
    }
    
    public function checkUserAndPasswordLogin(){
        $email = $_POST["email"];
        $password = $_POST["senha"];
        $clienteDao = new ClienteDAO();
        $userReturn = $clienteDao->verifyUserAndPassword($email, $password);

      
        if ($userReturn != null){
            $_SESSION['user'] = $userReturn->getEmail();
            $_SESSION['user_id'] = $userReturn->getId();
            $_SESSION['user_name'] = $userReturn->getNome();
           
        }
        $_SESSION['message'] = "Usuário e/ou senha inválidos";
        header("Location:/");
    
    }

    public function logout(){
        unset($_SESSION['user']);
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        header("Location: /");
    }

}