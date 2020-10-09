<?php

function getConnection(){
    $connection = new mysqli("127.0.0.1", "root", "", "projetoweb");
    if (mysqli_connect_errno()){
        echo "Conexao Falhou" . mysqli_connect_error();
    }
    else {
        return $connection;
    }
}