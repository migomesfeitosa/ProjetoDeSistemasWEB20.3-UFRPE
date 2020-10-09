<?php

namespace Projeto_1VA\src\model\teacher\services;

use Projeto_1VA\src\model\teacher\dao\TeacherDAO;
use Projeto_1VA\src\model\teacher\vo\Teacher;
use Projeto_1VA\src\utils\Utils;

class AuthTeacher{

    public static function authCreateTeacher(){

        $userId = $_SESSION['logged_user']->getId();
        $avatar = $_POST['avatar'];
        $whatsapp = $_POST['whatsapp'];
        $biography = $_POST['biography'];
        $discipline = $_POST['discipline'];
        $cost = $_POST['cost'];
        $weekday = $_POST['weekday'];
        $time_from = Utils::convertTime($_POST['time_from']);
        $time_to = Utils::convertTime($_POST['time_to']);

        $teacherDao = TeacherDAO::getInstance();

        $newTeacher = new Teacher(null, $userId, $avatar, $whatsapp, $biography, $discipline, $cost, $weekday, $time_from, $time_to);

        $teacherDao->create($newTeacher);

    }

    public static function authUpdateTeacher($id){
        $userId = $_SESSION['logged_user']->getId();
        $avatar = $_POST['avatar'];
        $whatsapp = $_POST['whatsapp'];
        $biography = $_POST['biography'];
        $discipline = $_POST['discipline'];
        $cost = $_POST['cost'];
        $weekday = $_POST['weekday'];
        $time_from = Utils::convertTime($_POST['time_from']);
        $time_to = Utils::convertTime($_POST['time_to']);

        $teacherDao = TeacherDAO::getInstance();

        $newTeacher = new Teacher($id, $userId, $avatar, $whatsapp, $biography, $discipline, $cost, $weekday, $time_from, $time_to);

        return $teacherDao->update($id, $newTeacher);
    }

    public static function authDeleteTeacher($id){
        $teacherDao = TeacherDAO::getInstance();
        $teacherDao->delete($id);

    }

}