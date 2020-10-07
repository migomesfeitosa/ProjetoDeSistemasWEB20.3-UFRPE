<?php
namespace projeto_oficial\src\controller;

interface IController
{
    public function index();
    public function create();
    public function view($id);
    public function update($id);
    public function edit($id);
    public function delete($id);
    public function store();

}