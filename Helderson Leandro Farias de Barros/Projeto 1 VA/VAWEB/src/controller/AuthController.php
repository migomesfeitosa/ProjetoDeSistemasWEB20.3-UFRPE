<?php

namespace VAWEB\src\controller;

use VAWEB\src\model\dao\UserDAO;

class AuthController{
    public function login(){
        require __DIR__."./../view/auth/login.php";
    }

    public function checkUserAndPasswordLogin(){
        $userDAO = new UserDAO();
        $userReturn = $userDAO->checkUserAndPassword($_POST["user"], $_POST["password"]);
        if ($userReturn != null){
            $_SESSION["user_id"] = $userReturn->getId();
            $_SESSION["user_email"] = $userReturn->getEmail();
            $_SESSION["user_name"] = $userReturn->getName();
            header("Location: /");
        } else{
            $_SESSION["message-type"] = "message-failure";
            $_SESSION["message"] = "As credenticias que você utilizou estão incorretas.";
            header("Location: /login");            
        }

        
    }

    public function logout(){
        unset($_SESSION["user_id"]);
        unset($_SESSION["user_email"]);
        unset($_SESSION["user_name"]);

        header("Location: /login");
    }
}