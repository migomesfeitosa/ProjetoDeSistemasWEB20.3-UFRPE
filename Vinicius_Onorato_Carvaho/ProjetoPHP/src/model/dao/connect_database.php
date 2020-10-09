<?php

function getConnection(){
    $connection = new mysqli("127.0.0.1", "root", "", "cadastrophp");

    if(mysqli_connect_errno()){
        echo "Conxão falhou: ".mysqli_connect_error();
    }else{
        return $connection;
    }
}