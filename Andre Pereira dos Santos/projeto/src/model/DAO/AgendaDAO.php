<?php
namespace projeto\src\model\DAO;

require "connect_database.php";

use projeto\src\model\VO\AgendaVO;

class AgendaDAO {


    static function findAll()
    {
        // TODO: Implement findAll() method.
        $agendas = [];
        $link = getConnection();
        $query = "select * from agenda";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $agendas [] = new AgendaVO($row[0], $row[1], $row[2],$row[3],$row[4],$row[5]);
            }
        }
        $link->close();
        return $agendas;
    }
    

    static function findById($id)
    {
        // TODO: Implement findById() method.
        $link = getConnection();
        $query = "select * from agenda where id=$id";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                return new AgendaVO($row[0], $row[1], $row[2],$row[3],$row[4],$row[5]);
            }
        }
        $link->close();
        return null;
    }

    static function create($dado)
    {
        // TODO: Implement create() method.
        $data = $dado->getData();
        $horario = $dado->getHorario();
        $Animal= $dado->getAnimal();
        $Servico = $dado->getServico();
        $anotacao = $dado->getAnotacao();
       

        $link = getConnection();
        $query = "insert into agenda (data, hora, animal, servico,anotacao)
        values ('{$data}','{$horario}','{$Animal}','{$Servico}','{$anotacao}')";
        $result = $link->query($query);
        $link->close();
        if (!$result){
            echo mysqli_error();
            exit(0);
        }

    }

    static function update($id, $dado)
    {
        $data = $dado->getNome();
        $horario = $dado->getEspecie();
        $Animal= $dado->getRaca();
        $Servico = $dado->getPorte();
        $anotacao = $dado->getNascimento();
    

        $link = getConnection();
        $query = "update agenda set data='{$data}', horario='{$horario}',servico='{$Servico}',
        anotacao='{$anotacao}'  where id=$id";
        $link->query($query);
        $link->close();

    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
        $link = getConnection();
        $query = "delete from agenda where id=$id";
        $link->query($query);
        $link->close();
    }

}
