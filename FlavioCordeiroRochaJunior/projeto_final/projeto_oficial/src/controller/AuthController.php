<?php

namespace projeto_oficial\src\controller;
use projeto_oficial\src\model\dao\UsuarioDAO;

class AuthController
{
    public function login(){


        require "./../src/view/login.php";
       // header('location: ./../src/view/login.php');

    }
    public function dash(){
        require "./../src/view/principal.php";
        //header('location: ./../src/view/principal.php');
    }

    public function cadastrar(){
        require "./../src/view/cadastroUsuario.php";
    }
    public function dashFuncionario(){
        if($_SERVER['PHP_SELF'] == "/index"){
            require "./../src/view/principalFuncionario.php/cardapio?index";
        }else{
            header("location: /cardapio?index");
        }

    }

    public function validarLogin()
    {
        $login = $_POST['login'];
        $senha = $_POST['password'];
        if ($login!="adm" && $senha!="adm") {
            $usuarioDao = new UsuarioDAO();
            $retorno = $usuarioDao->verifyUser($login, $senha);
            if ($retorno != "") {
                $_SESSION['id'] = $retorno->getId();
                $_SESSION['user'] = $retorno->getLogin();
                $_SESSION['email'] = $retorno->getEmail();
                $_SESSION['tipo'] = $retorno->getTipo();


            }
            if ($_SESSION['tipo'] == "usuario") {
                header('location: /');
            } else {
                header('location: /cardapio?index');
            }

        }else{
            $_SESSION['user'] = "adm";
            $_SESSION['email'] = "Administrador";
            $_SESSION['tipo'] = "adm";
            header("location: /cardapio?index");

        }
    }


    public function logout(){
        unset($_SESSION['user']);
        unset($_SESSION['mensagem_cadastro']);
        unset($_SESSION['email']);
        unset($_SESSION['tipo'] );
        unset($_SESSION['id']);
        unset($_SESSION['id_pedido']);
        header('location: /');
    }
}