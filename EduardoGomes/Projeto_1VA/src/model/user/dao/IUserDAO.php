<?php

namespace Projeto_1VA\src\model\user\dao;
use Projeto_1VA\src\model\user\vo\User;

interface IUserDAO{

    function create(User $user);
    function update($id, User $user);
    function delete($id);
    function findById($id);
    function findByUser($user);
    function findAll();

    function verifyUserAndPassword($user, $password);

}