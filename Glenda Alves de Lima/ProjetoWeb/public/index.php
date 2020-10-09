<?php

//$texto = "Frederyk Antunnes de Sousa Alves";
//$texto = strtolower($texto);
//$meuarray = explode(" ", $texto);
//
//echo $meuarray[0].".".$meuarray[sizeof($meuarray)-1]."@ufrpe.br";


session_start();
require __DIR__ . "./../autoload.php";

use ProjetoWeb\src\controller\TrabalhoController;
use ProjetoWeb\src\controller\AuthController;
use ProjetoWeb\src\controller\TrabalhoContoller;
use ProjetoWeb\src\controller\cadastroLoginController;

$auth_controller = new AuthController();
$trabalho_controller = new TrabalhoController();
$cadastrologin = new cadastroLoginController();


$path = "";

if(isset($_SERVER["PATH_INFO"])){
    $path = $_SERVER["PATH_INFO"];
}

$method = $_SERVER["REQUEST_METHOD"];

switch ($path) {
    case "/home":
            require __DIR__ . "/../src/view/home/home.php";
        break;
    case "/benvindo":
            require __DIR__ . "/../src/view/benvindo/benvindo.php";
        break;
    case "/acao":
        if (!isset($_SESSION['user'])) {
        if($method == "POST"){
            
            require __DIR__ . "/../src/view/login/login.php";
            
        }else {
        require __DIR__ . "/../src/view/registro/cadastro.php";
        }  
    }else{
        header("Location: /");
    }
        break;

    case "/usuario":
            if (!isset($_SESSION['user'])) {
                if($method == "POST"){
                    routes($cadastrologin);
                }else {
                    header("Location: /");
                }
            } 
                break;
        
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
                case "/trabalhos":
                    routes($trabalho_controller);
                    break;
                default:
                    $auth_controller->dashboad();
                    break;
            }

        } else {
            $auth_controller->home();
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
                
            }else if($query[0]=="list"){
                $controller->list();  
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