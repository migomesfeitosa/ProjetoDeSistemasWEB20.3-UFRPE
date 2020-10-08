<?php
namespace projeto\src\model\DAO;

require "connect_database.php";

use projeto\src\model\VO\ClienteVO;

class ClienteDAO {

   

    static function findAll()
    {
        // TODO: Implement findAll() method.
        $clientes = [];
        $link = getConnection();
        $query = "select * from clientes";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $clientes [] = new ClienteVO($row[0], $row[1], $row[2], $row[3], $row[4], $row[5],$row[6]);
            }
        }
        $link->close();
        return $clientes;
    }

    static function findById($id)
    {
        // TODO: Implement findById() method.
        $link = getConnection();
        $query = "select * from clientes where id=$id";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                return new ClienteVO($row[0], $row[1], $row[2],$row[3],$row[4],$row[5],$row[6]);
            }
        }
        $link->close();
        return null;
    }

    static function create($dado)
    {
        // TODO: Implement create() method.
        $nome = $dado->getNome();
        $nascimento = $dado->getNascimento();
        $sexo = $dado->getSexo();
        $telefone = $dado->getTelefone();
        $email = $dado->getEmail();
       
        $password = $dado->getSenha();
        $senha =  md5($password);

        $link = getConnection();
        $query = "insert into clientes (nome, nascimento,sexo,telefone,email,senha) values ('{$nome}',
        '{$nascimento}','{$sexo}','{$telefone}','{$email}','{$senha}')";
        $result = $link->query($query);
        $link->close();
        if (!$result){
            echo mysqli_error();
            exit(0);
        }


    }

    static function update($id, $dado)
    {
        $nome = $dado->getNome();
        $nascimento = $dado->getNascimento();
        $sexo = $dado->getSexo();
        $telefone = $dado->getTelefone();
     
    
        $link = getConnection();
        $query = "update clientes set nome='{$nome}', nascimento='{$nascimento}', sexo='{$sexo}',
        telefone='{$telefone}' where id=$id";
        $link->query($query);
        $link->close();

    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
        $link = getConnection();
        $query = "delete from clientes where id=$id";
        $link->query($query);
        $link->close();
    }
    function verifyUserAndPassword($email, $password)
    {

        $password = md5($password);
        // TODO: Implement verifyUserAndPassword() method.
        $link = getConnection();
        $query = "select * from clientes where email='{$email}' and senha='{$password}'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return new ClienteVO($row[0], $row[1], $row[2],$row[3],$row[4],$row[5],$row[6]);
            }
        }
        $link->close();
        return null;

    }
    static function findByName($name)
    {
        // TODO: Implement findById() method.
        $link = getConnection();
        $query = "select * from clientes where nome=$name";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                return new ClienteVO($row[0], $row[1], $row[2],$row[3],$row[4],$row[5],$row[6]);
            }
        }
        $link->close();
        return null;
    }

}
