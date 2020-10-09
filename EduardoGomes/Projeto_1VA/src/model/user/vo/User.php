<?php

namespace Projeto_1VA\src\model\user\vo;

class User
{   
    private $id;
    private $name;
    private $user;
    private $password;
    
    public function __construct($id, $name, $user, $password){
        $this->id = $id;
        $this->name = $name;
        $this->user = $user;
        $this->password = $password;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getUser(){
        return $this->user;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setId($id){
        return $this->id = $id;
    }

    public function setName($name){
        return $this->name = $name;
    }

    public function setUser($user){
        return $this->user = $user;
    }

    public function setPassword($password){
        return $this->password = $password;
    }
}