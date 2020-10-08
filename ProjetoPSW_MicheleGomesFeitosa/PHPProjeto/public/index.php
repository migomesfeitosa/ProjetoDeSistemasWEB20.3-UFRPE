<?php

session_start();
require __DIR__ . "./../autoload.php";

use PHPProjeto\src\controller\AuthController;
use PHPProjeto\src\controller\UsuarioController;

$auth_controller = new AuthController();
$usuario_controller = new UsuarioController();

$path = "";

if (isset($_SERVER["PATH_INFO"])) {
    $path = $_SERVER["PATH_INFO"];
}

$method = $_SERVER["REQUEST_METHOD"];



function routes($controller)
{

    $query = "";
    $id = null;

    if (isset($_SERVER["QUERY_STRING"])) {
        $query = explode("&", $_SERVER["QUERY_STRING"]);

        if (isset($query[1])) {
            $dataarray = explode("=", $query[1]);
            $id = $dataarray[1];
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if ($query !== "") {
            if ($query[0] == "create") {
                $controller->create();
            } else if ($query[0] == "view") {
                $controller->view($id);
            } else if ($query[0] == "edit") {
                $controller->edit($id);
            } else {
                echo "Resource not found";
            }
        } else {
            $controller->index();
        }
    } else {
        $metodo = "POST";
        if ($_POST['_method']) {
            $metodo = $_POST['_method'];
        }

        switch ($metodo) {
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
}

;
