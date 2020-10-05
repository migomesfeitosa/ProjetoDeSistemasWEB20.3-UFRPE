<?php
require __DIR__ . "./../autoload.php";

use Projeto_1VA\src\controller\AuthController;

session_start();

$auth_controller = new AuthController();
$path = $_SERVER['REQUEST_URI'];
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

    case "/logout":
        if($method == "POST"){
            $auth_controller->logout();
        }
        else {
            header("Location: /");
        }
        break;
    
    default:
        if (isset($_SESSION['logged_user'])){
            
            switch ($path) {
                case "/study":
                    
                    break;

                case "/teacher":
                    $auth_controller->teacher();
                    break;    
                
                default:
                    $auth_controller->dashboard();
                    break;
            }

        }
        else {
            $auth_controller->login();
        }
        break;
}

?>