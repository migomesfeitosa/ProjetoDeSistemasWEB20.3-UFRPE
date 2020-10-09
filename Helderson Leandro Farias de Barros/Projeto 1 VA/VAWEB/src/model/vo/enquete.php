<?php

namespace VAWEB\src\model\vo;

class Enquete{
    private $id;
    private $question;
    private $user_id;
    private $options = [];
    private $voteCount = 0;

    public function __construct($id, $question, $user_id){
        $this->id = $id;
        $this->question = $question;
        $this->user_id = $user_id;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getQuestion(){
        return $this->question;
    }

    public function setQuestion($question){
        $this->question = $question;
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function setUserId($user_id){
        $this->user_id = $user_id;
    }

    public function getOptions(){
        return $this->options;
    }

    public function setOptions($options){
        $this->options = $options;
    }
    
    public function getVoteCount(){
        return $this->voteCount;
    }

    public function setVoteCount($voteCount){
        $this->voteCount = $voteCount;
    }
}