<?php

namespace Projeto_1VA\src\controller;

use Projeto_1VA\src\model\teacher\services\AuthTeacher;
use Projeto_1VA\src\model\user\services\AuthUser;

class AuthController {

    public function logout(){
        unset($_SESSION['logged_user']);
        header("Location: /");
    }

    public function checkLogin(){
    
        $userReturn = AuthUser::authLogin();
        if ($userReturn !=null){
            
            $_SESSION['logged_user'] = $userReturn;
        }
        else {
            $_SESSION['message'] = "Usuário e/ou senha inválidos";
           
        }
        header("Location: /");
    }

    public function checkCreateUser(){
        $return = AuthUser::authCreateUser();
        if(!$return){
            $_SESSION['message'] = "Nome de Usuario já existe";
            header("Location: /register");
        }else{
            header("Location: /");
        }
    }

    public function checkCreateTeacher(){
        AuthTeacher::authCreateTeacher();    
        header("Location: /home");
    }

    public function checkUpdateTeacher($id){
        $return = AuthTeacher::authUpdateTeacher($id);
        if(!$return){
            header("Location: /mydisciplines?edit&id=" . $id);
        }else{
            header("Location: /mydisciplines");
        }
    }

    public function checkDeleteTeacher($id){
        $return = AuthTeacher::authDeleteTeacher($id);
        header("Location: /mydisciplines");
    }
}