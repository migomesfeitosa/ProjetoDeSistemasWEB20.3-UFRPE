<?php
namespace Projeto_1VA\src\view;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login
    </title>
</head>
<body id="body-page">

    <div class="div-login">
        
        <form action="/auth" method="post">
            <input type="text" name="user" required placeholder="Usuario">
            <input type="password" name="password" required placeholder="Senha">
            <button type="submit">Entrar</button>
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