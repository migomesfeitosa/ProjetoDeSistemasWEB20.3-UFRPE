<?php


namespace projeto\src\controller;
use projeto\src\model\DAO\AnimalDAO;
use projeto\src\model\VO\AnimalVO;
use projeto\src\model\DAO\ClienteDAO;
use projeto\src\model\VO\ClienteVO;

class AnimalController implements InterfacesController
{

    function index()
    {
        // TODO: Implement index() method.
        $animais = AnimalDAO::findAll();
        require __DIR__ . "/../view/animal/list.php";
    }

    function view()
    {
        // TODO: Implement view() method.
        $id = $_GET['id'];
        $animal = AnimalDAO::findById($id);
        require __DIR__ . "/../view/animal/view.php";
    }

    function create()
    {
        $clientes = ClienteDAO::findAll();
        // TODO: Implement create() method.
        require __DIR__ . "/../view/animal/create.php";
    }

    function edit()
    {
        // TODO: Implement edit() method.
        $id = $_GET['id'];
        $animal = AnimalDAO::findById($id);
        require __DIR__ . "/../view/animal/edit.php";
    }

    function store()
    {
        // TODO: Implement store() method.
        $cliente = $_POST['cliente'];
        $nome = $_POST['nome'];
        $especie = $_POST['especie'];
        $raca = $_POST['raca'];
        $porte = $_POST['porte'];
        $nascimento = $_POST['nascimento'];
        $castrado = $_POST['castrado'];
        $sexo = $_POST['sexo'];
        $imagem ="null";

        if(isset($_FILES['imagem'])){
            $imagem = $_FILES['imagem']['name'];
        }
      
        $animalVO = new AnimalVO(null,$cliente, $nome, $especie,$raca,$porte,$nascimento,$castrado,$sexo,$imagem);
        AnimalDAO::create($animalVO);
        session_start();
        $_SESSION['message'] = "Animal: $nome criada com sucesso!";
        header("Location: /animais");
    }

    function update()
    {
        // TODO: Implement update() method.
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $raca = $_POST['raca'];
        $porte = $_POST['porte'];
        $nascimento = $_POST['nascimento'];
        $castrado = $_POST['castrado'];

        $animalVO = new AnimalVO(null,null, $nome, null,$raca,$porte,$nascimento,$castrado,null,null);
        AnimalDAO::update($id, $animalVO);
        session_start();
        $_SESSION['message'] = "Animal: $nome atualizada com sucesso!";
        header("Location: /animais");
    }

    function delete()
    {
        // TODO: Implement delete() method.
        $id = $_GET['id'];
        AnimalDAO::delete($id);
        session_start();
        $_SESSION['message'] = "Animal excluída com sucesso!";
        header("Location: /animais");
    }
}