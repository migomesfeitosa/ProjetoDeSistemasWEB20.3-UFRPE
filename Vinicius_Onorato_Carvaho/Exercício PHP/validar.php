<?php
session_start();

$name = $_POST['usuario'];
$senha = md5($_POST['senha']);
$senhavalidar = "123";
$senhavalidar = md5($senhavalidar);
if($name =="fred" && $senha == $senhavalidar){
    $_SESSION['usuario'] = $name;
    header("Location: index.php");
}else{
    $_SESSION['message'] = "Usuário/Senha inválidos";
    header("Location: index.php");
}
