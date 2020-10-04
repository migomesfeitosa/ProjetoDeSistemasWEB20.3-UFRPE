<?php

namespace Projeto_1VA\src\model\user\services;

use Projeto_1VA\src\model\user\dao\UserDAO;


class AuthUser{

    public static function authUser(){
        session_start();
        $user = $_POST['user'];
        $password = $_POST['password'];
        $userDao = new UserDAO();
        return $userDao->verifyUserAndPassword($user, $password);
    }

};