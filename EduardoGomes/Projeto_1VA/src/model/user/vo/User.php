<?php

namespace Projeto_1VA\src\model\user\vo;

class User
{   
    private $id;
    private $name;
    private $user;
    private $password;
    
    public function __construct($user, $password){
        $this->user = $user;
        $this->password = $password;
    }

    public function getUser(){
        return $this->user;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setUser($user){
        return $this->user = $user;
    }

    public function setPassword($password){
        return $this->password = $password;
    }
}