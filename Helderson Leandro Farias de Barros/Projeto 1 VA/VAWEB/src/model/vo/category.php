<?php

namespace VAWEB\src\model\vo;

class Category{
    private $id;
    private $name;
    private $survey_id;

    public function __construct($id, $name, $survey_id){
        $this->id = $id;
        $this->name = $name;
        $this->survey_id = $survey_id;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getSurveyId(){
        return $this->survey_id;
    }

    public function setSurveyId($survey_id){
        $this->survey_id = $survey_id;
    }
}