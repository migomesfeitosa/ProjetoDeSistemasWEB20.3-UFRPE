<?php
namespace Projeto_1VA\src\view;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/forms.css">
    <title>Cadastrar
    </title>
</head>
<body id="body-page">

    <div class="div-register">
        
        <div>
            <h1>Cadastrar</h1>
        </div>

        <form action="/create-user" method="post">
            <div class="input-block">
                <input type="text" name="name" required placeholder="Nome">
            </div>

            <div class="input-block">
                <input type="text" name="user" required placeholder="Usuario">
            </div>

            <div class="input-block">
                <input type="password" name="password" required placeholder="Senha">
            </div>

            <div class="button">
                <a href="/">Voltar</a>

                <button type="submit">Cadastrar</button>
            </div>
        </form>

    </div>

    <?php
    if(isset($_SESSION['message'])){
        echo "<p>".$_SESSION['message']."</p>";
        unset($_SESSION['message']);
    }
    ?>


</body>
</html>