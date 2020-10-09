<?php


namespace ProjetoWeb\src\controller;
use ProjetoWeb\src\model\DAO\TrabalhoDAO;
use ProjetoWeb\src\model\VO\TrabalhoVO;

class TrabalhoController implements InterfacesController
{

    function index()
    {
        
        // TODO: Implement index() method.
        $trabalhos = TrabalhoDAO::trabalhoLogin();
        require __DIR__ . "/../view/trabalho/list.php";
    }
    function list()
    {
        // TODO: Implement index() method.
        $trabalhos = TrabalhoDAO::findAll();
        require __DIR__ . "/../view/trabalho/listtrabalhos.php";
    }

    function view()
    {
        // TODO: Implement view() method.
        $id = $_GET['id'];
        $trabalho = TrabalhoDAO::findById($id);
        require __DIR__ . "/../view/trabalho/view.php";
    }

    function create()
    {
        // TODO: Implement create() method.
        require __DIR__ . "/../view/trabalho/create.php";
    }

    function edit()
    {
        // TODO: Implement edit() method.
        $id = $_GET['id'];
        $trabalho = TrabalhoDAO::findById($id);
        require __DIR__ . "/../view/trabalho/edit.php";
    }

    function store()

    {
        
        // TODO: Implement store() method.
        $documento = "";
        $titulo = $_POST['titulo'];
        $descricao = $_POST['texto'];
        $autor = $_POST['autor'];
        $area = $_POST['area'];
        $ano = $_POST['ano'];
        $tipoDocumento = $_POST['tipoDocumento'];
        $user_id= $_SESSION['user_id'];

        if(isset($_FILES['documento'])){
        $documento = $_FILES['documento']['name'];
        }

        $trabalhoVO = new TrabalhoVO(null,$user_id, $titulo, $autor,$tipoDocumento,$area,$descricao,$ano,$documento);
        TrabalhoDAO::create($trabalhoVO);
        session_start();
        $_SESSION['message'] = "Trabalho criada com sucesso!";
        header("Location: /benvindo");
    }

    function update()
    {
        // TODO: Implement update() method.
        $id = $_GET['id'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $area = $_POST['area'];
        $ano = $_POST['ano'];
        $tipoDocumento = $_POST['tipoDocumento'];
        $descricao = $_POST['texto'];
        $trabalhoVO = new TrabalhoVO(null,null, $titulo, $autor,$tipoDocumento,$area,$descricao,$ano,null);
        TrabalhoDAO::update($id, $trabalhoVO);
        session_start();
        $_SESSION['message'] = "Trabalho atualizada com sucesso!";
        header("Location: /trabalhos");
    }

    function delete()
    {
        // TODO: Implement delete() method.
        $id = $_GET['id'];
        TrabalhoDAO::delete($id);
        session_start();
        $_SESSION['message'] = "Trabalho excluído com sucesso!";
        header("Location: /trabalhos");
    }

    
}


