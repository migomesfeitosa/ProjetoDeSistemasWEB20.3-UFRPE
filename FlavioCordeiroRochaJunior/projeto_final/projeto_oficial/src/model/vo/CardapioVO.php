<?php


namespace projeto_oficial\src\model\vo;


class CardapioVO
{
    private $id;
    private $nome;
    private $preco;
    private $ingredientes;
    private $tipo;

    /**
     * CardapioVO constructor.
     * @param $id
     * @param $nome
     * @param $preco
     * @param $ingredientes
     * @param $tipo
     */
    public function __construct($id, $nome, $preco, $ingredientes, $tipo)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->ingredientes = $ingredientes;
        $this->tipo = $tipo;
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

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
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
    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    /**
     * @param mixed $ingredientes
     */
    public function setIngredientes($ingredientes)
    {
        $this->ingredientes = $ingredientes;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */




}