<?php
require __DIR__ . "./../autoload.php";

use Projeto_1VA\src\controller\AuthController;
use Projeto_1VA\src\controller\RoutesController;

session_start();

$auth_controller = new AuthController();
$routes_controller = new RoutesController();

$path= "";
$query="";

if(isset($_SERVER['QUERY_STRING'])){
    $query = explode("&",$_SERVER['QUERY_STRING']);
}

if (isset($_SERVER["PATH_INFO"])){
    $path = $_SERVER["PATH_INFO"];
}
$method = $_SERVER['REQUEST_METHOD'];

switch ($path) {
    
    case "/auth":
        if($method == "POST"){
            $auth_controller->checkLogin();
        }
        else {
            header("Location: /");
        }
        break;
    

    case "/login":
        $routes_controller->login();
        break;


    case "/register":
        $routes_controller->register();
        break;

    case "/logout":
        if($method == "POST"){
            $auth_controller->logout();
        }
        else {
            header("Location: /");
        }
        break;


    case "/create-user":
        if($method == "POST"){
            $auth_controller->checkCreateUser();
        }
        else {
            header("Location: /register");
        }
        break;

    case "/create-teacher":
        if($method == "POST"){
            $auth_controller->checkCreateTeacher();
        }
        else {
            header("Location: /teacher");
        }
        break;
    

    default:
        if (isset($_SESSION['logged_user'])){
            
            switch ($path) {
                case "/home":
                    $routes_controller->dashboard();
                    break;

                case "/study":
                    $routes_controller->study();
                    break;

                case "/teacher":
                    $routes_controller->teacher();
                    break;

                case "/mydisciplines":

                    if(isset($_SERVER['QUERY_STRING'])){
                        if($method=="GET"){
                            switch ($query[0]) {
                                case "edit":
                                    $dataarray = explode("=", $query[1]);
                                    $id = $dataarray[1];
                                    $routes_controller->mydisciplinesEdit($id);
                                    break;
                                
                                case "delete":
                                    if(isset($query[1])){
                                        $dataarray = explode("=", $query[1]);
                                        $id = $dataarray[1];
                                        $auth_controller->checkDeleteTeacher($id);
                                    }
                                    break;

                                default:
                                    header("Location: /");
                                    break;
                            }
                        }
                        if ($method == "POST"){
                            switch ($query[0]) {
                                case "update":
                                    if(isset($query[1])){
                                        $dataarray = explode("=", $query[1]);
                                        $id = $dataarray[1];
                                        $auth_controller->checkUpdateTeacher($id);
                                    }
                                    break;
                                
                                default:
                                    header("Location: /");
                                    break;
                            }
                        }
                    }
                    else{
                        $routes_controller->mydisciplines();
                    }
                    break;
                
                default:
                    header("Location: /home");
                    break;
            }

        }
        else {
            header("Location: /login");
        }
        break;
}