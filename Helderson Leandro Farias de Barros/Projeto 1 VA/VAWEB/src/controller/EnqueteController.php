<?php

namespace VAWEB\src\controller;

use VAWEB\src\model\vo\Enquete;
use VAWEB\src\model\dao\EnqueteDAO;
use VAWEB\src\model\dao\UserDAO;
use VAWEB\src\model\vo\User;
use VAWEB\src\model\vo\Category;
use VAWEB\src\model\dao\CategoryDAO;
use VAWEB\src\model\vo\Option;
use VAWEB\src\model\dao\OptionDAO;
use VAWEB\src\model\dao\CategoryPreferenceDAO;

class EnqueteController{
    public function index(){
        $categoryPreferenceDAO = new CategoryPreferenceDAO();
        $categoryDAO = new CategoryDAO();
        $preferences = array();
        for ($i = 1; $i <= 5; $i++){
            $result = $categoryPreferenceDAO->findByNameNUser($i, $_SESSION["user_id"]);
            if ($result != null){
                $preferences = array_merge($categoryDAO->findAll(strval($i)), $preferences);
            } 
        }
        $polls = $preferences;
        
        require __DIR__."./../view/category/index.php";
    }

    public function create(){
        require __DIR__."./../view/votacao/create.php";
    }

    public function new_found(){
        $enqueteDAO = new EnqueteDAO();
        $polls = $enqueteDAO->new_found();
        require __DIR__."./../view/category/index.php";
    }

    public function findById($id){
        $enqueteDAO = new EnqueteDAO();
        $userDAO = new UserDAO();
        $data = $enqueteDAO->findById($id);
        $user_name = $userDAO->findById($data->getUserId());
        $data->setUserId($user_name->getName());
        return $data;

    }


    public function store(){
        $enquete = new Enquete(null, $_POST["question"], $_SESSION["user_id"]);
        $enqueteDAO = new EnqueteDAO();
        $enqueteID = $enqueteDAO->create($enquete);

        $category = new Category(null, intval($_POST["category"]), $enqueteID);
        $categoryDAO = new CategoryDAO();
        $categoryDAO->create($category);


        $optionDAO = new OptionDAO();
        for ($i=1; $i<= 5; $i++){
            $optionName = "option-".strval($i);
            if(isset($_POST[$optionName])){
                $option = new Option(null, $_POST[$optionName], $enqueteID);
                $optionDAO->create($option);
            }
        }

        $_SESSION["message-type"] = "message-success";
        $_SESSION["message"] = "Enquete criada com sucesso.";
        header("Location: /create");
    }

    public function teste(){
        require __DIR__."./../view/votacao/teste.php";
    }
}