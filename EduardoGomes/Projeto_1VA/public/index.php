<?php
require __DIR__ . "./../autoload.php";

use Projeto_1VA\src\controller\AuthController;

session_start();

$auth_controller = new AuthController();

$path= "";
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
        $auth_controller->login();
        break;


    case "/register":
        $auth_controller->register();
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
    

    default:
        if (isset($_SESSION['logged_user'])){
            
            switch ($path) {
                case "/home":
                    $auth_controller->dashboard();
                    break;

                case "/study":
                    
                    break;

                case "/teacher":
                    $auth_controller->teacher();
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