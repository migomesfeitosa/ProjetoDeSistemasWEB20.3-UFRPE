<?php

namespace VAWEB\src\model\vo;

class Option{
    private $id;
    private $text;
    private $survey_id;

    public function __construct($id, $text, $survey_id){
        $this->id = $id;
        $this->text = $text;
        $this->survey_id = $survey_id;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getText(){
        return $this->text;
    }

    public function setText($text){
        $this->text = $text;
    }

    public function getSurveyId(){
        return $this->survey_id;
    }

    public function setSurveyId($survey_id){
        $this->survey_id = $survey_id;
    }

}