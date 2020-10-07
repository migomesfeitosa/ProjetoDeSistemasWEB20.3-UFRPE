<?php

namespace Projeto_1VA\src\model\teacher\dao;
use Projeto_1VA\src\model\teacher\dao\ITeacherDAO;
use Projeto_1VA\src\model\teacher\vo\Teacher;

require "/Users/Pichau/ProjetoDeSistemasWEB20.3-UFRPE/EduardoGomes/Projeto_1VA/src/database/dbconnection.php";

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

    }

    function delete($id){
        
    }

    function findById($id){
        
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