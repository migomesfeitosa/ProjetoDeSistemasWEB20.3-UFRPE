<?php


namespace projeto_oficial\src\model\dao;


use projeto_oficial\src\model\vo\PedidoQuantidadeVO;
use projeto_oficial\src\model\vo\PedidoVO;
use projeto_oficial\src\model\vo\UsuarioVO;

require 'conexao_bancodados.php';
class PedidoDAO implements IPedidoDAO
{


    function findAll()
    {
        $link = getConnection();
        $lista=[];
        $query = "select u.id,u.nome,u.sobrenome,u.email,u.cidade,u.bairro, u.rua,u.numero, u.login,p.id, sum(c.preco),p.status from usuario u,pedido p,pedido_cardapio pc,cardapio c where p.id_usuario = u.id and pc.id_pedido = p.id and pc.id_cardapio = c.id GROUP by p.id order by p.data_criacao DESC";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $usuarioVo = new UsuarioVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],null,null);
                $pedidoVo = new PedidoVO($row[9],$usuarioVo,$row[10]);
                $pedidoVo->setStatus($row[11]);
                array_push($lista, $pedidoVo);
            }
        }
        $link->close();
        return $lista;
    }

    function findById($id)
    {
        $link = getConnection();

        $query = "select u.id,u.nome,u.sobrenome,u.email,u.cidade,u.bairro, u.rua,u.numero, u.login,p.id,  sum(c.preco),p.status from usuario u,pedido p,pedido_cardapio pc,cardapio c where p.id_usuario = u.id and pc.id_pedido = p.id and pc.id_cardapio = c.id and p.id = {$id} GROUP by u.login";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $usuarioVo = new UsuarioVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],null,null);
                $pedidoVo = new PedidoVO($row[9],$usuarioVo,$row[10]);
                $pedidoVo->setStatus($row[11]);
                $query1 = "select c.nome,COUNT(c.id) as 'quantidade', c.preco from usuario u,pedido p,pedido_cardapio pc,cardapio c where p.id_usuario = u.id and pc.id_pedido = p.id and pc.id_cardapio = c.id and p.id = {$id} GROUP by c.id";
                $listaPe=[];
                if($result1 = $link->query($query1)){
                    while ($row1 = $result1->fetch_row()){
                        $pedidoQuant = new PedidoQuantidadeVO($row1[0],$row1[1],$row1[2]);

                        array_push($listaPe, $pedidoQuant);
                    }
                    $pedidoVo->setItens($listaPe);
                }

            }
        }

        $link->close();
        return $pedidoVo;
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
        // TODO: Implement delete() method.
    }
}