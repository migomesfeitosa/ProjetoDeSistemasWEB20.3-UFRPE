<?php

function getConnection(){
    $connection = new mysqli("localhost", "root", "", "pizzaria");

    if(mysqli_connect_errno()){
        echo "Conxão falhou: ".mysqli_connect_error();
    }else{
        return $connection;
    }
}