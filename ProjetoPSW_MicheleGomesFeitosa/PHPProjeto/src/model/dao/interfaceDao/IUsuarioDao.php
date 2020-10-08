<?php

namespace PHPProjeto\src\model\dao\interfaceDao;
use ProjetoPHP\src\model\vo\UsuarioVO;

interface IUsuarioDao
{
    function  findAll();
    function findById($id);
    function create(UsuarioVO $usuarioVO);
    function update($id, UsuarioVO $usuarioVO);
    function delete($id);
    function verifyUserAndPassword($email, $password);
}