<?php

interface IAlunoDAO{
    function findAll();
    function findById();
    function create();
    function update();
    function delete();
}