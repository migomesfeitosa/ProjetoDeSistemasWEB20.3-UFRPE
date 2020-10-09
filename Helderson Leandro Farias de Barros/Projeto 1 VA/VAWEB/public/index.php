<?php

session_start();

require __DIR__ . "./../autoload.php";

use VAWEB\src\controller\AuthController;
use VAWEB\src\controller\EnqueteController;
use VAWEB\src\controller\UserController;
use VAWEB\src\controller\VoteController;
use VAWEB\src\controller\CategoryController;
use VAWEB\src\controller\CategoryPreferenceController;

$auto_controller = new AuthController();
$enquete_controller = new EnqueteController();
$user_controller = new UserController();
$vote_controller = new VoteController();
$category_controller = new CategoryController();
$categoryPreference_controller = new CategoryPreferenceController();

$uri = $_SERVER["REQUEST_URI"];

switch($uri){
    case "/login":
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            if (isset($_SESSION["user_id"])){
                $enquete_controller->index();
            } else{
                $auto_controller->login();
            }
        } else{
            $auto_controller->checkUserAndPasswordLogin();
        }
        break;
    case "/register":
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            if (isset($_SESSION["user_id"])){
                $enquete_controller->index();
            } else{
                $user_controller->create();
            }
        } else{
            $user_controller->store();
        }
        break;

    case "/logout":
        if (isset($_SESSION["user_id"])){
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                if (isset($_SESSION["user_id"])){
                    $auto_controller->logout();
                }
            }
        } else{
            $auto_controller->login();
        }
        break;

    case "/create":
        if (isset($_SESSION["user_id"])){
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $enquete_controller->store();
            } else{
                $enquete_controller->create();           
            }
        } else{
            $auto_controller->login();
        }
        break;

    case "/edit_profile":
        if (isset($_SESSION["user_id"])){
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $user_controller->update();
            } else{
                $user_controller->edit();           
            }
        } else{
            $auto_controller->login();
        }
            break;

    case "/edit_preference":
        if (isset($_SESSION["user_id"])){
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $categoryPreference_controller->updateAndCreate();
            } else{
                $categoryPreference_controller->edit();
            }
        } else{
            $auto_controller->login();
        }

        break;

    case "/":
        if (isset($_SESSION["user_id"])){
            $enquete_controller->index();
        } else{
            $auto_controller->login();
        }
    break;

    case "/new":
        if (isset($_SESSION["user_id"])){
            $enquete_controller->new_found();
        } else{
            $auto_controller->login();
        }
        break;

    case "/category":
        if (isset($_SESSION["user_id"])){
            $category_controller->list();
        } else{
            $auto_controller->login();
        }
        break;

    default:
        if (isset($_SESSION["user_id"])){
            if ($_SERVER["PATH_INFO"] == "/vote") {
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $query_str = $_SERVER["QUERY_STRING"];
                    $parameters = explode("&", $query_str);
                    $parameterPoll = explode("=", $parameters[0]);
                    $parametersOption = explode("=", $parameters[1]);

                    if ($parameterPoll[0] == "poll_id"){
                        $poll_id = $parameterPoll[1];
                    }

                    if ($parametersOption[0] == "option_id"){
                        $option_id = $parametersOption[1];
                    }

                    if ($poll_id && $option_id){
                        $vote_controller->store($poll_id, $option_id);
                    }               
                }
            }else{
                $path = explode("/", $_SERVER["PATH_INFO"]);
                if ($path[1] == "category"){
                    $category_controller->index($path[2]);
                } else{
                    echo "<h1> Página não encontrada </h1>";
                }
            }
        } else{
            $auto_controller->login();
        }
}