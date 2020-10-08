<?php

namespace VAWEB\src\model\dao;
use VAWEB\src\model\vo\Vote;

include_once "connect_database.php";

class VoteDAO{
    function findAll(){
    }

    function findById($id){
        
    }

    function update(){ 
    }

    function delete(){
    }

    function getPercent($optionId){
        $database = getConnection();
        $query = "select * from vote where option_id = {$optionId}";
        $result = $database->query($query);
        $database->close();
        if ($result){
            return $result->num_rows;
        } else{
            return 0;
        }
        if(!$result){
            echo mysqli_error();
            exit(0);
        } 
    }

    function countById($id){
        $database = getConnection();
        $query = "select * from vote where survey_id = {$id}";
        $result = $database->query($query);
        $database->close();
        if ($result){
            return $result->num_rows;
        } else{
            return 0;
        }
        if(!$result){
            echo mysqli_error();
            exit(0);
        }
    }

    function create(Vote $vote){
        $database = getConnection();
        $query = "insert into vote (survey_id, option_id, user_id) values ('{$vote->getSurveyId()}', '{$vote->getOptionId()}','{$vote->getUserId()}')";
        $result = $database->query($query);
        $database->close();
        if(!$result){
            echo mysqli_error();
            exit(0);
        }
    }
}