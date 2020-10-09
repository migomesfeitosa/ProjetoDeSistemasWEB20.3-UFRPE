<?php
namespace projeto\src\model\DAO;

require "connect_database.php";

use projeto\src\model\VO\ServicoVO;

class ServicoDAO implements InterfacesDAO{


    static function findAll()
    {
        // TODO: Implement findAll() method.
        $servicos = [];
        $link = getConnection();
        $query = "select * from servicos";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $servicos [] = new ServicoVO($row[0], $row[1], $row[2],$row[3]);
            }
        }
        $link->close();
        return $servicos;
    }

    static function findById($id)
    {
        // TODO: Implement findById() method.
        $link = getConnection();
        $query = "select * from servicos where id=$id";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                return new ServicoVO($row[0], $row[1], $row[2],$row[3]);
            }
        }
        $link->close();
        return null;
    }

    static function create($dado)
    {
        // TODO: Implement create() method.
        $descricao = $dado->getDescricao();
        $valor = $dado->getValor();
        $duracao = $dado->getDuracao();
       

        $link = getConnection();
        $query = "insert into servicos (descricao, valor, duracao)
        values ('{$descricao}','{$valor}','{$duracao}')";
        $result = $link->query($query);
        $link->close();
        if (!$result){
            echo mysqli_error();
            exit(0);
        }


    }

    static function update($id, $dado)
    {
        $descricao = $dado->getDescricao();
        $valor = $dado->getValor();
        $duracao = $dado->getDuracao();
    

        $link = getConnection();
        $query = "update servicos set descricao='{$descricao}', valor='{$valor}',duracao='{$duracao}'  where id=$id";
        $link->query($query);
        $link->close();

    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
        $link = getConnection();
        $query = "delete from servicos where id=$id";
        $link->query($query);
        $link->close();
    }

}
