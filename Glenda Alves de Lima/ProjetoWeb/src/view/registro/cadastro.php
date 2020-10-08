<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/style.css">
    <link rel="icon" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/img/IconeLogo.png">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    
</head>
<body>
    <div class="login">
        <img src="//<?php echo $_SERVER["HTTP_HOST"]; ?>/img/cadastro.png" class="usuario" width="100" height="100" alt="">
        <h1>Cadastro</h1>
        <form action="/usuario"method="POST" >
            <p>Usuário</p>
            <input type="text" name="nome" placeholder="Insira seu nome de usuario">
            <p>Email</p>
            <input type="email" name="email" placeholder="Insira seu email">
            <p>Senha</p>
            <input type="password" name="senha" placeholder="Insira sua senha">
            <input type="submit" name="" value="Cadastrar">
 
        </form>
 
 
 
    </div>
     
 </body>
</html>