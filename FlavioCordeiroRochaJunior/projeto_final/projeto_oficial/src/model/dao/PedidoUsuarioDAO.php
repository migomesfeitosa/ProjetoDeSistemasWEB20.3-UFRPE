<?php


namespace projeto_oficial\src\model\dao;


use projeto_oficial\src\model\vo\CardapioVO;
use projeto_oficial\src\model\vo\PedidoQuantidadeVO;
use projeto_oficial\src\model\vo\PedidoVO;
require 'conexao_bancodados.php';

class PedidoUsuarioDAO implements IPedidoDAO
{


    function findAll()
    {
        $link = getConnection();
        $lista =[];
        $query = "select p.id,p.data_criacao, sum(c.preco),p.status from usuario u,pedido p,pedido_cardapio pc, cardapio c where p.id_usuario = u.id and pc.id_pedido = p.id and pc.id_cardapio = c.id and u.id = {$_SESSION['id']} GROUP by p.id ORDER by p.data_criacao desc";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $obj = new PedidoVO($row[0],null,$row[2]);
                $obj->setDataCriacao($row[1]);
                $obj->setStatus($row[3]);
                $listaPe = [];
                $query1="select pc.id,c.nome,COUNT(c.id),c.preco from pedido p,cardapio c,pedido_cardapio pc where pc.id_pedido = p.id and pc.id_cardapio = c.id and pc.id_pedido = {$row[0]} group by c.id";
                if($result1 = $link->query($query1)) {
                    while ($row1 = $result1->fetch_row()) {
                        $pedidoQuant = new PedidoQuantidadeVO($row1[1],$row1[2],$row1[3]);
                        $pedidoQuant->setId($row1[0]);
                        array_push($listaPe, $pedidoQuant);

                    }
                }
                $obj->setItens($listaPe);
                array_push($lista,$obj);
            }
        }
        $link->close();
        return $lista;
        // TODO: Implement findAll() method.
    }

    function findById($id)
    {
        $link = getConnection();

        $query = "select p.id,p.data_criacao, sum(c.preco),p.status from usuario u,pedido p,pedido_cardapio pc, cardapio c where p.id_usuario = u.id and pc.id_pedido = p.id and pc.id_cardapio = c.id and u.id = {$_SESSION['id']} and pc.id_pedido={$id} GROUP by p.id";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $obj = new PedidoVO($row[0],null,$row[2]);
                $obj->setDataCriacao($row[1]);
                $obj->setStatus($row[3]);
                $listaPe = [];
                $query1="select pc.id,c.nome,COUNT(c.id),c.preco from pedido p,cardapio c,pedido_cardapio pc where pc.id_pedido = p.id and pc.id_cardapio = c.id and pc.id_pedido = {$row[0]} group by c.id";
                if($result1 = $link->query($query1)) {
                    while ($row1 = $result1->fetch_row()) {
                        $pedidoQuant = new PedidoQuantidadeVO($row1[1],$row1[2],$row1[3]);
                        $pedidoQuant->setId($row1[0]);
                        array_push($listaPe, $pedidoQuant);

                    }
                }
                $obj->setItens($listaPe);

            }
        }
        $link->close();
        return $obj;
        // TODO: Implement findById() method.
    }

    function create(PedidoVO $pedidoVO)
    {
        // TODO: Implement create() method.
    }

    function update($id, PedidoVO $pedidoVO)
    {

        $link = getConnection();
        $query = "update pedido set status='{$pedidoVO->getStatus()}' where id={$id}";
        if (!$link->query($query)){
            echo "Erro";
        }
        $link->close();

        // TODO: Implement update() method.
    }

    function delete($id)
    {
        $quant = $this->verQuantidade($id);
        $link = getConnection();
        $query = "delete from pedido_cardapio where id={$id}";
        if (!$link->query($query)){
            echo "erro";
        }
        if ($quant==1) {
            $query1 = "delete from pedido where id_usuario={$_SESSION['id']} and status='Aberto'";
            if (!$link->query($query1)){
                echo "erro2";
            }
        }
        $link->close();
        // TODO: Implement delete() method.
    }
    function anexarPedido($id){

        $link = getConnection();
        $query2 = "select nome from cardapio where id = {$id}";
        if($result = $link->query($query2)){
            if($row = $result->fetch_row()){
                $_SESSION['mensagem_cadastro'] = $row[0]." adicionado com sucesso";

            }
        }
        $verif = $this->verificarPedido();
        if ($verif==''){

            $query = "insert into pedido(id_usuario,status) values ({$_SESSION['id']},'Aberto')";
            if($link->query($query)){
                echo "Erro1";
            }

        }

        $result = $this->verificarPedido();
        $_SESSION['id_pedido_atual'] = $result;
        $query1 = "insert into pedido_cardapio(id_pedido,id_cardapio) values ({$result},{$id})";
        if($link->query($query1)){
            echo "Erro2";
        }

        $link->close();

    }
    function verificarPedido(){
        $link = getConnection();
        $query = "select id from pedido where status='aberto' and id_usuario={$_SESSION['id']}";

        if ($result = $link->query($query)){
            if($row = $result->fetch_row()){
                $link->close();
                return $row[0];
            }
        }
        $link->close();
        return '';



    }
    function verQuantidade($id){
        $link = getConnection();
        $query="SELECT COUNT(id_pedido) from pedido_cardapio where id_pedido = (SELECT id_pedido from pedido_cardapio where id = {$id}) and id_cardapio = (SELECT id_cardapio from pedido_cardapio where id = {$id}) GROUP by id_pedido";
        if ($result = $link->query($query)){
            if($row =$result->fetch_row() ){
                $link->close();
                return $row[0];

            }
        }
    }


}