<?php

namespace ProjetoPHP\src\controller;

interface IController
{
    function index();
    function view($id);
    function create();
    function edit($id);
    function store();
    function update($id);
    function delete($id);
}