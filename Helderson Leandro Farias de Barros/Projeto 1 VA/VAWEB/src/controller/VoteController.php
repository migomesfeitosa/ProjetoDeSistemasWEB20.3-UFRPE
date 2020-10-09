<?php

namespace VAWEB\src\controller;
use VAWEB\src\model\dao\VoteDAO;
use VAWEB\src\model\dao\OptionDAO;
use VAWEB\src\model\vo\Vote;

class VoteController{
    public function store($poll_id, $option_id){
        $vote = new Vote(null, $poll_id, $option_id, $_SESSION["user_id"]);
        $voteDAO = new VoteDAO();
        $voteDAO->create($vote);
        header('Content-Type: application/json');
        $count = $voteDAO->countById($poll_id);

        $optionDAO = new OptionDAO();
        $options = $optionDAO->findBySurveyId($poll_id);

        $percentList = [];
        foreach($options as $option){
            $percentList[$option->getId()] = ($voteDAO->getPercent($option->getId()) * 100) / $count;
        }


        $data = array("Status"=>"OK", "Count"=>$voteDAO->countById($poll_id), "Options"=> $percentList);
        $json = json_encode($data);
        echo $json;
    }
}