<?php

namespace Projeto_1VA\src\controller;

use Projeto_1VA\src\model\user\dao\UserDAO;
use Projeto_1VA\src\model\user\services\AuthUser;
use Projeto_1VA\src\model\user\vo\User;

class AuthController {

    public function login(){
        require __DIR__ . "/../view/login.php";
    }

    public function dashboard(){
        require __DIR__ . "/../view/dashboard.php";
    }

    public function checkLogin(){

        /* $userReturn = AuthUser::authUser(); */
        $userReturn = new User("admin", "admin");
        if ($userReturn !=null){
            $_SESSION['logged_user'] = $userReturn;
        }
        $_SESSION['message'] = "Usuário e/ou senha inválidos";
        header("Location: /");
    }

    public function logout(){
        unset($_SESSION['logged_user']);
        header("Location: /");
    }
}