
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <script type="text/javascript" src="script/jquery.js"></script>
    <link rel="stylesheet" href="css/style_ver_pedidos.css">
</head>
<body>
<header>
    <div class="menu">
        <div class="opcoes">
            <nav>
                <button class="botao_menu" id="btnInicio">Inicio</button>
                <button class="botao_menu" id="btnCardapio">Cardápio</button>
                <button class="botao_menu"  id="btnPedido">Pedido</button>

            </nav>
        </div>

        <div class="container_usuario">

            <div class="dados_usuario" id="dados_usuario">
                <label for=""><?php echo "{$_SESSION['email']}"?></label>
                <label for=""><?php echo "{$_SESSION['user']}"?></label>
            </div>

        </div>
        <div class="drop-menu" id="drop-menu">

            <a href="/usuario?edit&id=<?php echo $_SESSION['id']?>">
                <button class="itens-drop-menu" id="btnEditar" name="editar">Editar dados</button><br>
            </a>
            <a href="/pedidoUsuario?index">
                <button class="itens-drop-menu" id="btnVerPedidos"  name="verPedido">Ver pedidos</button><br>
            </a>
            <form action="/logout" method="get">
                <button type="submit" class="itens-drop-menu" id="btnSair"  name="sair">Sair</button>
            </form>

        </div>

    </div>
</header>


            <table class="tabela">
                <tbody>
                <?php

                    echo '<thead>';
                    echo '<tr>';
                    echo '<td class="titulo-tabela">Data</td>';
                    echo '<td class="titulo-tabela">Preço</td>';
                    echo '<td class="titulo-tabela">Status</td>';
                    echo '</tr>';
                    echo '</thead>';
                    foreach ($retorno as $dado){ ?>

                        <td class="linhas-tabela"><?php echo $dado->getDataCriacao() ?></td>
                        <td class="linhas-tabela"><?php echo $dado->getTotal() ?></td>

                        <td class="linhas-tabela"><?php echo $dado->getStatus() ?></td>
                        <td>
                            <a href="/pedidoUsuario?view&id=<?php echo $dado->getId(); $_SESSION['id_pedido'] = $dado->getId(); ?>">
                                <button type="submit" class="botao-detalhe">Detalhes</button>
                            </a>


                            <a href="/pedidoUsuario?edit&id=<?php echo $dado->getId()?>">

                                <button type="submit"class="botao-excluir">Cancelar</button>
                            </a>
                        </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>



<script type="text/javascript" src="script/controllerPrincipal.js"></script>
</body>

</html>
