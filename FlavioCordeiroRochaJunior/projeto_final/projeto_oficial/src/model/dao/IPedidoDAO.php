<?php


namespace projeto_oficial\src\model\dao;


use projeto_oficial\src\model\vo\PedidoVO;

interface IPedidoDAO
{
    function findAll();
    function findById($id);
    function create(PedidoVO $pedidoVO);
    function update($id,PedidoVO $pedidoVO);
    function delete($id);

}