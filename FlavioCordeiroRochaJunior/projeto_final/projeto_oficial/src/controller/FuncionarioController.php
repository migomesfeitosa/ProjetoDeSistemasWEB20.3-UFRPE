<?php


namespace projeto_oficial\src\controller;


use projeto_oficial\src\model\dao\FuncionarioDAO;
use projeto_oficial\src\model\dao\UsuarioDAO;
use projeto_oficial\src\model\vo\UsuarioVO;


class FuncionarioController implements IController
{

    public function index()
    {
        $funcionarioDao = new FuncionarioDAO();
        $retorno = $funcionarioDao->findAll();
        $tipo = "funcionario";

        require "./../src/view/principalFuncionario.php";

    }

    public function create()
    {
        require "./../src/view/cadastroFuncionario.php";
        // TODO: Implement create() method.
    }

    public function view($id)
    {
        $funcionarioDao = new FuncionarioDAO();
        $retorno = $funcionarioDao->findById($id);
        require "./../src/view/principalDetalhesFuncionario.php";
        // TODO: Implement view() method.
    }

    public function update($id)
    {
        $funcionarioDao = new FuncionarioDAO();
        $retorno = $funcionarioDao->findById($id);
        if ($retorno->getStatus() == "ativo"){
            $retorno->setStatus("desativado");
        }else{
            $retorno->setStatus("ativo");
        }
        $funcionarioDao->update($id,$retorno);

        header("location: /funcionario?index");
        // TODO: Implement update() method.
    }

    public function edit($id)
    {
        $this->update($id);
        // TODO: Implement edit() method.
    }

    public function delete($id)
    {
        $funcionarioDao = new FuncionarioDAO();
        $funcionarioDao->delete($id);
        header("location:/funcionario?index");
        // TODO: Implement delete() method.
    }

    public function store()
    {
        $funcionarioDao = new FuncionarioDAO();
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $login = $_POST['login'];
        $senha = $_POST['senha1'];
        $senha2 = $_POST['senha2'];
        $tipo = $_POST['tipo'];
        $status = "ativo";
        $result = $funcionarioDao->verificarLogin($login);
        if($senha == $senha2 && $result==0) {
            $usuarioVo = new UsuarioVO(null, $nome, $sobrenome, $email, $cidade, $bairro, $rua, $numero, $login, $senha, $tipo);
           $usuarioVo->setStatus($status);
            $funcionarioDao->create($usuarioVo);
            if(isset($_SESSION['mensagem'])){
                unset($_SESSION['mensagem']);
            }
            header("location: /funcionario?index");
        }else{
            if($result == 1){
                $_SESSION['mensagem'] = "Erro, esse usuário já existe";
            }elseif ($senha != $senha2){
                $_SESSION['mensagem'] = "Erro, as senhas são diferentes";
            }

            header("location:/funcionario?create");

        }
        // TODO: Implement store() method.
    }
}