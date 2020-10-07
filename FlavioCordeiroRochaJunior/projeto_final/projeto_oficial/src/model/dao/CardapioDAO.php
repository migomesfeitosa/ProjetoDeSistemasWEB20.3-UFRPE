<?php


namespace projeto_oficial\src\model\dao;


use projeto_oficial\src\model\dao\ICardapioDAO;
use projeto_oficial\src\model\vo\CardapioVO;

require 'conexao_bancodados.php';

class CardapioDAO implements ICardapioDAO
{
    public $table = 'cardapio';

    /**
     * CardapioDAO constructor.
     */
    public function __construct()
    {
    }

    function findAll()
    {
        $link = getConnection();
        $lista = [];
        $query = "select * from {$this->table}  order by tipo desc";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $obj = new CardapioVO($row[0],$row[1],$row[2],$row[3],$row[4]);
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
        $obj = null;
        $query = "select * from {$this->table} where id = {$id}";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $obj = new CardapioVO($row[0],$row[1],$row[2],$row[3],$row[4]);

            }
        }
        $link->close();
        return $obj;
        // TODO: Implement findById() method.
    }

    function create(CardapioVO $cardapio)
    {
        $link = getConnection();
        $query = "insert into {$this->table}(nome,preco,ingredientes,tipo) values ('{$cardapio->getNome()}','{$cardapio->getPreco()}','{$cardapio->getIngredientes()}','{$cardapio->getTipo()}')";
        if ($link->query($query)){
            $link->close();
            return true;
        }else{
            $link->close();
            return false;
        }
        // TODO: Implement create() method.
    }

    function update($id, CardapioVO $cardapio)
    {
        // TODO: Implement update() method.
        $link = getConnection();
        $query = "update cardapio set nome='{$cardapio->getNome()}', preco = {$cardapio->getPreco()}, ingredientes='{$cardapio->getIngredientes()}', tipo = '{$cardapio->getTipo()}' where id= {$id}";
        if (!$link->query($query)){
            echo "erro";
        }
        $link->close();
    }

    function delete($id)
    {
        $link = getConnection();
        $query = "delete from {$this->table} where id = {$id}";

        if ($link->query($query)){
         echo "erro";
        }
        $link->close();


        // TODO: Implement delete() method.
    }

}