<?php
namespace projeto\src\model\VO;

class ClienteVO
{
    private $id, $nome,$nascimento,$sexo,$telefone,$email,$senha;


     /**
     * TarefaVO constructor.
     * @param $id
     * @param $nome
   
     */
    public function __construct($id, $nome, $nascimento,$sexo,$telefone,$email,$senha)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->nascimento = $nascimento;
        $this->sexo = $sexo;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha;
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

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $tel
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
/**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
   
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


    }

    