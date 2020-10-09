<?php

function getConnection(){
    $connection = new mysqli("127.0.0.1", "root", "", "vaweb");

    if(mysqli_connect_errno()){
        echo "Erro: ".mysqli_connect_error();
    }else{
        return $connection;
    }
}