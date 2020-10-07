<?php

namespace projeto_oficial\src\model\dao;



use projeto_oficial\src\model\vo\UsuarioVO;

interface IUsuarioDAO
{
    function findAll();
    function findById($id);
    function create(UsuarioVO $usuario);
    function update($id,UsuarioVO $usuario);
    function delete($id);
    function verifyUser($login,$senha);
}