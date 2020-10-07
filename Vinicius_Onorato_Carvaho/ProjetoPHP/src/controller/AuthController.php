<?php


namespace ProjetoPHP\src\controller;
use ProjetoPHP\src\model\dao\UserDAO;

class AuthController
{
    public function login(){
        require __DIR__ . "/../view/auth/login.php";
    }

    public function cadastrar(){
        require __DIR__ . "/../view/auth/processa.php";
    }

    public function dashboad(){
        require __DIR__ . "/../view/auth/dashboard.php";
    }

    public function checkUserAndPasswordLogin(){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $alunoDao = new UserDAO();
        $userReturn = $alunoDao->verifyUserAndPassword($email, $password);
        if ($userReturn != null){
            $_SESSION['user'] = $userReturn->getEmail();
            $_SESSION['user_id'] = $userReturn->getId();
            $_SESSION['user_name'] = $userReturn->getName();
        }
        $_SESSION['msg'] = "Usuário e/ou senha inválidos";
        header("Location: /");
    }

    public function logout(){
        unset($_SESSION['user']);
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        header("Location: /");
    }

}