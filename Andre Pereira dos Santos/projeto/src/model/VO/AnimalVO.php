<?php
namespace projeto\src\model\VO;

class AnimalVO
{
    private $id, $nome,$especie,$raca,$porte,$nascimento,$castrado,$sexo,$imagem,$Cliente;


     /**
     * TarefaVO constructor.
     * @param $id
     * @param $nome
     * @param $especie
     * @param $raca
     * @param $porte
     * @param $nascimento
     * @param $castrado
     * @param $sexo
     */
    public function __construct($id,$Cliente, $nome, $especie,$raca,$porte,$nascimento,$castrado,$sexo,$imagem)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->especie = $especie;
        $this->raca = $raca;
        $this->porte = $porte;
        $this->nascimento = $nascimento;
        $this->castrado = $castrado;
        $this->sexo = $sexo;
        $this->imagem = $imagem;
        $this->Cliente = $Cliente;
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
     * @param mixed $name
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * @param mixed $especie
     */
    public function setEspecie($especie)
    {
        $this->especie = $especie;
    }

    /**
     * @return mixed
     */
    public function getRaca()
    {
        return $this->raca;
    }

    /**
     * @param mixed $date
     */
    public function setRaca($raca)
    {
        $this->raca = $raca;
    }



    /**
     * @return mixed
     */
    public function getPorte()
    {
        return $this->porte;
    }

    /**
     * @param mixed $porte
     */
    public function setPorte($porte)
    {
        $this->porte = $porte;
    }

    /**
     * @return mixed
     */
    public function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * @param mixed $nascimento
     */
    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }

    /**
     * @return mixed
     */
    public function getCastrado()
    {
        return $this->castrado;
    }

    /**
     * @param mixed $status
     */
    public function setCastrado($castrado)
    {
        $this->castrado = $castrado;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $date
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * @param mixed $date
     */
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }

    public function getCliente()
    {
        return $this->Cliente;
    }

    /**
     * @param mixed $date
     */
    public function setCliente($Cliente)
    {
        $this->Cliente = $Cliente;
    }


    }

    