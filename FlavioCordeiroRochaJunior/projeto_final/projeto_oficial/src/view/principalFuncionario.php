<?php
if($_SESSION['tipo'] =="usuario" ){
    header("location:/");
}

?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard funcionario</title>
    <script type="text/javascript" src="./script/jquery.js"></script>
    <link rel="stylesheet" href="./css/style_principal_funcionario.css">
</head>
<body>
<header>
    <div class="menu">
        <div class="opcoes">
            <nav>

                    <button class="botao_menu" type="submit" id="btnCardapio">Cardápio</button>

                    <button class="botao_menu"  id="btnPedido">Pedido</button>

                    <button type="submit" class="botao_menu"  id="btnSobre">Usuário</button>

                    <?php if($_SESSION['user'] == "adm"){
                        echo '<button type="submit" class="botao_menu"  id="btnFuncionario">Funcionario</button>';
                    }?>



            </nav>
        </div>

        <div class="container_usuario">

            <div class="dados_usuario" id="dados_usuario">
                <label for=""><?php echo $_SESSION['email'];?></label>
                <label for=""><?php echo $_SESSION['user'];?></label>
            </div>

        </div>
        <div class="drop-menu" id="drop-menu">

                <?php
                if ($_SESSION['user']!="adm") {
                    $id_s = $_SESSION['id'];
                    echo "<a href='/usuario?edit&id={$id_s}'>";
                    echo "<button class='itens-drop-menu' id='btnEditar' name='editar'>Editar dados</button><br>";
                    echo "</a>";
                } ?>






            <form action="/logout" method="get">
                <button type="submit" class="itens-drop-menu" id="btnSair"  name="sair">Sair</button>
            </form>

        </div>

    </div>
</header>

