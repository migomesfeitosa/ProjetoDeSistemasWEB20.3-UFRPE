<?php


namespace projeto\src\controller;
use projeto\src\model\DAO\ClienteDAO;
use projeto\src\model\VO\ClienteVO;

class ClienteController implements InterfacesController
{

    function index()
    {
        // TODO: Implement index() method.
        $clientes = ClienteDAO::findAll();
        require __DIR__ . "/../view/cliente/list.php";
    }

    function view()
    {
        // TODO: Implement view() method.
        $id = $_GET['id'];
        $cliente = ClienteDAO::findById($id);
        require __DIR__ . "/../view/cliente/view.php";
    }

    function create()
    {
        // TODO: Implement create() method.
        require __DIR__ . "/../view/cliente/create.php";
    }

    function edit()
    {
        // TODO: Implement edit() method.
        $id = $_GET['id'];
        $cliente = ClienteDAO::findById($id);
        require __DIR__ . "/../view/cliente/edit.php";
    }

    function store()
    {
        // TODO: Implement store() method.
        $nome = $_POST['nome'];
        $nascimento = $_POST['nascimento'];
        $sexo = $_POST['sexo'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $clienteVO = new ClienteVO(null, $nome, $nascimento,$sexo,$telefone,$email,$senha);
        ClienteDAO::create($clienteVO);
        session_start();
        $_SESSION['message'] = "Cliente: $nome criada com sucesso!";
        header("Location: /clientes");
    }

    function update()
    {
        // TODO: Implement update() method.
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $nascimento = $_POST['nascimento'];
        $sexo = $_POST['sexo'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $clienteVO = new ClienteVO(null, $nome, $nascimento,$sexo,$telefone,$email,$senha);
        ClienteDAO::update($id, $clienteVO);
        session_start();
        $_SESSION['message'] = "Cliente: $nome atualizada com sucesso!";
        header("Location: /clientes");
    }

    function delete()
    {
        // TODO: Implement delete() method.
        $id = $_GET['id'];
        ClienteDAO::delete($id);
        session_start();
        $_SESSION['message'] = "Cliente excluída com sucesso!";
        header("Location: /clientes");
    }
}