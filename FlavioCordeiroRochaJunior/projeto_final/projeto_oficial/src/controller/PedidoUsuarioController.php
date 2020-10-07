<?php


namespace projeto_oficial\src\controller;


use projeto_oficial\src\model\dao\PedidoUsuarioDAO;



class PedidoUsuarioController implements IController
{

    public function index()
    {
        $pedidoUsuarioDao = new PedidoUsuarioDAO();
        $retorno = $pedidoUsuarioDao->findAll();
        require "./../src/view/principalDetalhesPedidos.php";
        //var_dump($retorno[0]->getStatus());
        // TODO: Implement index() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function view($id)
    {
        $pedidoUsuarioDao = new PedidoUsuarioDAO();
        $retorno = $pedidoUsuarioDao->findById($id);

        $_SESSION['id_pedido'] = $id;

        require "./../src/view/detalhesPedidoUsuario.php";



        // TODO: Implement view() method.
    }

    public function update($id)
    {
        $usuarioPedidoDao = new PedidoUsuarioDAO();
        $retorno = $usuarioPedidoDao->findById($id);

        if ($retorno->getStatus() == "Aberto"){
            $retorno->setStatus("Pendente");
        }else{
            $retorno->setStatus("Aberto");
        }

        $usuarioPedidoDao->update($id,$retorno);
        $this->index();
        // TODO: Implement update() method.
    }

    public function edit($id)
    {
        $usuarioPedidoDao = new PedidoUsuarioDAO();
        $retorno = $usuarioPedidoDao->findById($id);
        if ($retorno->getStatus() != "Cancelado"){
            $retorno->setStatus("Cancelado");
        }

        $usuarioPedidoDao->update($id,$retorno);
        $this->index();


        // TODO: Implement edit() method.
    }

    public function delete($id)
    {
        $pedidoUsuarioDao = new PedidoUsuarioDAO();
        $quant = $pedidoUsuarioDao->verQuantidade($id);

        $pedidoUsuarioDao->delete($id);
        if ($quant==1){
            $this->index();

        }else{
            $this->view($_SESSION['id_pedido']);

        }




        // TODO: Implement delete() method.
    }

    public function store()
    {
        // TODO: Implement store() method.
    }
}