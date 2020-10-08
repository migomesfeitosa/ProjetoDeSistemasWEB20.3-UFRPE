<?php
namespace projeto\src\model\DAO;

require "connect_database.php";

use projeto\src\model\VO\AnimalVO;

class AnimalDAO implements InterfacesDAO{


    static function findAll()
    {
        // TODO: Implement findAll() method.
        $animais = [];
        $link = getConnection();
        $query = "select * from animais";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $animais [] = new AnimalVO($row[0], $row[1], $row[2],$row[3],$row[4],$row[5],
                $row[6],$row[7],$row[8],$row[9]);
            }
        }
        $link->close();
        return $animais;
    }

    static function findById($id)
    {
        // TODO: Implement findById() method.
        $link = getConnection();
        $query = "select * from animais where id=$id";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                return new AnimalVO($row[0], $row[1], $row[2],$row[3],$row[4],$row[5],
                $row[6],$row[7],$row[8],$row[9]);
            }
        }
        $link->close();
        return null;
    }

    static function create($dado)
    {
        // TODO: Implement create() method.
        $nome = $dado->getNome();
        $especie = $dado->getEspecie();
        $raca = $dado->getRaca();
        $porte = $dado->getPorte();
        $nascimento = $dado->getNascimento();
        $castrado = $dado->getCastrado();
        $sexo = $dado->getSexo();
        $imagem = $dado->getImagem();
        $cliente = $dado->getCliente();

        $link = getConnection();
        $query = "insert into animais (cliente,nome, especie,raca,porte,nascimento,castrado,sexo,imagem)
        values ('{$cliente}','{$nome}','{$especie}','{$raca}','{$porte}','{$nascimento}','{$castrado}','{$sexo}','{$imagem}')";
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
        $raca = $dado->getRaca();
        $porte = $dado->getPorte();
        $nascimento = $dado->getNascimento();
        $castrado = $dado->getCastrado();
    

        $link = getConnection();
        $query = "update animais set nome='{$nome}', raca='{$raca}',
        porte='{$porte}', nascimento='{$nascimento}',castrado='{$castrado}', where id=$id";
        $link->query($query);
        $link->close();

    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
        $link = getConnection();
        $query = "delete from animais where id=$id";
        $link->query($query);
        $link->close();
    }

}
