<?php

namespace VAWEB\src\model\vo;

class Vote{
    private $id;
    private $survey_id;
    private $option_id;
    private $user_id;

    public function __construct($id, $survey_id, $option_id, $user_id){
        $this->id = $id;
        $this->survey_id = $survey_id;
        $this->option_id = $option_id;
        $this->user_id = $user_id;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getSurveyId(){
        return $this->survey_id;
    }

    public function setSurveyId($survey_id){
        $this->survey_id = $survey_id;
    }

    public function getOptionId(){
        return $this->option_id;
    }

    public function setOptionId($option_id){
        $this->option_id = $option_id;
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function setUserId($user_id){
        $this->user_id = $user_id;
    }

}