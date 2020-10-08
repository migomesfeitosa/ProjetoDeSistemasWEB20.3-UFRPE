<?php

namespace VAWEB\src\controller;

use VAWEB\src\model\vo\Category;
use VAWEB\src\model\dao\CategoryDAO;

class CategoryController{
    public function index($id){
        $categoryDAO = new CategoryDAO();
        $polls = $categoryDAO->findAll($id);
        require __DIR__ ."./../view/category/index.php"; 
    }

    public function list(){
        require __DIR__."./../view/category/list.php";
    }
}