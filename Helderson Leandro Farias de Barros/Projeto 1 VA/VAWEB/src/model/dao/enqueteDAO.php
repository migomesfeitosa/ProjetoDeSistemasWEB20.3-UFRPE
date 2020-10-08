<?php

namespace VAWEB\src\model\dao;
use VAWEB\src\model\dao\UserDAO;
use VAWEB\src\model\vo\Enquete;
use VAWEB\src\controller\EnqueteController;
use VAWEB\src\model\dao\OptionDAO;
use VAWEB\src\model\dao\VoteDAO;

include_once "connect_database.php";

class EnqueteDAO{
    function findAll(){

    }

    function findById($id){
        $database = getConnection();
        $query = "select * from survey where id='{$id}'";
        $result = $database->query($query);
        if ($result){
            while ($row = $result->fetch_row()){
                $database->close();
                return new Enquete($row[0], $row[1], $row[2]);
            }
        }

    }

    function new_found(){
        $database = getConnection();
        $polls = [];
        $query = "select * FROM survey ORDER BY id DESC";
        $enqueteController = new EnqueteController();
        $optionDAO = new OptionDAO();
        $voteDAO = new VoteDAO();

        if($result = $database->query($query)){
            while ($row = $result->fetch_row()){
                $enqueteVO = $enqueteController->findById($row[0]);
                $options = $optionDAO->findBySurveyId($row[0]);
                $voteCount = $voteDAO->countById($row[0]);
                $enqueteVO->setVoteCount($voteCount);
                $enqueteVO->setOptions($options);
                array_push($polls, $enqueteVO);  
                }
            }
        $database->close();
        return $polls;
    }

    function update(){ 

    }

    function delete(){

    }

    function create(Enquete $enquete){
        $database = getConnection();
        $query = "insert into survey (question, user_id) values ('{$enquete->getQuestion()}', '{$enquete->getUserId()}')";
        $result = $database->query($query);
        if(!$result){
            echo mysqli_error($database);
            exit(0);
        } else{
            return mysqli_insert_id($database);
        }
    }
}