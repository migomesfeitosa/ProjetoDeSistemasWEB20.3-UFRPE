<?php


namespace projeto_oficial\src\controller;


use projeto_oficial\src\model\dao\PedidoDAO;
use projeto_oficial\src\model\vo\PedidoVO;

class PedidoController implements IController
{


    /**
     * PedidoController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        $pedidoDao = new PedidoDAO();
        $retorno = $pedidoDao->findAll();
        $tipo ="pedido";
        require "./../src/view/principalFuncionario.php";
        // TODO: Implement index() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function view($id)
    {
        $pedidoDao = new PedidoDAO();
        $retorno = $pedidoDao->findById($id);
        require "./../src/view/principalDetalhesPedido.php";

        // TODO: Implement view() method.
    }

    public function update($id)
    {
        $pedidoDao = new PedidoDAO();
        $status = $_POST['status'];
        $pedidoVo = new PedidoVO(null,null,null);
        $pedidoVo->setStatus($status);
        $pedidoDao->update($id,$pedidoVo);
        header("location: /pedido?index");
        // TODO: Implement update() method.
    }

    public function edit($id)
    {
        $this->update($id);
        // TODO: Implement edit() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }



    public function store()
    {
        // TODO: Implement store() method.
    }
}