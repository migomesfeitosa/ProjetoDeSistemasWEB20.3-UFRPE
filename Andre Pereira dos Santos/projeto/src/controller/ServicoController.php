<?php


namespace projeto\src\controller;
use projeto\src\model\DAO\ServicoDAO;
use projeto\src\model\VO\ServicoVO;

class ServicoController implements InterfacesController
{

    function index()
    {
        // TODO: Implement index() method.
        $servicos = ServicoDAO::findAll();
        require __DIR__ . "/../view/servico/list.php";
    }

    function view()
    {
        // TODO: Implement view() method.
        $id = $_GET['id'];
        $servico = ServicoDAO::findById($id);
        require __DIR__ . "/../view/servico/view.php";
    }

    function create()
    {
        // TODO: Implement create() method.
        require __DIR__ . "/../view/servico/create.php";
    }

    function edit()
    {
        // TODO: Implement edit() method.
        $id = $_GET['id'];
        $servico = ServicoDAO::findById($id);
        require __DIR__ . "/../view/servico/edit.php";
    }

    function store()
    {
        // TODO: Implement store() method.
        $descricao = $_POST['descricao'];
        $valor = $_POST['valor'];
        $duracao = $_POST['duracao'];
        

        $servicoVO = new ServicoVO(null, $descricao, $valor,$duracao);
        ServicoDAO::create($servicoVO);
        session_start();
        $_SESSION['message'] = "Servico: $nome criada com sucesso!";
        header("Location: /servicos");
    }

    function update()
    {
        // TODO: Implement update() method.
        $id = $_GET['id'];
        $descricao = $_POST['descricao'];
        $valor = $_POST['valor'];
        $duracao = $_POST['duracao'];
        
        $servicoVO = new ServicoVO(null, $descricao, $valor,$duracao);
        ServicoDAO::update($id, $servicoVO);
        session_start();
        $_SESSION['message'] = "Servico: $nome atualizada com sucesso!";
        header("Location: /servicos");
    }

    function delete()
    {
        // TODO: Implement delete() method.
        $id = $_GET['id'];
        ServicoDAO::delete($id);
        session_start();
        $_SESSION['message'] = "Servico excluída com sucesso!";
        header("Location: /servicos");
    }
}