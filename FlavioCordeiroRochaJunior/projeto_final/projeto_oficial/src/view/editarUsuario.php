<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="./css/style_cadastroUsuario.css">
</head>
<body bgcolor="black">
<div class="fundo">
    <div class="sub-fundo">
        <div class="caixa-cadastro">
            <form action="/usuario?update&id=<?php echo $retorno->getId() ?>" method="post">
                <fieldset class="caixa-dados">
                    <legend class="legenda">Dados:</legend>
                    <input type="hidden" name="_method" value="PUT">
                    <input type="text" name="nome" id="" class="textfield" placeholder="Digite seu nome" value="<?php echo $retorno->getNome() ?>"><br>
                    <input type="text" name="sobrenome" id="" class="textfield" placeholder="Digite seu sobrenome" value="<?php echo $retorno->getSobrenome() ?>"><br>
                    <input type="email" name="email" id="" class="textfield" placeholder="Digite seu email" value="<?php echo $retorno->getEmail() ?>"><br>
                    <input type="hidden" name="tipo" value="<?php $retorno->getTipo()?>">

                </fieldset>
                <fieldset class="caixa-dados">
                    <legend class="legenda">Endereço:</legend>
                    <input type="text" name="cidade" id="" class="textfield" placeholder="Digite a cidade" value="<?php echo $retorno->getCidade() ?>"><br>
                    <input type="text" name="bairro" id="" class="textfield" placeholder="Digite o bairro" value="<?php echo $retorno->getBairro() ?>"><br>
                    <input type="text" name="rua" id="" class="textfield" placeholder="Digite a rua" value="<?php echo $retorno->getRua() ?>"><br>
                    <input type="text" name="numero" id="" class="textfield" placeholder="Digite o Nº" value="<?php echo $retorno->getNumero() ?>">
                </fieldset>
                <fieldset class="caixa-dados">
                    <legend class="legenda">Autenticação</legend>
                    <input type="text" name="login" id="" class="textfield" placeholder="Digite o login" value="<?php echo $retorno->getLogin() ?>"><br>
                    <input type="password" name="senha1" id="" class="textfield" placeholder="Digite uma senha" value="<?php echo $retorno->getSenha() ?>"><br>
                    <input type="password" name="senha2" id="" class="textfield" placeholder="Digite a senha novamente">

                </fieldset>
                <button type="submit" class="botao">Finalizar</button>

                <?php if (isset($_SESSION['mensagem'])){
                    echo "<label style='position: absolute;top:625px;left: 20%;color: red;font-family: Arial, Helvetica, sans-serif;font-size: 20px'>{$_SESSION['mensagem']}</label>";
                } ?>
            </form>

        </div>
    </div>
</div>
</body>
</html>