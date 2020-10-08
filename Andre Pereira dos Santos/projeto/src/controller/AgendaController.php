<?php


namespace projeto\src\controller;
use projeto\src\model\DAO\AgendaDAO;
use projeto\src\model\VO\AgendaVO;
use projeto\src\model\DAO\AnimalDAO;
use projeto\src\model\VO\AnimalVO;
use projeto\src\model\DAO\ServicoDAO;
use projeto\src\model\VO\ServicoVO;

class AgendaController 
{

    function index()
    {
        // TODO: Implement index() method.
        $agendas = AgendaDAO::findAll();

      
        require __DIR__ . "/../view/agenda/list.php";


    }

    function view()
    {
        // TODO: Implement view() method.
        $id = $_GET['id'];
        $agenda = AgendaDAO::findById($id);
        require __DIR__ . "/../view/agenda/view.php";
    }

    function create()
    {
        // TODO: Implement create() method.

        $animais = AnimalDAO::findAll();
      
        require __DIR__ . "/../view/agenda/create.php";
    }

    function edit()
    {
        // TODO: Implement edit() method.
        $id = $_GET['id'];
        $agenda = AgendaDAO::findById($id);
        
        require __DIR__ . "/../view/agenda/edit.php";
    }

    function store()
    {
        // TODO: Implement store() method.
        $data= $_POST['data'];
        $horario = $_POST['horario'];
        $servico = $_POST['servico'];
        $animal = $_POST['animal'];
        $anotacao= $_POST['anotacao'];
       

      
        $agendaVO = new AgendaVO(null, $data, $horario,$servico,$animal,$anotacao);
        AgendaDAO::create($agendaVO);
        session_start();
        $_SESSION['message'] = "Agenda:  criada com sucesso!";
        header("Location: /agendas");
    }

    function update()
    {
        // TODO: Implement update() method.
        $id = $_GET['id'];
        $data= $_POST['data'];
        $horario = $_POST['horario'];
        $servico = $_POST['servico'];
        $anotacao= $_POST['anotacao'];

        $agedaVO = new AgendaVO(null, $data, $horario,$servico,null,$anotacao);
        AgendaDAO::update($id, $agendaVO);
        session_start();
        $_SESSION['message'] = "Agenda atualizada com sucesso!";
        header("Location: /agendas");
    }

    function delete()
    {
        // TODO: Implement delete() method.
        $id = $_GET['id'];
        AgendaDAO::delete($id);
        session_start();
        $_SESSION['message'] = "Agenda excluída com sucesso!";
        header("Location: /agendas");
    }
}