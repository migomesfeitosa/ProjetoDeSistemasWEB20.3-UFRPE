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

                <button class="botao_menu" id="btnCardapio">Cardápio</button>
                <button class="botao_menu"  id="btnPedido">Pedido</button>
                <button class="botao_menu"  id="btnSobre">Usuário</button>
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

        <div class="caixa-view-usuario">

            <fieldset class="caixa-dados">
                <legend class="legenda">Dados:</legend>
                <label for="" class="label-titulo-detalhe">Nome: </label>
                <label for="" class="label-dados"><?php echo $retorno->getUsuario()->getNome() ?></label><br>
                <label for="" class="label-titulo-detalhe">Sobrenome: </label>
                <label for="" class="label-dados"><?php echo $retorno->getUsuario()->getSobrenome() ?></label><br>

                <label for="" class="label-titulo-detalhe">Email: </label>
                <label for="" class="label-dados"><?php echo $retorno->getUsuario()->getEmail() ?></label><br>




            </fieldset>
            <fieldset class="caixa-dados">
                <legend class="legenda">Endereço:</legend>
                <label for="" class="label-titulo-detalhe">Cidade: </label>
                <label for="" class="label-dados"><?php echo $retorno->getUsuario()->getCidade() ?></label><br>

                <label for="" class="label-titulo-detalhe">Bairro: </label>
                <label for="" class="label-dados"><?php echo $retorno->getUsuario()->getBairro() ?></label><br>

                <label for="" class="label-titulo-detalhe">Rua: </label>
                <label for="" class="label-dados"><?php echo $retorno->getUsuario()->getRua() ?></label><br>

                <label for="" class="label-titulo-detalhe">Número: </label>
                <label for="" class="label-dados"><?php echo $retorno->getUsuario()->getNumero() ?></label><br>


            </fieldset>
            <fieldset class="caixa-autenticao-detalhes">
                <legend class="legenda">Autenticação</legend>
                <label for="" class="label-titulo-detalhe">Login: </label>
                <label for="" class="label-dados"><?php echo $retorno->getUsuario()->getLogin() ?></label><br>
            </fieldset>

            <h2 class="titulo-item">Itens:</h2>

            <table class="tabela">
                <tbody>
            <?php

                echo '<thead>';
                echo '<tr>';
                echo '<td class="titulo-tabela">Nome</td>';
                echo '<td class="titulo-tabela">Quantidade</td>';
                echo '<td class="titulo-tabela">Preço</td>';


                echo '</tr>';
                echo '</thead>';
                foreach ($retorno->getItens() as $dado){ ?>

                    <td class="linhas-tabela"><?php echo $dado->getNome() ?></td>
                    <td class="linhas-tabela"><?php echo $dado->getQuantidade() ?></td>
                    <td class="linhas-tabela"><?php echo $dado->getPreco() ?></td>



                    </tr>
                <?php }  ?>


                <tr>
                    <td class="tabela-total">Total:</td>
                    <td class="tabela-total"></td>
                    <td class="tabela-total"><?php echo "R\$ {$retorno->getTotal()}";?></td>
                </tr>
                </tbody>
            </table>
            <form action="/pedido?edit&id=<?php echo $retorno->getId() ?>" method="post">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="status" value="Entregue">
                <button type="submit" class="botao-entregue">Entregue</button>
            </form>
            <form action="/pedido?index" method="get">
                <button type="submit" class="botao-voltar">Voltar</button>
            </form>


        </div>



    </div>
</div>
<script type="text/javascript" src="./script/controllerPrincipalFuncionario.js"></script>
</body>
</html>

