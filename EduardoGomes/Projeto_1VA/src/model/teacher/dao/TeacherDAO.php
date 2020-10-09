<?php

namespace Projeto_1VA\src\model\teacher\dao;
use Projeto_1VA\src\model\teacher\dao\ITeacherDAO;
use Projeto_1VA\src\model\teacher\vo\Teacher;

include_once "/Users/Pichau/ProjetoDeSistemasWEB20.3-UFRPE/EduardoGomes/Projeto_1VA/src/database/dbconnection.php";

class TeacherDAO implements ITeacherDAO{

    private static $instance;

    public static function getInstance(){
        if(TeacherDAO::$instance == null){
            TeacherDAO::$instance = new TeacherDAO();
        }
        return TeacherDAO::$instance;
    }

    function create(Teacher $teacher){
        $link = getConnection();
        $query = "insert into teachers (userid, avatar, whatsapp, biography, discipline, cost, weekday, time_from, time_to) values ('{$teacher->getUserId()}', '{$teacher->getAvatar()}', '{$teacher->getWhatsapp()}', '{$teacher->getBiography()}', '{$teacher->getDiscipline()}', '{$teacher->getCost()}', '{$teacher->getWeekday()}', '{$teacher->getTimeFrom()}', '{$teacher->getTimeTo()}')";
        $result = $link->query($query);
        if (!$result){
            echo mysqli_error($link);
            $link->close();
            exit(0);
        }
        $link->close();
    }

    function update($id, Teacher $teacher){
        $link = getConnection();
        $query = "update teachers set avatar='{$teacher->getAvatar()}', whatsapp='{$teacher->getWhatsapp()}', biography='{$teacher->getBiography()}', discipline='{$teacher->getDiscipline()}', cost='{$teacher->getCost()}', weekday='{$teacher->getWeekday()}', time_from='{$teacher->getTimeFrom()}', time_to='{$teacher->getTimeTo()}' where id='{$id}' and userid= '{$_SESSION['logged_user']->getId()}' ";
        $result = $link->query($query);
        if(!$result){
            $link->close();
            return false;
        }
        $link->close();
        return true;
    }

    function delete($id){
        $link = getConnection();
        $query = "delete from teachers where id={$id} and userid={$_SESSION['logged_user']->getId()}";
        $result = $link->query($query);
        if(!$result){
            echo mysqli_error($link);
            $link->close();
            exit(0);
        }
        $link->close();
    }

    function findById($id){
        $link = getConnection();
        $query = "select * from teachers where id= '{$id}' and userid= '{$_SESSION['logged_user']->getId()}'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return new Teacher($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[9]);
            }
        }
        $link->close();
        return null;
    }

    function findByMe(){
        $link = getConnection();
        $query = "select * from teachers where userid= '{$_SESSION['logged_user']->getId()}'";
        $list = [];
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $obj = new Teacher($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[9]);
                array_push($list, $obj);
            }
        }
        $link->close();
        return $list;
    }

    function findAll(){
        $link = getConnection();
        $list = [];
        $query = "select * from teachers";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $obj = new Teacher($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[9]);
                array_push($list, $obj);
            }
        }
        $link->close();
        return $list;
    }
}