<?php

namespace VAWEB\src\model\dao;
use VAWEB\src\model\vo\Option;

include_once "connect_database.php";

class OptionDAO{
    function findAll(){

    }

    function findById($id){
    }

    function findBySurveyId($id){
        $database = getConnection();

        $query = "select * from option where survey_id = {$id}";
        $result = $database->query($query);
        $options = [];
        if($result = $database->query($query)){
            while ($row = $result->fetch_row()){
                $optionVO = new Option($row[0], $row[1], $row[2]);
                array_push($options, $optionVO);
            }

            return $options;
        }
    }

    function update($id, User $user){ 
    }

    function delete(){
    }

    function create(Option $option){
        $database = getConnection();
        $query = "insert into option set text='{$option->getText()}', survey_id='{$option->getSurveyId()}'";
        $result = $database->query($query);
        if(!$result){
            echo mysqli_error($database);
            exit(0);
        } else{
            return mysqli_insert_id($database);
        }
    }
}