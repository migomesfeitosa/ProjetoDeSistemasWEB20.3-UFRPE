<?php

namespace VAWEB\src\controller;

use VAWEB\src\model\vo\CategoryPreference;
use VAWEB\src\model\dao\CategoryPreferenceDAO;

class CategoryPreferenceController{
    public function edit(){
        $categoryPreferenceDAO = new CategoryPreferenceDAO();
        $data = array();
        for ($i = 1; $i <= 5; $i++){
            $result = $categoryPreferenceDAO->findByNameNUser($i, $_SESSION["user_id"]);
            if ($result == null){
                $data[$i] = "unchecked";
            } else{
                $data[$i] = "checked";
            }
        }
        require __DIR__."./../view/categoryPreference/edit_preference.php";
    }

    public function updateAndCreate(){
        $categoryPreferenceDAO = new CategoryPreferenceDAO();
        for ($i=1; $i<=5; $i++){
            $result = $categoryPreferenceDAO->findByNameNUser(strval($i), $_SESSION["user_id"]);
            if ($result == null){
                if (isset($_POST[strval($i)])){
                    $categoryPreference = new CategoryPreference(null, strval($i), $_SESSION["user_id"]);
                    $categoryPreferenceDAO->create($categoryPreference);
                }
            } else{
                if (isset($_POST[strval($i)])){

                } else{
                    $categoryPreferenceDAO->delete($result->getId());
                }
            }
        }

        $_SESSION["message-type"] = "message-success";
        $_SESSION["message"] = "Informações alteradas com sucesso!";
        header("Location: /edit_preference");
    }
}