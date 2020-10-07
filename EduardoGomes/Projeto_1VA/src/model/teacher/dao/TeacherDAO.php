<?php

namespace Projeto_1VA\src\model\teacher\dao;
use Projeto_1VA\src\model\teacher\dao\ITeacherDAO;
use Projeto_1VA\src\model\teacher\vo\Teacher;

class TeacherDAO implements ITeacherDAO{

    private static $instance;

    public static function getInstance(){
        if(TeacherDAO::$instance == null){
            TeacherDAO::$instance = new TeacherDAO();
        }
        return TeacherDAO::$instance;
    }

    function create(Teacher $teacher){

    }

    function update($id, Teacher $teacher){

    }

    function delete($id){
        
    }

    function findById($id){
        
    }

    function findAll(){

    }
}