<?php


namespace projeto_oficial\src\controller;


use projeto_oficial\src\model\dao\CardapioDAO;
use projeto_oficial\src\model\vo\CardapioVO;

class CardapioController implements IController
{


    /**
     * CardapioController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        $cardapioDao = new CardapioDAO();
        $retorno = $cardapioDao->findAll();
        $tipo="cardapio";
        require "./../src/view/principalFuncionario.php";

    }

    public function create()
    {
        // TODO: Implement create() method.
        require "./../src/view/cadastrarCardapio.php";
    }

    public function view($id)
    {
        $cardapioDao = new CardapioDAO();
        $cardapioDao->findById($id);
        $retorno =$cardapioDao->findById($id);
        require "./../src/view/principalDetalhesCardapio.php";
        // TODO: Implement view() method.
    }

    public function update($id)
    {
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $tipo = $_POST['tipo'];
        $ingredientes = $_POST['ingredientes'];
        $cardapioDao = new CardapioDAO();
        $cardapioVo = new CardapioVO($id,$nome,$preco,$ingredientes,$tipo);
        $cardapioDao->update($id,$cardapioVo);

        header("location: /cardapio?index");
        // TODO: Implement update() method.
    }

    public function edit($id)
    {
        $cardapioDao = new CardapioDAO();
        $retorno = $cardapioDao->findById($id);

        if ($retorno != null){
            require "./../src/view/editarCardapio.php";
        }


    }

    public function delete($id)
    {
        $cardapioDao = new CardapioDAO();
        $cardapioDao->delete($id);
        header("location: /cardapio?index");
    }



    public function store()
    {
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $tipo = $_POST['tipo'];
        $ingredientes = $_POST['ingredientes'];

        $cardapioDao = new CardapioDAO();
        $cardapioDao->create(new CardapioVO(null,$nome,$preco,$ingredientes,$tipo));
        header("location: /cardapio?index");
        // TODO: Implement store() method.
    }
}