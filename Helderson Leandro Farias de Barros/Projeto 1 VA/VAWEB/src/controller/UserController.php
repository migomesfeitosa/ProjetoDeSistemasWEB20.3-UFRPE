<?php

namespace VAWEB\src\controller;

use VAWEB\src\model\vo\User;
use VAWEB\src\model\dao\UserDAO;

class UserController{
    public function create(){
        require __DIR__ . "./../view/user/register.php";
    }

    public function edit(){
        require __DIR__ . "./../view/user/edit.php";
    }

    public function store(){
        $result = null;
        if ($_POST["password"] == $_POST["repeat-password"]){
            $usuario = new User(null, $_POST["user"], $_POST["email"], md5($_POST["password"]));
            $user = new UserDAO();
            $result = $user->create($usuario);
        }
        if ($result != null){
            $_SESSION["message-type"] = "message-success";
            $_SESSION["message"] = "Conta criada com sucesso!";
            header("Location: /register");
        } else{
            $_SESSION["message-type"] = "message-failure";
            $_SESSION["message"] = "Email já está sendo utilizado ou senhas não conferem.";
            header("Location: /register");
        }
        
    }

    public function update(){
        $user = new UserDAO();
        $old_password = $_POST["old-password"];
        $result = $user->checkUserAndPassword($_SESSION["user_email"], $old_password);
        if($result != null){
            if ($_POST["new-password"] != "" || $_POST["repeat-password"] != ""){
                if ($_POST["new-password"] != $_POST["repeat-password"]){
                    $_SESSION["message-type"] = "message-failure";
                    $_SESSION["message"] = "Senhas não conferem por favor tente novamente";
                    header("Location: /edit_profile");
                } else{
                    $usuario = new User(null, $_POST["user"], $_POST["email"], md5($_POST["new-password"]));
                }
            } else{
                $usuario = new User(null, $_POST["user"], $_POST["email"], md5($old_password));
            }

            if ($_POST["email"] != $_SESSION["user_email"]){
                $resultEmail = $user->checkEmail($_POST["email"]);
                if ($resultEmail != null){
                    $_SESSION["message-type"] = "message-failure";
                    $_SESSION["message"] = "O email alterado já está sendo utilizado, por favor tente novamente.";
                    header("Location: /edit_profile");
                } else{
                    $user->update($_SESSION["user_id"], $usuario);
                    $_SESSION["user_email"] = $_POST["email"];
                    $_SESSION["user_name"] = $_POST["user"];
                    $_SESSION["message-type"] = "message-success";
                    $_SESSION["message"] = "Informações alteradas com sucesso.";
                    header("Location: /edit_profile");
                }
            } else{
                $user->update($_SESSION["user_id"], $usuario);
                $_SESSION["user_email"] = $_POST["email"];
                $_SESSION["user_name"] = $_POST["user"];
                $_SESSION["message-type"] = "message-success";
                $_SESSION["message"] = "Informações alteradas com sucesso.";
                header("Location: /edit_profile");
            }

        } else{
            $_SESSION["message-type"] = "message-failure";
            $_SESSION["message"] = "Houve um erro durante a autenticação de dados por favor tente novamente";
            header("Location: /edit_profile");
        }
    }

}