<?php

function getConnection(){
    $connection = new mysqli("127.0.0.1", "root", "", "web20.3");

    if(mysqli_connect_errno()){
        echo "Conexão falhou: " .mysqli_connect_error();
        exit(0);
    }else{
        return $connection;
    }
}