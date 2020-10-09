<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')){
        header("Location: cadastrado.php");
    } else{
        header("Location: cadastrar.php");
    }
?>