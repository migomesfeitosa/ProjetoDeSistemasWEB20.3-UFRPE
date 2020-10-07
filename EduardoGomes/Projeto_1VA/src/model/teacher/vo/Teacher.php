<?php

namespace Projeto_1VA\src\model\teacher\vo;

class Teacher {

    private $id;
    private $userId;
    
    private $avatar;
    private $whatsapp;
    private $biography;
    private $discipline;
    private $cost;
    private $weekday;
    private $time_from;
    private $time_to;

    public function __construct($userId, $avatar, $whatsapp, $biography, $discipline, $cost, $weekday, $time_from, $time_to){
       $this->userId = $userId;
       $this->avatar = $avatar;
       $this->whatsapp = $whatsapp;
       $this->biography = $biography;
       $this->discipline = $discipline;
       $this->cost = $cost;
       $this->weekday = $weekday;
       $this->time_from = $time_from;
       $this->time_to = $time_to;
    }

    public function getId(){
        return $this->id;
    }
    
    public function getUserId(){
        return $this->userId;
    }

    public function getAvatar(){
        return $this->avatar;
    }

    public function getWhatsapp(){
        return $this->whatsapp;
    }

    public function getBiography(){
        return $this->biography;
    }

    public function getDiscipline(){
        return $this->discipline;
    }

    public function getCost(){
        return $this->cost;
    }

    public function getWeekday(){
        return $this->weekday;
    }

    public function getTimeFrom(){
        return $this->time_from;
    }

    public function getTimeTo(){
        return $this->time_to;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setUserId($userId){
        $this->userId = $userId;
    }

    public function setAvatar($avatar){
        $this->avatar = $avatar;
    }

    public function setWhatsapp($whatsapp){
        $this->whatsapp = $whatsapp;
    }

    public function setBiography($biography){
        $this->biography = $biography;
    }

    public function setDiscipline($discipline){
        $this->discipline = $discipline;
    }

    public function setCost($cost){
        $this->cost = $cost;
    }

    public function setWeekday($weekday){
        $this->weekday = $weekday;
    }

    public function setTimeFrom($time_from){
        $this->time_from = $time_from;
    }

    public function setTimeTo($time_to){
        $this->time_to = $time_to;
    }



}