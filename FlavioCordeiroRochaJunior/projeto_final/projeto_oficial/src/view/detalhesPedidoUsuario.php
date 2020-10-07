
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>

    <link rel="stylesheet" href="css/style_ver_pedidos.css">
</head>
<body>

<div class="sessao">
    <div class="sub_fundo">

        <table class="tabela">
            <tbody>
            <?php

            echo '<thead>';
            echo '<tr>';
            echo '<td class="titulo-tabela">Nome</td>';
            echo '<td class="titulo-tabela">Quantidade</td>';
            echo '<td class="titulo-tabela">Preco</td>';
            echo '</tr>';
            echo '</thead>';
            foreach ($retorno->getItens() as $dado){ ?>

                <td class="linhas-tabela"><?php echo $dado->getNome() ?></td>
                <td class="linhas-tabela"><?php echo $dado->getQuantidade() ?></td>

                <td class="linhas-tabela"><?php echo $dado->getPreco() ?></td>
                <td>
                    <form action="/pedidoUsuario?delete&id=<?php echo $dado->getId() ?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <?php if($retorno->getStatus() != "Cancelado" && $retorno->getStatus() != "Encaminhado" && $retorno->getStatus() != "Entregue") {
                            echo '<button type="submit"class="botao-excluir">Excluir</button>';
                        }?>
                    </form>
                </td>
                </tr>
            <?php } ?>
            <tr>
                <td class="tabela-total">Total</td>
                <td class="tabela-total"></td>
                <td class="tabela-total"><?php echo 'R$ '.$retorno->getTotal();?></td>
            </tr>
            </tbody>
        </table>
        <form action="/pedidoUsuario?update&id=<?php echo $retorno->getId() ?>" method="post">
            <input type="hidden" name="_method" value="PUT">
            <?php if($retorno->getStatus() != "Cancelado" && $retorno->getStatus() != "Encaminhado"  && $retorno->getStatus() != "Entregue"){ echo '<button class="botao-adicionar">Finalizar Pedido</button><br>';}?>

        </form>
        <a href="/pedidoUsuario?index">
            <button class="botao-adicionar">Voltar</button></a>



    </div>
</div>
</body>

</html>
