<?php
namespace Projeto_1VA\src\model\user\dao;
use Projeto_1VA\src\model\user\vo\User;

require "/Users/Pichau/ProjetoDeSistemasWEB20.3-UFRPE/EduardoGomes/Projeto_1VA/src/database/dbconnection.php";

class UserDAO implements IUserDAO{

    private static $instance;

    public static function getInstance(){
        if(UserDAO::$instance == null){
            UserDAO::$instance = new UserDAO();
        }
        return UserDAO::$instance;
    }

    function create(User $user){
        $link = getConnection();
        $query = "insert into users (name, user, password) values ('{$user->getName()}', '{$user->getUser()}', '{$user->getPassword()}')";
        $result = $link->query($query);
        if (!$result){
            echo mysqli_error($link);
            $link->close();
            exit(0);
        }
        $link->close();
    }

    function update($id, User $user){

    }

    function delete($id){

    }

    function findById($id){
        $link = getConnection();
        $query = "select * from users where id= '{$id}'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return new User($row[0], $row[1], $row[2], $row[3]);
            }
        }
        $link->close();
        return null;
    }

    function findByUser($user){
        $link = getConnection();
        $query = "select * from users where user= '{$user}'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return new User($row[0], $row[1], $row[2], $row[3]);
            }
        }
        $link->close();
        return null;
    }

    function findAll(){
        $link = getConnection();
        $list = [];
        $query = "select * from users";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $obj = new User($row[0], $row[1], $row[2], $row[3]);
                array_push($list, $obj);
            }
        }
        $link->close();
        return $list;
    }

    function verifyUserAndPassword($user, $password){
        $link = getConnection();
        $query = "select * from users where user= '{$user}' and password= '{$password}'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return new User($row[0], $row[1], $row[2], $row[3]);
            }
        }
        $link->close();
        return null;
    }

    
}