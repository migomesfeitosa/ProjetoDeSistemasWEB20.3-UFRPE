<?php
namespace ProjetoWeb\src\controller;

interface InterfacesController
{
    function index();
    function view();
    function create();
    function edit();

    function store();
    function update();
    function delete();

}