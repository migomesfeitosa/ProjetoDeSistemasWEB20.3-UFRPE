<?php
namespace Projeto_1VA\src\view;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/forms.css">
    <title>Login
    </title>
</head>
<body id="page-body">

    <div class="div-login">
        
        <div>
            <h1>Login</h1>
        </div>

        <form action="/auth" method="POST">
            <div class="input-block">
                <input type="text" name="user" required placeholder="Usuario">
            </div>

            <div class="input-block">
                <input type="password" name="password" required placeholder="Senha">
            </div>

            <div class="register">
                <a href="/register">Cadastre-se</a>
            </div>

            <div class="button">
                <button type="submit">Entrar</button>
            </div>
        </form>

    </div>

    <?php
    if(isset($_SESSION['message'])){
        echo "<p>".$_SESSION['message']."</p>";
        echo "<p>".$_SESSION['um']."</p>";
        unset($_SESSION['message']);
        unset($_SESSION['um']);
    }
    ?>


</body>
</html>