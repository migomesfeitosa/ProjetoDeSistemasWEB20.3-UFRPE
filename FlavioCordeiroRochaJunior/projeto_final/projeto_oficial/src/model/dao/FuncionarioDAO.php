<?php


namespace projeto_oficial\src\model\dao;

require 'conexao_bancodados.php';
use projeto_oficial\src\model\vo\UsuarioVO;

class FuncionarioDAO implements IUsuarioDAO
{
    public $table = "usuario";


    public function __construct()
    {

    }


    function findAll()
    {
        $link = getConnection();
        $lista = [];
        $query = "select id,nome,sobrenome,email,cidade,bairro,rua,numero,login,tipo,status  from {$this->table} where tipo='funcionario'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $obj = new UsuarioVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],null,$row[9]);
                $obj->setStatus($row[10]);
                array_push($lista, $obj);
            }
        }
        $link->close();
        return $lista;
        // TODO: Implement findAll() method.
    }

    function findById($id)
    {
        $link = getConnection();
        $retorno="";
        $query = "select id,nome,sobrenome,email,cidade,bairro,rua,numero,login,tipo,status from {$this->table} where id ='{$id}' and tipo='funcionario'";
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

    function create(UsuarioVO $usuario)
    {
        $usuario->setSenha(md5($usuario->getSenha()));
        $link = getConnection();
        $query = "insert into {$this->table} (nome, sobrenome, email, cidade,bairro,rua,numero,login,senha,tipo,status) values ('{$usuario->getNome()}','{$usuario->getSobrenome()}','{$usuario->getEmail()}','{$usuario->getCidade()}','{$usuario->getBairro()}','{$usuario->getRua()}','{$usuario->getNumero()}','{$usuario->getLogin()}','{$usuario->getSenha()}','{$usuario->getTipo()}','{$usuario->getStatus()}')";
        $result = $link->query($query);
        $link->close();
        if(!$result){
            echo "Erro";
        }
    }

    function update($id, UsuarioVO $usuario)
    {
        $link = getConnection();

        $query = "update {$this->table} set status='{$usuario->getStatus()}' where id={$id}";
        if ($link->query($query)){
            echo "erro";
        }
        $link->close();
        // TODO: Implement update() method.
    }

    function delete($id)
    {
        $link = getConnection();
        $query = "delete from {$this->table} where id= {$id}";
        if ($link->query($query)){
            echo "Erro";
        }
        $link->close();
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
        // TODO: Implement verifyUser() method.
    }
}