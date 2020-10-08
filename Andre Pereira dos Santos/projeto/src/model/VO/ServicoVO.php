<?php
namespace projeto\src\model\VO;

class ServicoVO
{
    private $id, $descricao,$valor,$duracao;


     /**
     * TarefaVO constructor.
     * @param $id
     * @param $nome
   
     */
    public function __construct($id, $descricao, $valor,$duracao)
    {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->duracao = $duracao;
       
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
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $name
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $nascimento
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getDuracao()
    {
        return $this->duracao;
    }

    /**
     * @param mixed $date
     */
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;
    }

    

    }

    