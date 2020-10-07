<?php


namespace projeto_oficial\src\controller;


use projeto_oficial\src\model\dao\CardapioDAO;
use projeto_oficial\src\model\dao\PedidoUsuarioDAO;

class CardapioPrincipalController implements IController
{

    public function index()
    {
        $cardapioDao = new CardapioDAO();
        $retorno = $cardapioDao->findAll();
        require "./../src/view/principalCardapio.php";
        //echo "Cardapio";
        // TODO: Implement index() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function view($id)
    {
        // TODO: Implement view() method.
    }

    public function update($id)
    {
        // TODO: Implement update() method.
    }

    public function edit($id)
    {
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
    public function append($id){

        //$cardapioDao = new CardapioDAO();
       // $r = $cardapioDao->findById($id);
        //

        $pedidoUsuarioDao = new PedidoUsuarioDAO();
        $pedidoUsuarioDao->anexarPedido($id);


        header("location: /cardapioPrincipal?index");
    }
}