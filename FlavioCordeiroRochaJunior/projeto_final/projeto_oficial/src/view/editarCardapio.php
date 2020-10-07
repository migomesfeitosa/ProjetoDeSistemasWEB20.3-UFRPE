<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cardápio</title>
    <link rel="stylesheet" href="./css/style_cadastroCardapio.css">
</head>
<body bgcolor="black">
<div class="fundo">
    <div class="sub-fundo">
        <div class="caixa-cadastro">
            <form action="/cardapio?update&id=<?php echo $retorno->getId() ?>" method="post">
                <fieldset class="caixa-dados">
                    <legend class="legenda">Dados:</legend>
                    <input type="hidden" name="_method" value="PUT">
                    <input type="text" name="nome" id="" class="textfield" placeholder="Digite o nome" value="<?php echo $retorno->getNome() ?>"><br>
                    <input type="text" name="preco" id="" class="textfield" placeholder="Digite o seu preço"  value="<?php echo$retorno->getPreco() ?>"><br>
                    <input type="text" name="ingredientes" id="" class="textfield" placeholder="Digite os ingredientes" value="<?php echo $retorno->getIngredientes() ?>"><br>
                    <select name="tipo" id="" class="comboBox">
                        <option itemid="1" value="pizza" <?php if($retorno->getTipo() == "pizza"){echo "selected";}?>>Pizza</option>
                        <option itemid="2" value="hamburguer" <?php if($retorno->getTipo() == "hamburguer"){echo "selected";}?>>Hamburguer</option>
                        <option itemid="3" value="pocao"  <?php if($retorno->getTipo() == "pocao"){echo "selected";}?>>Poção</option>
                        <option itemid="4" value="bebida"  <?php if($retorno->getTipo() == "bebida"){echo "selected";}?>>Bebida</option>
                    </select>

                </fieldset>

                <button type="submit" class="botao">Finalizar</button>
                <a href="/cardapio?index"><button type="submit" class="botao">Voltar</button></a>
            </form>
        </div>
    </div>
</div>
</body>
</html>