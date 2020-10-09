<?php

//$texto = "Frederyk Antunnes de Sousa Alves";
//$texto = strtolower($texto);
//$meuarray = explode(" ", $texto);
//
//echo $meuarray[0].".".$meuarray[sizeof($meuarray)-1]."@ufrpe.br";


session_start();
require __DIR__ . "./../autoload.php";

use projeto\src\controller\AuthController;
use projeto\src\controller\ClienteController;
use projeto\src\controller\AnimalController;
use projeto\src\controller\ServicoController;
use projeto\src\controller\AgendaController;

$auth_controller = new AuthController();
$cliente_controller = new ClienteController();
$animal_controller = new AnimalController();
$servico_controller = new ServicoController();
$agenda_controller = new AgendaController();



$path = "";

if(isset($_SERVER["PATH_INFO"])){
    $path = $_SERVER["PATH_INFO"];
}

$method = $_SERVER["REQUEST_METHOD"];

switch ($path) {
    
    case "/auth":
        if($method == "POST"){
            $auth_controller->checkUserAndPasswordLogin();
        }else{
            header("Location: /");
        }
        break;
    case "/logout":
        if($method == "POST"){
            $auth_controller->logout();
        }else{
            header("Location: /");
        }
        break;
    default:
        if (isset($_SESSION['user'])) {
            switch ($path){
                case "/animais":
                    routes($animal_controller);
                    break;
                case "/clientes":
                    routes($cliente_controller);
                    break;
                case "/servicos":
                        routes($servico_controller);
                        break;
                case "/agendas":
                            routes($agenda_controller);
                            break;
                default:
                    $auth_controller->dashboad();
                    break;
            }

        } else {
            $auth_controller->login();
        }
}

function routes($controller){

    $query = "";
    $id = null;

    if(isset($_SERVER["QUERY_STRING"])){
        $query = explode("&", $_SERVER["QUERY_STRING"]);

        if(isset($query[1])){
            $dataarray = explode("=", $query[1]);
            $id = $dataarray[1];
        }
    }

    if($_SERVER['REQUEST_METHOD']=="GET"){
        if ($query !== ""){
            if($query[0]=="create"){
                $controller->create();
            }else if($query[0]=="view"){
                $controller->view($id);
            } else if($query[0]=="edit"){
                $controller->edit($id);
            }else{
                echo "Resource not found";
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
                $_SESSION['message'] = "Method not implemented";
                header("Location: /");
        }


    }
};