<?php
namespace ProjetoWeb\src\model\VO;

class TrabalhoVO {

    private $id, $user_id, $titulo,$autor,$tipoDocumento,$area,$descricao,$ano,$documento;



    public function __construct($id, $user_id, $titulo, $autor,$tipoDocumento,$area,$descricao,$ano,$documento)
    {

        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->tipoDocumento = $tipoDocumento;
        $this->area = $area;
        $this->descricao = $descricao;
        $this->ano = $ano;
        $this->documento = $documento;
        $this->user_id = $user_id;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;
    }
    public function getArea()
    {
        return $this->area;
    }
    public function setArea($area)
    {
        $this->area = $area;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function getAno()
    {
        return $this->ano;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
    public function getDocumento()
    {
        return $this->documento;
    }
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

  /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }








}