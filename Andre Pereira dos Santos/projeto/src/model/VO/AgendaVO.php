<?php
namespace projeto\src\model\VO;

class AgendaVO
{
    private $id, $data,$horario,$Servico,$Animal,$anotacao;


    
    public function __construct($id, $data,$horario,$Servico,$Animal,$anotacao)
    {
        $this->id = $id;
        $this->data = $data;
        $this->horario = $horario;
        $this->Servico = $Servico;
        $this->Animal = $Animal;
        $this->anotacao = $anotacao;
      
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
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $name
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * @param mixed $especie
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;
    }

    /**
     * @return mixed
     */
    public function getAnimal()
    {
        return $this->Animal;
    }

    /**
     * @param mixed $date
     */
    public function setAnimal($Animal)
    {
        $this->Animal = $Animal;
    }



    /**
     * @return mixed
     */
    public function getServico()
    {
        return $this->Servico;
    }

    /**
     * @param mixed $porte
     */
    public function setServico($Servico)
    {
        $this->Servico = $Servico;
    }

    /**
     * @return mixed
     */
    public function getAnotacao()
    {
        return $this->anotacao;
    }

    /**
     * @param mixed $nascimento
     */
    public function setAnotacao($nascimento)
    {
        $this->anotacao = $anotacao;
    }




    }

    