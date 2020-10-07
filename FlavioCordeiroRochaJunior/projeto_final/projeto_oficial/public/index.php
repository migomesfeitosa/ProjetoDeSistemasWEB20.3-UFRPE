<?php

session_start();
require __DIR__."./../autoload.php";

use projeto_oficial\src\controller\AuthController;
use projeto_oficial\src\controller\UsuarioController;
use projeto_oficial\src\controller\CardapioController;
use projeto_oficial\src\controller\PedidoController;
use projeto_oficial\src\controller\FuncionarioController;
use projeto_oficial\src\controller\PedidoUsuarioController;
use projeto_oficial\src\controller\CardapioPrincipalController;

$authController = new AuthController();
$usuarioController = new UsuarioController();
$funcionarioController = new FuncionarioController();
$cardapioController = new CardapioController();
$cardapioPrincipalController = new CardapioPrincipalController();
$pedidoController = new PedidoController();
$pedidoUsuarioController = new PedidoUsuarioController();



$path="";
if(isset($_SERVER['PATH_INFO'])){
    $path = $_SERVER['PATH_INFO'];
}

$method = $_SERVER['REQUEST_METHOD'];

switch ($path){

    case "/auth":
        if ($method == "POST"){
            $authController->validarLogin();
        }else{
            header('Location:/');
        }
       break;
    case "/logout":
        $authController->logout();
        break;
    case "/cadastro":
        $authController->cadastrar();
        break;
    case "/usuarioCadastro":
        $query="";
        $id = null;

        if(isset($_SERVER['QUERY_STRING'])){
            $query = explode("&",$_SERVER['QUERY_STRING']);
            if (isset($query[1])){
                $dataarray = explode("=",$query[1]);
                $id = $dataarray[1];
            }
        }
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($query !== "") {
                if ($query[0] == "create") {
                    $usuarioController->create();

                }
            }
        }else{
            $usuarioController->store();
        }
        break;

    default:
        if (isset($_SESSION['user'])){
            switch ($path){
                case "/usuario":

                    routers($usuarioController);

                    break;
                case "/funcionario":
                    routers($funcionarioController);
                    break;
                case "/cardapio":
                    routers($cardapioController);
                    break;
                case "/cardapioPrincipal":
                    $query="";
                    $id = null;

                    if(isset($_SERVER['QUERY_STRING'])){
                        $query = explode("&",$_SERVER['QUERY_STRING']);
                        if (isset($query[1])){
                            $dataarray = explode("=",$query[1]);
                            $id = $dataarray[1];
                        }
                    }
                    if($_SERVER['REQUEST_METHOD'] == 'GET') {
                        if ($query !== "") {
                            if ($query[0] == "create") {
                                $cardapioPrincipalController->create();

                            } else if ($query[0] == "view") {
                                $cardapioPrincipalController->view($id);
                            } else if ($query[0] == "edit") {
                                $cardapioPrincipalController->edit($id);
                            } else if ($query[0] == "index") {
                                $cardapioPrincipalController->index();
                            } else if($query[0] == "append") {
                                $cardapioPrincipalController->append($id);
                            }
                        }else{
                            $cardapioPrincipalController->index();
                        }
                    }else{
                        $metodo = "POST";
                        if ($_POST['_method']){
                            $metodo = $_POST['_method'];
                        }


                        switch ($metodo){
                            case "POST":

                                $cardapioPrincipalController->store();

                                break;
                            case "PUT":
                                $cardapioPrincipalController->update($id);

                                break;
                            case "DELETE":
                                $cardapioPrincipalController->delete($id);
                                break;
                            default:
                                header("location: /");
                        }
                    }
                    break;
                case "/pedido":
                    routers($pedidoController);
                    break;
                case "/pedidoUsuario":
                    routers($pedidoUsuarioController);
                    break;
                default:
                    if ($_SESSION['tipo'] == "funcionario" || $_SESSION['tipo'] == "adm"){
                        $authController->dashFuncionario();
                    }else if ($_SESSION['tipo'] == "usuario"){
                        $authController->dash();
                    }



            }
        }else{

            $authController->login();


        }
}
function routers($controller){
    $query="";
    $id = null;

    if(isset($_SERVER['QUERY_STRING'])){
        $query = explode("&",$_SERVER['QUERY_STRING']);
        if (isset($query[1])){
            $dataarray = explode("=",$query[1]);
            $id = $dataarray[1];
        }
    }
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        if ($query !== "") {
            if ($query[0] == "create") {
                $controller->create();

            } else if ($query[0] == "view") {
                $controller->view($id);
            } else if ($query[0] == "edit") {
                $controller->edit($id);
            } else if ($query[0] == "index") {
                $controller->index();
            }
        }else{
            $controller->index();
        }
    }else{
        $metodo = "POST";
        if ($_POST['_method']){
            $metodo = $_POST['_method'];
        }


        switch ($metodo){
            case "POST":

                $controller->store();

                break;
            case "PUT":
                $controller->update($id);

                break;
            case "DELETE":
                $controller->delete($id);
                break;
            default:
                header("location: /");
        }
    }
}