<?php

namespace Projeto_1VA\src\model\user\services;

use Projeto_1VA\src\model\user\dao\UserDAO;
use Projeto_1VA\src\model\user\vo\User;

class AuthUser{

    public static function authLogin(){
        $user = $_POST['user'];
        $password = md5($_POST['password']);
        $userDao = UserDAO::getInstance();
        return $userDao->verifyUserAndPassword($user, $password);
    }

    public static function authCreateUser(){
        $name = $_POST['name'];
        $user = $_POST['user'];
        $password = $_POST['password'];
        $userDao = UserDAO::getInstance();
        $returnUser = $userDao->findByUser($user);
        if($returnUser==null){
            $newUser = new User($name, $user, md5($password));
            $userDao->create($newUser);
            return true;
        }
        return false;
    }

    

};