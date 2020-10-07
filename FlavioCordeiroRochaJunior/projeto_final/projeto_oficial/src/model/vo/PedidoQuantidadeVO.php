<?php


namespace projeto_oficial\src\model\vo;


class PedidoQuantidadeVO
{
    private $id;
    private $nome;
    private $quantidade;
    private $preco;

    /**
     * PedidoQuantidadeVO constructor.
     * @param $nome
     * @param $quantidade
     * @param $preco
     */
    public function __construct($nome, $quantidade, $preco)
    {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $cardapio
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



}