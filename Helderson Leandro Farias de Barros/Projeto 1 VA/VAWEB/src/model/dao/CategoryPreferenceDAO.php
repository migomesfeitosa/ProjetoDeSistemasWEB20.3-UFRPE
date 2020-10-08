<?php

namespace VAWEB\src\model\dao;
use VAWEB\src\model\vo\CategoryPreference;

include_once "connect_database.php";

class CategoryPreferenceDAO{
    function findAll(){

    }

    function findById($id){
    }


    function update($id, CategoryPreference $category_preference){ 
    }

    function delete($id){
        $database = getConnection();
        $query = "delete from category_preference where id={$id}";
        $result = $database->query($query);
        $database->close();
        if(!$result){
            echo mysqli_error();
            exit(0);
        }
    }

    function findByNameNUser($name_id, $user_id){
        $database = getConnection();
        $queryFind = "select * from category_preference where name_id='{$name_id}' and user_id='{$user_id}'";
        $resultFind = $database->query($queryFind);
        if ($resultFind->num_rows == 0){
            return null;
        } else{
            while ($row = $resultFind->fetch_row()){
                $database->close();
                return new CategoryPreference($row[0], $row[1], $row[2]);
            }
        }
    }

    function create(CategoryPreference $category_preference){
        $database = getConnection();
        $query = "insert into category_preference (name_id, user_id) values ('{$category_preference->getNameId()}', '{$category_preference->getUserId()}')";
        $result = $database->query($query);
        if(!$result){
            echo mysqli_error($database);
            exit(0);
        } else{
            return mysqli_insert_id($database);
        }

    }
}