<?php


namespace ProjetoWeb\src\model\DAO;


interface InterfacesDAO
{
    static function findAll();
    static function findById($id);
    static function create($dado);
    static function update($id, $dado);
    static function delete($id);

}