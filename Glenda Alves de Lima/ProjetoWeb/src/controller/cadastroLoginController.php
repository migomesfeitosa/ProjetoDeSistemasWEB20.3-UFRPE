<?php


namespace ProjetoWeb\src\controller;
use ProjetoWeb\src\model\DAO\cadastrologinDAO;
use ProjetoWeb\src\model\DAO\UsuarioDAO;
use ProjetoWeb\src\model\VO\UsuarioVO;

class cadastroLoginController implements InterfacesController {

    function index()
    {
        
    }

    function view()
    {
    }

    function create()
    {
    }

    function edit()
    {
        
    }

    function store()
    {
        // TODO: Implement store() method.
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $senha = md5($senha);
        
        $usuarioVO = new UsuarioVO(null, $email, $nome,$senha);
        UsuarioDAO::create($usuarioVO);
        session_start();
        $_SESSION['message'] = "login criada com sucesso!";
        header("Location: /home");
    }

    function update()
    {
        // TODO: Implement update() method.
        $id = $_GET['id'];
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        
        $usuarioVO = new UsuarioVO(null, $email, $nome,$senha);
        UsuarioDAO::update($id, $usuarioVO);
        session_start();
        $_SESSION['message'] = "login atualizada com sucesso!";
        header("Location: /usuario");
    }
    function delete()
    {
        
    }

}