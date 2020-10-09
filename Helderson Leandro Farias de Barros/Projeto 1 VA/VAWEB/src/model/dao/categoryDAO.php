<?php

namespace VAWEB\src\model\dao;

use VAWEB\src\model\vo\Category;
use VAWEB\src\model\vo\Enquete;
use VAWEB\src\controller\EnqueteController;
use VAWEB\src\model\dao\EnqueteDAO;
use VAWEB\src\model\dao\OptionDAO;
use VAWEB\src\model\dao\VoteDAO;

include_once "connect_database.php";

class CategoryDAO{
    function findAll($id){
        $database = getConnection();
        $polls = [];
        $query = "select * from category where name_id = {$id}";
        $enqueteController = new EnqueteController();
        $optionDAO = new OptionDAO();
        $voteDAO = new VoteDAO();
        if($result = $database->query($query)){
            while ($row = $result->fetch_row()){
                $enqueteVO = $enqueteController->findById($row[2]);
                $options = $optionDAO->findBySurveyId($row[2]);
                $voteCount = $voteDAO->countById($row[2]);
                $enqueteVO->setVoteCount($voteCount);
                $enqueteVO->setOptions($options);
                array_push($polls, $enqueteVO);  
                }
            }

        $database->close();
        return $polls;
    }

    function findById($id){
    }

    function update($id, User $user){ 
    }

    function delete(){
    }

    function create(Category $category){
        $database = getConnection();
        $query = "insert into category set name_id='{$category->getName()}', survey_id='{$category->getSurveyId()}'";
        $result = $database->query($query);
        if(!$result){
            echo mysqli_error($database);
            exit(0);
        }
        $database->close();
    }
}