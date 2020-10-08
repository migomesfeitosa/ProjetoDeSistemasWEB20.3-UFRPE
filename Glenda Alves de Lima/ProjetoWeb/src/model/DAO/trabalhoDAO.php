<?php
namespace ProjetoWeb\src\model\DAO;

require "connect_database.php";

use ProjetoWeb\src\model\VO\TrabalhoVO;

class TrabalhoDAO implements InterfacesDAO{


    static function findAll()
    {
        // TODO: Implement findAll() method.
        
        $trabalhos = [];
        $link = getConnection();
        $query = "select * from trabalhos";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $trabalhos [] = new TrabalhoVO($row[0], $row[1], $row[2],$row[3],$row[4],$row[5],
                $row[6],$row[7],$row[8]);
            }
        }
        $link->close();
        return $trabalhos;
    }

    static function findById($id)
    {
        // TODO: Implement findById() method.
        $link = getConnection();
        $query = "select * from trabalhos where id=$id";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                return new TrabalhoVO($row[0], $row[1], $row[2],$row[3],$row[4],$row[5],
                $row[6],$row[7],$row[8]);
            }
        }
        $link->close();
        return null;
    }

    static function create($dado)
    {
        // TODO: Implement create() method.
        $titulo =  $dado->getTitulo();
        $user_id =  $dado->getUserId();
        $autor =$dado->getAutor();
        $area = $dado->getArea();
        $ano = $dado->getAno();
        $tipoDocumento = $dado->getTipoDocumento();
        $documento = $dado->getDocumento();
        $descricao = $dado->getDescricao();

        $link = getConnection();
        $query = "insert into trabalhos (user_id, titulo, autor,tipoDocumento,area,descricao,ano,documento)
        values ('{$_SESSION['user_id']}','{$titulo}','{$autor}','{$tipoDocumento}','{$area}','{$descricao}','{$ano}','{$documento}')";
        $result = $link->query($query);
        $link->close();
        if (!$result){
            echo mysqli_error();
            exit(0);
        }

    }

    static function update($id, $dado)
    {
        $titulo =  $dado->getTitulo();
        $autor =$dado->getAutor();
        $area = $dado->getArea();
        $ano = $dado->getAno();
        $tipoDocumento = $dado->getTipoDocumento();
        $descricao = $dado->getDescricao();
        $link = getConnection();
        $query = "update trabalhos set titulo='{$titulo}', autor='{$autor}',tipoDocumento='{$tipoDocumento}',
        area='{$area}', descricao='{$descricao}',ano='{$ano}',  where id=$id";
        $link->query($query);
        $link->close();

    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
        $link = getConnection();
        $query = "delete from trabalhos where id=$id";
        $link->query($query);
        $link->close();
    }

  static  function trabalhoLogin(){

        $link = getConnection();
        $lista = [];
        $query = "select * from trabalhos where user_id = {$_SESSION['user_id']}";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $obj =  new TrabalhoVO($row[0], $row[1], $row[2],$row[3],$row[4],$row[5],
                $row[6],$row[7],$row[8]);
                array_push($lista, $obj);
            }
        }
        $link->close();
        return $lista;
    }

    static  function pesquisar($pesquisa){
        $link = getConnection();
        $lista = [];
        $query = "select * from trabalhos where autor={$pesquisa} or titulo={$pesquisa} or tipoDocumento={$pesquisa} or area={$pesquisa} }";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $obj =  new TrabalhoVO($row[0], $row[1], $row[2],$row[3],$row[4],$row[5],
                $row[6],$row[7],$row[8]);
                array_push($lista, $obj);
            }
        }
        $link->close();
        return $lista;
    }
    
}
