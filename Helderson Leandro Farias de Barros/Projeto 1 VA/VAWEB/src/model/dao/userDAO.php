<?php

namespace VAWEB\src\model\dao;

include_once "connect_database.php";

use VAWEB\src\model\vo\User;

class UserDAO{

    function findAll(){

    }

    function findById($id){
        $database = getConnection();
        $query = "select * from user where id='{$id}'";
        $result = $database->query($query);
        if ($result){
            while ($row = $result->fetch_row()){
                $database->close();
                return new User($row[0], $row[1], $row[2], null);
            }
        }
    }

    function update($id, User $user){ 
        $database = getConnection();
        $query = "update user set name='{$user->getName()}', email='{$user->getEmail()}', password='{$user->getPassword()}' where id='{$id}'";
        $result = $database->query($query);
        $database->close();
        if(!$result){
            echo mysqli_error();
            exit(0);
        }
    }

    function delete(){

    }

    function create(User $user){
        $database = getConnection();
        $queryFind = "select email from user where email='{$user->getEmail()}'";
        $resultFind = $database->query($queryFind);
        $database2 = getConnection();
        if ($resultFind->num_rows > 0){
            return null;
        } else{
            $queryCreate = "insert into user (name, email, password) values ('{$user->getName()}', '{$user->getEmail()}', '{$user->getPassword()}')";
            $result = $database2->query($queryCreate);
            return $user;
        }
        $database->close();
        if(!$result){
            echo mysqli_error();
            exit(0);
        }

    }

    function checkEmail($email){
        $database = getConnection();
        $query = "select email from user where email='{$email}'";
        $result = $database->query($query);
        if ($result->num_rows > 0){
            return $email;
        } else{
            return null;
        }
    }

    function checkUserAndPassword($email, $password){
        $passwordMd5 = md5($password);
        $database = getConnection();
        $query = "select id, name, email, password from user where email='{$email}' and password='{$passwordMd5}'";
        $result = $database->query($query);
        if ($result){
            while ($row = $result->fetch_row()){
                $database->close();
                return new User($row[0], $row[1], $row[2], null);
            }
        }
    }
}