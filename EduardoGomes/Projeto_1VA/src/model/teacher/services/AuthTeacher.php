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
        $biography = $_POST['discipline'];
        $cost = $_POST['cost'];
        $weekday = $_POST['weekday'];
        $time_from = Utils::convertTime($_POST['time_from']);
        $time_to = Utils::convertTime($_POST['time_to']);

        $teacherDao = TeacherDAO::getInstance();

        $newTeacher = new Teacher(null, $userId, $avatar, $whatsapp, $biography, $biography, $cost, $weekday, $time_from, $time_to);

        $teacherDao->create($newTeacher);

    }

}