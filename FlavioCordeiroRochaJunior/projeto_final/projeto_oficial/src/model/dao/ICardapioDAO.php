<?php


namespace projeto_oficial\src\model\dao;


use projeto_oficial\src\model\vo\CardapioVO;

interface ICardapioDAO
{
    function findAll();
    function findById($id);
    function create(CardapioVO $cardapio);
    function update($id,CardapioVO $cardapio);
    function delete($id);


}