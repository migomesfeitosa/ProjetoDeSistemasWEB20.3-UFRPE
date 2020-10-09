<?php


namespace ProjetoWeb\src\controller;

use ProjetoWeb\src\model\dao\UsuarioDAO;

class AuthController
{
    public function login(){
        require __DIR__ . "/../view/login/login.php";
    }

    public function home(){
        require __DIR__ . "/../view/home/home.php";
    }


    public function dashboad(){
        require __DIR__ . "/../view/home-logado/telainicial.php";

    }
    

    public function checkUserAndPasswordLogin(){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password = md5($password);
        $usuarioDao = new UsuarioDAO();
        $userReturn = $usuarioDao->verifyUserAndPassword($email, $password);
        if ($userReturn != null){
            $_SESSION['user'] = $userReturn->getEmail();
            $_SESSION['user_id'] = $userReturn->getId();
            $_SESSION['user_name'] = $userReturn->getNome();
        }
        $_SESSION['message'] = "Usuário e/ou senha inválidos";
        header("Location: /");
    }

    public function logout(){
        unset($_SESSION['user']);
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        header("Location: /home");
    }

}