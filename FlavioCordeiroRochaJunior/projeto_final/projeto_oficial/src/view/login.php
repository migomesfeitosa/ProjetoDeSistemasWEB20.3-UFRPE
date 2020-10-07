<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style_login.css">
</head>
<body>
    <div class="fundo">
        <div class="sub-fundo">
            <div class="caixa-login">
                <fieldset class="caixa-dados">
                    <legend class="legenda">Entrar</legend>
                    <form action="/auth" method="post">
                        <input type="text" name="login" id="" class="textfield" placeholder="Digite o seu login">
                        <input type="password" name="password" id="" class="textfield" placeholder="Digite a sua senha"><br>

                        <button type="submit" class="botao-entrar">Entrar</button>
                    </form>
                    <form action="/cadastro" method="get">

                        <button type="submit" class="sem-cadastro">Não tem cadastro no sistema?</button>
                    </form>

                </fieldset>
            </div>
        </div>
    </div>
    
    
</body>
</html>