<div class="fundo">
    <div class="sub-fundo">
        <div class="container-cardapio">
            <table class="tabela">







                <tbody>
                <?php
                    if($tipo == "cardapio"){
                        echo '<thead>';
                        echo '<tr>';
                        echo '<td class="titulo-tabela">Nome</td>';
                        echo '<td class="titulo-tabela">Preço</td>';
                        echo '<td class="titulo-tabela">Tipo</td>';
                        echo '</tr>';
                        echo '</thead>';
                    foreach ($retorno as $dado){ ?>

                        <td class="linhas-tabela"><?php echo $dado->getNome() ?></td>
                        <td class="linhas-tabela"><?php echo $dado->getPreco() ?></td>

                        <td class="linhas-tabela"><?php echo $dado->getTipo() ?></td>
                        <td>
                            <a href="/cardapio?view&id=<?php echo $dado->getId() ?>">
                                <button type="submit" class="botao-detalhe">Detalhes</button>
                            </a>

                        <a href="/cardapio?edit&id=<?php echo $dado->getId() ?>">
                            <button type="submit" class="botao-editar">Editar</button></a>
                    <form action="/cardapio?delete&id=<?php echo $dado->getId() ?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit"class="botao-excluir">Excluir</button>
                    </form>
                        </td>

                </tr>
                    <?php } }?>

                <?php
                if($tipo == "usuario"){
                    echo '<thead>';
                    echo '<tr>';
                    echo '<td class="titulo-tabela">Nome</td>';
                    echo '<td class="titulo-tabela">Sobrenome</td>';
                    echo '<td class="titulo-tabela">Email</td>';
                    echo '<td class="titulo-tabela">Login</td>';
                    echo '<td class="titulo-tabela">Status</td>';

                    echo '</tr>';
                    echo '</thead>';
                    foreach ($retorno as $dado){ ?>

                        <td class="linhas-tabela"><?php echo $dado->getNome() ?></td>
                        <td class="linhas-tabela"><?php echo $dado->getSobrenome() ?></td>

                        <td class="linhas-tabela"><?php echo $dado->getEmail() ?></td>
                        <td class="linhas-tabela"><?php echo $dado->getLogin() ?></td>
                        <td class="linhas-tabela"><?php echo $dado->getStatus() ?></td>
                        <td>
                            <a href="/usuario?view&id=<?php echo $dado->getId() ?>">
                                <button type="submit" class="botao-detalhe">Detalhes</button>
                            </a>

                            <form action="/usuario?delete&id=<?php echo $dado->getId() ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit"class="botao-editar">Mudar</button>
                            </form>
                        </td>

                        </tr>
                    <?php }  }?>



                <?php
                if($tipo == "funcionario"){
                echo '<thead>';
                echo '<tr>';
                echo '<td class="titulo-tabela">Nome</td>';
                echo '<td class="titulo-tabela">Sobrenome</td>';
                echo '<td class="titulo-tabela">Email</td>';
                echo '<td class="titulo-tabela">Login</td>';
                echo '<td class="titulo-tabela">Status</td>';

                echo '</tr>';
                echo '</thead>';
                foreach ($retorno as $dado){ ?>

                <td class="linhas-tabela"><?php echo $dado->getNome() ?></td>
                <td class="linhas-tabela"><?php echo $dado->getSobrenome() ?></td>

                <td class="linhas-tabela"><?php echo $dado->getEmail() ?></td>
                <td class="linhas-tabela"><?php echo $dado->getLogin() ?></td>
                <td class="linhas-tabela"><?php echo $dado->getStatus() ?></td>
                <td>
                    <a href="/funcionario?view&id=<?php echo $dado->getId() ?>">
                        <button type="submit" class="botao-detalhe">Detalhes</button>
                    </a>
                    <form action="/funcionario?edit&id=<?php echo $dado->getId() ?>" method="post">
                        <input type="hidden" name="_method" value="PUT">
                        <button type="submit"class="botao-editar">Mudar</button>
                    </form>

                    <form action="/funcionario?delete&id=<?php echo $dado->getId() ?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit"class="botao-excluir">Excluir</button>
                    </form>
                </td>

                </tr>
                <?php }  }?>

                <?php
                if($tipo == "pedido"){
                    echo '<thead>';
                    echo '<tr>';
                    echo '<td class="titulo-tabela">Nome</td>';
                    echo '<td class="titulo-tabela">Sobrenome</td>';
                    echo '<td class="titulo-tabela">Login</td>';
                    echo '<td class="titulo-tabela">Total</td>';
                    echo '<td class="titulo-tabela">Status</td>';

                    echo '</tr>';
                    echo '</thead>';
                    foreach ($retorno as $dado){ ?>

                        <td class="linhas-tabela"><?php echo $dado->getUsuario()->getNome() ?></td>
                        <td class="linhas-tabela"><?php echo $dado->getUsuario()->getSobrenome() ?></td>
                        <td class="linhas-tabela"><?php echo $dado->getUsuario()->getLogin() ?></td>
                        <td class="linhas-tabela"><?php echo $dado->getTotal() ?></td>
                        <td class="linhas-tabela"><?php echo $dado->getStatus() ?></td>
                        <td>
                            <a href="/pedido?view&id=<?php echo $dado->getId() ?>">
                                <button type="submit" class="botao-detalhe">Detalhes</button>
                            </a>
                            <form action="/pedido?edit&id=<?php echo $dado->getId() ?>" method="post">
                                <input type="hidden" name="status" value="Encaminhado">
                                <input type="hidden" name="_method" value="PUT">
                                <button type="submit" class="botao-editar">Entregar</button></form>
                            <form action="/pedido?edit&id=<?php echo $dado->getId() ?>" method="post">
                                <input type="hidden" name="status" value="Pendente">
                                <input type="hidden" name="_method" value="PUT">
                                <button type="submit"class="botao-cancelar">Encerrar</button>
                            </form>
                            <form action="/pedido?edit&id=<?php echo $dado->getId() ?>" method="post">
                                <input type="hidden" name="status" value="Cancelado">
                                <input type="hidden" name="_method" value="PUT">
                                <button type="submit"class="botao-excluir">Cancelar</button>
                            </form>
                        </td>

                        </tr>
                    <?php }  }?>




                </tbody>
            </table>
            <?php if($tipo == "cardapio") {
                echo '<a href="/cardapio?create"><button  class="botao-adicionar">Adicionar</button></a>';
            }elseif ($tipo == "funcionario"){
                echo '<a href="/funcionario?create"><button  class="botao-adicionar">Adicionar</button></a>';
            }
            ?>




        </div>
    </div>
</div>
<script type="text/javascript" src="./script/controllerPrincipalAdm.js"></script>
</body>
</html>