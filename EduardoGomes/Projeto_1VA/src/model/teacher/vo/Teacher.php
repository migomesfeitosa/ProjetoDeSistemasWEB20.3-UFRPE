<?php

namespace Projeto_1VA\src\model\teacher\vo;

class Teacher {

    private $id;
    private $userId;
    
    private $avatar;
    private $whatsapp;
    private $biography;
    private $discipline;
    private $weekday;
    private $schedule;

    public function __construct($userId, $avatar, $whatsapp, $biography, $discipline, $weekday, $schedule){
       $this->userId = $userId;
       $this->avatar = $avatar;
       $this->whatsapp = $whatsapp;
       $this->biography = $biography;
       $this->discipline = $discipline;
       $this->weekday = $weekday;
       $this->schedule = $schedule;
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

    public function getWeekday(){
        return $this->weekday;
    }

    public function getSchedule(){
        return $this->schedule;
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

    public function setWeekday($weekday){
        $this->weekday = $weekday;
    }

    public function setSchedule($schedule){
        $this->schedule = $schedule;
    }



}