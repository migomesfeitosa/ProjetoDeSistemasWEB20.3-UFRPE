<?php

namespace Projeto_1VA\src\controller;

use Projeto_1VA\src\model\teacher\dao\TeacherDAO;

class RoutesController{

    public function login(){
        require __DIR__ . "/../view/login.php";
    }

    public function register(){
        require __DIR__ . "/../view/register.php";
    }

    public function dashboard(){
        require __DIR__ . "/../view/dashboard.php";
    }

    public function teacher(){
        require __DIR__ . "/../view/teacher.php";
    }

    public function study(){
        require __DIR__ . "/../view/study.php";
    }

    public function mydisciplines(){
        require __DIR__ . "/../view/mydisciplines/mydisciplines.php";
    }

    public function mydisciplinesEdit($id){
        $teacherDao = TeacherDAO::getInstance();
        $returnTeacher = $teacherDao->findById($id);
        if ($returnTeacher != null){
            require __DIR__ . "/../view/mydisciplines/mydisciplines.edit.php";
        }else{
            $this->mydisciplines();
        }
    }
}