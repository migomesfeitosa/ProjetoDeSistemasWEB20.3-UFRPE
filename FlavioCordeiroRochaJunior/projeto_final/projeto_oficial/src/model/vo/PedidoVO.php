<?php


namespace projeto_oficial\src\model\vo;


class PedidoVO
{
    private $id;
    private $itens = [];
    private $usuario;
    private $total;
    private $status;
    private $data_criacao;

    /**
     * PedidoVO constructor.
     * @param $id
     * @param $usuario
     */
    public function __construct($id, $usuario,$total)
    {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->total = $total;
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
     * @return array
     */
    public function getItens()
    {
        return $this->itens;
    }

    /**
     * @param array $itens
     */
    public function setItens($itens)
    {
        $this->itens = $itens;
    }/**
 * @return mixed
 */
public function getUsuario()
{
    return $this->usuario;
}/**
 * @param mixed $usuario
 */
public function setUsuario($usuario)
{
    $this->usuario = $usuario;
}

    /**
     * @return mixed
     */


    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getDataCriacao()
    {
        return $this->data_criacao;
    }

    /**
     * @param mixed $data_criacao
     */
    public function setDataCriacao($data_criacao)
    {
        $this->data_criacao = $data_criacao;
    }






}