<?php

namespace ProjetoPHP\src\model\dao;
use \ProjetoPHP\src\model\dao\interfaceDao\IUsuarioDAO;
use ProjetoPHP\src\model\vo\UsuarioVO;

require "connect_database.php";

class UsuarioDao implements IUsuarioDAO
{   public $table = "user";

    function findAll()
    {
        // TODO: Implement findAll() method.
    }

    function findById($id)
    {
        // TODO: Implement findById() method.
    }

    function create(AlunoVO $alunoVO)
    {
        // TODO: Implement create() method.
    }

    function update($id, AlunoVO $alunoVO)
    {
        // TODO: Implement update() method.
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
    }

    function verifyUserAndPassword($email, $password)
    {

        $password = md5($password);
        // TODO: Implement verifyUserAndPassword() method.
        $link = getConnection();
        $query = "select id, name, email from {$this->table} where email='{$email}' and password ='{$password}'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return new UsuarioVO($row[0], $row[1], $row[2], null);
            }
        }
        $link->close();
        return null;

    }
}