<?php

namespace ProjetoPHP\src\model\dao\interface_dao;
use ProjetoPHP\src\model\vo\UserVO;

interface IAlunoDAO
{
    function  findAll();
    function findById($id);
    function create(UserVO $alunoVO);
    function update($id, UserVO $alunoVO);
    function delete($id);
    function verifyUserAndPassword($email, $password);
}