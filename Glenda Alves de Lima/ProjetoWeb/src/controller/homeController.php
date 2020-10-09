<?php


namespace ProjetoWeb\src\controller;
use ProjetoWeb\src\model\DAO\cadastroLoginDAO;
use ProjetoWeb\src\model\VO\cadastroLoginVO;

class homeController 
{

    function index()
    {
       
        require __DIR__ . "/../view/home/home.php";
    }

    function create()
    {

        require __DIR__ . "/../view/login/login.php";
        
    }
    function view()
    {

        
        require __DIR__ . "/../view/registro/cadastro.php";
        
    }
    
}