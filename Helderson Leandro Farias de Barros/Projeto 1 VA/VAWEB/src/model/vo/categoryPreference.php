<?php

namespace VAWEB\src\model\vo;

class CategoryPreference{
    private $id;
    private $name_id;
    private $user_id;

    public function __construct($id, $name_id, $user_id){
        $this->id = $id;
        $this->name_id = $name_id;
        $this->user_id = $user_id;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNameId(){
        return $this->name_id;
    }

    public function setNameId($name_id){
        $this->name_id = $name_id;
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function setUserId($user_id){
        $this->user_id = $user_id;
    }

}