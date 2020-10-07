<?php

namespace projeto_oficial\src\model\dao;
use projeto_oficial\src\model\dao\IUsuarioDAO;
use projeto_oficial\src\model\vo\UsuarioVO;

require 'conexao_bancodados.php';

class UsuarioDAO implements IUsuarioDAO
{
    public $table = "usuario";

    /**
     * UsuarioDAO constructor.
     */
    public function __construct()
    {

    }

    function findAll()
    {
        $link = getConnection();
        $lista = [];
        $query = "select id,nome,sobrenome,email,cidade,bairro,rua,numero,login,tipo,status  from {$this->table} where tipo='usuario'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $obj = new UsuarioVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],null,$row[9]);
                $obj->setStatus($row[10]);
                array_push($lista, $obj);
            }
        }
        $link->close();
        return $lista;





        // TODO: Implement findAll() method
    }

    function findById($id)
    {
        $link = getConnection();
        $retorno="";
        $query = "select id,nome,sobrenome,email,cidade,bairro,rua,numero,login,tipo,status from {$this->table} where id ='{$id}'";
        if($result = $link->query($query)){
           if ($row = $result->fetch_row()){
                $obj = new UsuarioVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],null,$row[9]);
                $obj->setStatus($row[10]);

                $retorno = $obj;
            }
        }
        $link->close();
        return $retorno;
        // TODO: Implement findById() method.
    }

    function create(\projeto_oficial\src\model\vo\UsuarioVO $usuario)
    {
        $usuario->setSenha(md5($usuario->getSenha()));
        $link = getConnection();
        $query = "insert into {$this->table} (nome, sobrenome, email, cidade,bairro,rua,numero,login,senha,tipo,status) values ('{$usuario->getNome()}','{$usuario->getSobrenome()}','{$usuario->getEmail()}','{$usuario->getCidade()}','{$usuario->getBairro()}','{$usuario->getRua()}','{$usuario->getNumero()}','{$usuario->getLogin()}','{$usuario->getSenha()}','{$usuario->getTipo()}','ativo')";
        $result = $link->query($query);
        $link->close();
        if(!$result){
            echo mysqli_error();
            exit(0);
        }
        // TODO: Implement create() method.
    }

    function update($id, \projeto_oficial\src\model\vo\UsuarioVO $usuario)
    {
        $usuario->setSenha(md5($usuario->getSenha()));
        $link = getConnection();
        $query = "update {$this->table} set nome='{$usuario->getNome()}', sobrenome='{$usuario->getSobrenome()}', email='{$usuario->getEmail()}', cidade = '{$usuario->getCidade()}', bairro = '{$usuario->getBairro()}', rua = '{$usuario->getRua()}', numero = {$usuario->getNumero()}, login = '{$usuario->getLogin()}', senha = '{$usuario->getSenha()}' where id={$id}";



        if(!$link->query($query)){
            echo erro;

        }
        $link->close();
        // TODO: Implement update() method.
    }
    function updateState($id,$state){
        $link = getConnection();
        $query = "update usuario set status='{$state}' where id={$id}";
        if (!$link->query($query)){
            echo "Erro";
        }
        $link->close();
    }

    function delete($id)
    {

    }
     function verificarLogin($login){
        $link = getConnection();
        $query = "select count(id) from usuario where login='{$login}'";
        if ($result = $link->query($query)){
            if ($row = $result->fetch_row()){
                return $row[0];
            }
        }
}

    function verifyUser($login, $senha)
    {
        $senhaCript = md5($senha);

        $link = getConnection();
        $query = "select id, nome, email,tipo from {$this->table} where login='{$login}' and senha ='{$senhaCript}' and status='ativo'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){

                return new UsuarioVO($row[0],$row[1],null,$row[2],null,null,null,null,$login,null,$row[3]);
            }
        }
        $link->close();
        return "";



    }
}