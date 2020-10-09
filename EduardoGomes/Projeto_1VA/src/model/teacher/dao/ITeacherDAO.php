<?php
namespace Projeto_1VA\src\model\teacher\dao;
use Projeto_1VA\src\model\teacher\vo\Teacher;

interface ITeacherDAO{

    function create(Teacher $teacher);
    function update($id, Teacher $teacher);
    function delete($id);
    function findById($id);
    function findAll();

}