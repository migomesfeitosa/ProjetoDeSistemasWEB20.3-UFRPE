<?php

namespace projeto_oficial\src\controller;


use projeto_oficial\src\model\dao\UsuarioDAO;
use projeto_oficial\src\model\vo\UsuarioVO;


class UsuarioController implements IController
{


    /**
     * UsuarioController constructor.
     */


    public function index()
    {
        $usuarioDao = new UsuarioDAO();
        $retorno = $usuarioDao->findAll();
        $tipo = "usuario";

        require "./../src/view/principalFuncionario.php";
        // TODO: Implement index() method.

    }

    public function create()
    {
        // TODO: Implement create() method.

        require "./../src/view/cadastroUsuario.php";
    }

    public function view($id)
    {
        // TODO: Implement view() method.
        $usuarioDao = new UsuarioDAO();
        $retorno = $usuarioDao->findById($id);
        require "./../src/view/principalDetalhesUsuario.php";
    }

    public function update($id)
    {
        $usuarioDao = new UsuarioDAO();

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $login = $_POST['login'];
        $senha = $_POST['senha1'];
        $senha2 = $_POST['senha2'];
        $tipo = $_POST['tipo'];
        $result = $usuarioDao->verificarLogin($login);
        if ($senha == $senha2 && ($result==0 || $login == $_SESSION['user'])) {
            $usuarioVo = new UsuarioVO($id, $nome, $sobrenome, $email, $cidade, $bairro, $rua, $numero, $login, $senha, $tipo);
            $usuarioDao->update($id, $usuarioVo);
            if (isset($_SESSION['mensagem'])){
                unset($_SESSION['mensagem']);
            }
            if ($_SESSION['tipo'] == "usuario"){
                header("location: /");
            }else if ($_SESSION['tipo'] == "funcionario") {
                header("location: /usuario?index");
            }
        }else{
            if($result==1){
                $_SESSION['mensagem'] = "Erro, esse usuário já existe!";
            }elseif ($senha != $senha2){
                $_SESSION['mensagem'] = "Erro, as senhas são diferentes!";
            }

            header("location: /usuario?edit&id={$id}");
        }

        // TODO: Implement update() method.
    }


    public function edit($id)
    {
        $usuarioDao = new UsuarioDAO();
        $retorno = $usuarioDao->findById($id);

        if ($retorno!=""){
            require "./../src/view/editarFuncionario.php";
        }
        // TODO: Implement edit() method.



    }

    public function delete($id)
    {
        $usuarioDao = new UsuarioDAO();
        $usuarioVo = $usuarioDao->findById($id);
        $status="";
        if ($usuarioVo->getStatus()=="ativo"){
            $status = "desativado";
        }else{
            $status = "ativo";
        }
        $usuarioDao->updateState($id,$status);
        header("location:/usuario?index");
        // TODO: Implement delete() method.
    }

    public function store()
    {
        $usuarioDao = new UsuarioDAO();
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $login = $_POST['login'];
        $senha = $_POST['senha1'];
        $senha2 = $_POST['senha2'];
        $tipo = $_POST['tipo'];
        $result = $usuarioDao->verificarLogin($login);
        if($senha == $senha2 && $result == 0) {
            $usuarioVo = new UsuarioVO(null, $nome, $sobrenome, $email, $cidade, $bairro, $rua, $numero, $login, $senha, $tipo);

            $usuarioDao->create($usuarioVo);
            if(isset($_SESSION['mensagem'])){
                unset($_SESSION['mensagem']);
            }
            header("location: /");
        }else{
            if($result == 1){
                $_SESSION['mensagem'] = "Erro, esse usuário já existe";
            }elseif ($senha != $senha2){
                $_SESSION['mensagem'] = "Erro, as senhas são diferentes";
            }

            header("location:/cadastro?");

        }
    }
}